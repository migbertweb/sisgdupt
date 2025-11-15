<?php
/**
 * Archivo: funcs/conexion.php
 * 
 * Descripción: Establece la conexión con la base de datos MySQL/MariaDB.
 * Lee la configuración desde config.php y crea una instancia de mysqli.
 * Incluye manejo de errores de conexión.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Archivo requerido en todas las páginas que necesiten acceso a la base
 * de datos. Proporciona la variable global $mysqli para realizar consultas.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

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
