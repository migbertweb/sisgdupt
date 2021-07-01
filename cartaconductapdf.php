<?php
include 'sessionno.php';
// recibimos el ID del Alumno
$id = $_GET['id'];
// Consultamos la BD
$sql = "SELECT * FROM estudiantes WHERE id = '$id'";
$resultado = $mysqli->query($sql);
// Almacenamos los datos obtenidos
$row = $resultado->fetch_array(MYSQLI_ASSOC);
//declaramos la fecha actual y en formato largo
$fecha= strftime(" %d dias del mes de %B del año %Y");
//Declaramos las variables a utilizar
$nombres = $row['nombres'];
$apellidos = $row['apellidos'];
$cedula = $row['cedula'];
//la convierto a Mayusculas
$nombres = "$nombres "."$apellidos";
$nombres = strtoupper($nombres);
//Incluimos la Libreria FPDF
require('fpdf181/fpdf.php');
//Creamos la nueva clase pdf que hereda de fpdf
class PDF extends FPDF
{
// utilizamos la funcion Header() y la personalizamos para que muestre la cabecera de página
    function Header()
    {
    //añadimos el cintillo
        $this->Image('img/cintillo1.png', 30, 16, 155);
        $this->Line(30, 29, 216-30, 29);
    // seteamos el tipo de letra Arial Negrita 16
        $this->SetFont('Times', 'BU', 17);
    // definimos la celda el titulo
        $this->Cell(0, 15, 'Constancia de Conducta', 0, 1, 'C');
    // Salto de línea de 20 lineas
        $this->Ln(20);
    }
// utilizamos la funcion Footer() y la personalizamos para que muestre el pie de página
    function Footer()
    {
    // Seteamos la posicion de la proxima celda en forma fija a 1,5 cm del final de la pagina
        $this->SetY(-45);
    // Seteamos el tipo de letra Arial italica 10
        $this->SetFont('Times', 'BI', 11);
    //texto de pie
        $text1 = utf8_decode('Revolucionando la Educación Universitaria');
        $this->Cell(0, 5, $text1, 0, 1, 'C');
        $this->SetFont('Times', '', 10);
        $text2 = utf8_decode('Calle Igualdad, entre Calle Progreso y Rosario, No 28, Edif. IUTEB, Casco Histórico de');
        $this->Cell(0, 5, $text2, 0, 1, 'C');
        $text3 = utf8_decode('Ciudad Bolívar - Edo. Bolívar - Venezuela');
        $this->Cell(0, 5, $text3, 0, 1, 'C');
        $text4 = utf8_decode('Teléfonos: (0285) 6320007/ 6340339');
        $this->Cell(0, 5, $text4, 0, 1, 'C');
        $this->Ln(5);
    // Seteamos el tipo de letra Arial italica 10
        $this->SetFont('Arial', 'I', 9);
    // definimos el color de linea RGB
        $this->SetDrawColor(220, 20, 20);
    // definimos el grueso de la linea 0.2 es default
        $this->SetLineWidth(0.5);
    // contruimos una linea definiendo los puntos de inicio y fin
        $this->Line(30, 239, 216-30, 239);
    // Número de página
    // $this->Cell(0,5,'Pag.'.$this->PageNo().'/{nb}',0,1,'C');
    }
}
$pdf = new PDF('P', 'mm', 'Letter');
#Establecemos los márgenes izquierda, arriba y derecha:
$pdf->SetMargins(30, 25, 30);
#Establecemos el margen inferior:
$pdf->SetAutoPageBreak(true, 25);
// Titulo del Documento
$pdf->SetTitle('Constancia de Modalidad');
// definir el numero de Pagina
$pdf->AliasNbPages();
// margen superior desde la orilla de la hoja en mm
$pdf->SetTopMargin(50);
// Añadimos la Primera Pagina
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
//Texto Principal con las variables añadidas
$textoprincipal= "Quien suscribe, jefe del Departamento de Control de Estudios del Instituto Universitario de Tecnología del Estado Bolívar, hace constar por medio de la presente que el ciudadano ".$nombres.", portador de la cédula de identidad V-".$cedula.", manifestó durante su permanencia en esta casa de Educación Universitaria BUENA CONDUCTA.";
//convertimos texto a UTF8 para evitar errores de simbolos
$textop = utf8_decode($textoprincipal);
// añadimos el multicell con el texto principal
$pdf->MultiCell(0, 6, $textop);
$pdf->Ln(6);
$textofecha = utf8_decode("Constancia que se expide a petición de la parte interesada, en Ciudad Bolívar, a los".$fecha." "); //Fecha
$pdf->MultiCell(0, 6, $textofecha); //fecha
$pdf->Ln(37);
$pdf->SetFont('Times', 'B', 12); //Firma del jefe control estudio
$firma11= utf8_decode('MsC. Carlos E. Toledo Romero');
$pdf->Cell(75, 6, $firma11, 0, 0, 'C');
$pdf->Cell(3, 6, '', 0, 0, 'C');
$firma12= utf8_decode('Dr. C. Willfor R. Goudeth Galindo');
$pdf->Cell(80, 6, $firma12, 0, 1, 'C');
$pdf->SetLineWidth(0.4); //grueso de linea
$pdf->SetFont('Times', 'B', 12); //Firma del Director
$firma21= utf8_decode('Jefe de Control de Estudio');
$pdf->Cell(75, 6, $firma21, 0, 0, 'C');
$pdf->Cell(3, 6, '', 0, 0, 'C');
$firma22= utf8_decode('Director');
$pdf->Cell(80, 6, $firma22, 0, 1, 'C');
$pdf->SetLineWidth(0.4); //grueso de linea
$pdf->Line(37, 170, 210-112, 170); //Linea sobre la firma 1
$pdf->Line(115, 170, 290-108, 170); //Linea sobre la firma 2
$pdf->Output('ConstanciadeConducta.pdf', 'I'); //salida del Documento PDF
