<?php
require 'config.php'; //Datos para la conexion con el Servidor MySql
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
/*Chequeamos la conexion*/
if (mysqli_connect_errno()) {
    echo 'Conexion Fallida : ', mysqli_connect_error();
    exit();
}
/* Cambiamos la codificacion de caracteres a utf8
if (!$mysqli->set_charset("utf8")) {
    printf("Error cargando caracteres como utf8: %s\n", $mysqli->error);
    exit();
}
*/
