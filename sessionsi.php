<?php
session_start();
if (!file_exists("funcs/config.php")) {
    header("Location: instalar/");
}
require 'funcs/conexion.php';
include 'funcs/funcs.php';
if (isset($_SESSION["id_usuario"])) {
    header("Location: index.php");
}
