<?php
/**
 * Archivo: buscar.php
 * 
 * Descripción: Script AJAX que procesa las búsquedas de estudiantes. Recibe
 * el término de búsqueda, aplica filtros anti-XSS, realiza consultas a la base
 * de datos y devuelve los resultados en formato HTML para ser mostrados.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Procesa las solicitudes de búsqueda desde buscaralumno.php y devuelve
 * los resultados de estudiantes que coincidan con el criterio de búsqueda.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

include 'sessionno.php';
// añadir codigo php aqui
// //Variable de búsqueda
$consultaBusqueda =$_POST['valorBusqueda'];
//Filtro anti-XSS
$caracteres_malos = array("<", ">","\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("&lt;", "&gt;", "&quot;", "&#x27;", "&#x2F;","&#060;", "&#062;", "&#039;", "&#047;");
$consultaBusqueda =str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);
//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";
//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {
//Selecciona todo de la tabla mmv001
//donde el nombre sea igual a $consultaBusqueda,
//o el apellido sea igual a $consultaBusqueda,
//o $consultaBusqueda sea igual a nombre + (espacio) + apellido
    $consulta = mysqli_query($mysqli, "SELECT * FROM estudiantes WHERE nombres COLLATE UTF8_SPANISH_CI LIKE '%$consultaBusqueda%' OR apellidos COLLATE UTF8_SPANISH_CI LIKE '%$consultaBusqueda%' OR cedula COLLATE UTF8_SPANISH_CI LIKE '%$consultaBusqueda%' OR CONCAT(nombres,' ',apellidos) COLLATE UTF8_SPANISH_CI LIKE '%$consultaBusqueda%' ");
//Obtiene la cantidad de filas que hay en la consulta
    $filas = mysqli_num_rows($consulta);
//Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
    if ($filas === 0) {
        $mensaje = "<p>No hay ningún usuario con ese numero de cedula, nombre y/o apellido</p>";
    } else {
    //Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
        echo 'Resultados para <strong>'.$consultaBusqueda.'</strong><br>';
    //La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
        while ($resultados = mysqli_fetch_array($consulta)) {
            $nombre = $resultados['nombres'];
            $apellido = $resultados['apellidos'];
            $cedula = $resultados['cedula'];
            $id = $resultados['id'];
        //Output
            $mensaje .= '<li><strong>'.$cedula.' '.$nombre.' '.$apellido.'</strong>  <a class="btn btn-primary" href="mostrarbusqueda.php?id='.$id.'" title="mostrar">VER</a></li>';
        };//Fin while     $resultados
    }; //Fin  else $filas
};//Fin isset $consultaBusqueda
//Devolvemos el mensaje que tomará jQuery
echo $mensaje;
