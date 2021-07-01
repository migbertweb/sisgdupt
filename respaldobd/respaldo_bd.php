<?php
require '../sessionno.php';
$fecha = date("d-m-Y_H:i"); //Obtenemos la fecha y hora para identificar el respaldo
// Construimos el nombre de archivo SQL con la fecha y hora
$salida_sql = $db_name.'_'.$fecha.'.sql';
//generamos la consulta para el respaldo de la Base de datos
$dump = "/opt/lampp/bin/mysqldump -h$db_host -u$db_user -p$db_pass --opt $db_name > $salida_sql";
system($dump, $output); //Ejecutamos el comando para respaldo
$zip = new ZipArchive(); //creamos una nueva instancia de Libreria ZipArchive
//Construimos el nombre del archivo ZIP Ejemplo: mibase_20160101-081120.zip
$salida_zip = $db_name.'_'.$fecha.'.zip';
if ($zip->open($salida_zip, ZIPARCHIVE::CREATE)===true) { //Creamos y abrimos el archivo ZIP
    $zip->addFile($salida_sql); //Agregamos el archivo SQL al ZIP
    $zip->close(); //Cerramos el ZIP
    unlink($salida_sql); //Eliminamos el archivo temporal SQL
    header("Location: $salida_zip"); // Redireccionamos para descargar el Arcivo ZIP
} else {
    echo 'Error'; //Enviamos el mensaje de error
}
