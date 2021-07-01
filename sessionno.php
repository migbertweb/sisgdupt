<?php
session_start();
require 'funcs/conexion.php';
require 'funcs/funcs.php';
if (!isset($_SESSION["id_usuario"])) { //Si no ha iniciado sesión redirecciona a index.php
    header("Location: login.php");
}
