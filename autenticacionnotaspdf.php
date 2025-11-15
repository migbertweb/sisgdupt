<?php
/**
 * Archivo: autenticacionnotaspdf.php
 * 
 * Descripción: Genera un documento PDF de autenticación de título para un estudiante.
 * Utiliza la librería FPDF para crear un documento oficial que certifica la autenticidad
 * del título académico del estudiante, incluyendo información del PNF y detalles del programa.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Genera un PDF de autenticación de título cuando se solicita desde
 * mostrarbusqueda.php para un estudiante específico.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

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
$carrera = null;
$regimen = null;
if ($row['pnf']=="PNF Mecanica Diseño Curricular 2008") {
    $carrera = 'Técnico Superior Universitario en Mecánica';
    $regimen = 'por un lapso de dos (2) años de manera presencial, consta de 122 Unidades de Crédito y 3.600 Horas Académicas.';
} elseif ($row['pnf']=="PNF Electricidad Diseño Curricular 2008") {
    $carrera = 'Técnico Superior Universitario en Electricidad';
    $regimen = 'por un lapso de dos (2) años de manera presencial, consta de 122 Unidades de Crédito y 3.600 Horas Académicas.';
} elseif ($row['pnf']=="PNF Electricidad Diseño Curricular 2013") {
    $carrera = 'Técnico Superior Universitario en Electricidad';
    $regimen = 'por un lapso de dos (2) años de manera presencial, consta de 122 Unidades de Crédito y 3.600 Horas Académicas.';
} elseif ($row['pnf']=="PNF Geociencias Diseño Curricular 2011") {
    $carrera = 'Técnico Superior Universitario en Geociencias';
    $regimen = 'por un lapso de dos (2) años de manera presencial, consta de 122 Unidades de Crédito y 3.600 Horas Académicas.';
} elseif ($row['pnf']=="PNF Geociencias Diseño Curricular 2013") {
    $carrera = 'Técnico Superior Universitario en Geociencias';
    $regimen = 'por un lapso de dos (2) años de manera presencial, consta de 122 Unidades de Crédito y 3.600 Horas Académicas.';
} elseif ($row['pnf']=="PNF Informatica Diseño Curricular 2008") {
    $carrera = 'Técnico Superior Universitario en Informatica';
    $regimen = 'por un lapso de dos (2) años de manera presencial, consta de 122 Unidades de Crédito y 3.600 Horas Académicas.';
} elseif ($row['pnf']=="PNF Mantenimiento Diseño Curricular 2008") {
    $carrera = 'Técnico Superior Universitario en Mantenimiento Industrial';
    $regimen = 'por un lapso de dos (2) años de manera presencial, consta de 122 Unidades de Crédito y 3.600 Horas Académicas.';
} elseif ($row['pnf']=="PNF Sistemas de Calidad y Ambiente Diseño Curricular 2011") {
    $carrera = 'Técnico Superior Universitario en Sistemas de Calidad y Ambiente';
    $regimen = 'por un lapso de dos (2) años de manera presencial, consta de 122 Unidades de Crédito y 3.600 Horas Académicas.';
} elseif ($row['pnf']=="PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013") {
    $carrera = 'Técnico Superior Universitario en Sistemas de Calidad y Ambiente';
    $regimen = 'por un lapso de dos (2) años de manera presencial, consta de 122 Unidades de Crédito y 3.600 Horas Académicas.';
}
//la convierto a Mayusculas
$nombres = "$nombres "."$apellidos";
$nombres = strtoupper($nombres);
$carrera = strtoupper($carrera);
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
        $this->Cell(0, 15, 'Autenticacion de Notas', 0, 1, 'C');
    // Salto de línea salta 20 lineas
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
$pdf->SetTitle('Autenticacion de Notas');
// definir el numero de Pagina
$pdf->AliasNbPages();
// margen superior desde la orilla de la hoja en mm
$pdf->SetTopMargin(50);
// Añadimos la Primera Pagina
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
//Texto Principal con las variables añadidas
$textoprincipal= "Quien suscribe, Dr C. WILLFOR RAFAEL GOUDETH GALINDO, titular de la cédula de identidad, V.-11.173.641, Coordinador de la Comisión de Modernización y Transformación del Instituto Universitario de Tecnología del Estado Bolívar, designado mediante Resolución No 162, publicada en la Gaceta Oficial N° 40.907, de fecha 19/05/2016, certifica que el fondo negro anexo es copia fiel y exacta del título original de ".$carrera.", del ciudadano: ".$nombres.", titular de cédula de identidad N° V.".$cedula.", emitido por esta institución previo cumplimiento de los requisitos legales para su conferimiento y asentado en el Libro XXII, Folio 211, de fecha veintitrés (23) de julio del año 2012.";
//convertimos texto a UTF8 para evitar errores de simbolos
$textop = utf8_decode($textoprincipal);
// añadimos el multicell con el texto principal
$pdf->MultiCell(0, 6, $textop);
$pdf->Ln(6);
$textofecha = utf8_decode("Constancia que se expide en Ciudad Bolívar, a los ".$fecha." "); //Fecha
$pdf->MultiCell(0, 6, $textofecha); //fecha
$pdf->Ln(37);
$pdf->SetFont('Times', 'B', 12); //Firma del Coordinador
$firma1= utf8_decode('Dr. C. Willfor Rafael Goudeth Galindo');
$pdf->Cell(0, 5, $firma1, 0, 1, 'C');
$firma2= utf8_decode('Coordinador de Modernización y');
$pdf->Cell(0, 5, $firma2, 0, 1, 'C');
$firma3= utf8_decode('Transformación del IUTEB');
$pdf->Cell(0, 5, $firma3, 0, 1, 'C');
$pdf->SetLineWidth(0.4); //grueso de linea
$pdf->Line(70, 200, 216-70, 200); //Linea sobre la firma
$pdf->Output('autenticacionnotas.pdf', 'I'); //salida del Documento PDF
