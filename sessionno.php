<?php
/**
 * Archivo: sessionno.php
 * 
 * Descripción: Script de verificación de sesión para páginas que requieren
 * autenticación. Verifica que el usuario haya iniciado sesión y redirige
 * al login si no está autenticado. Incluye las dependencias necesarias
 * (conexión y funciones).
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Archivo requerido al inicio de todas las páginas que requieren
 * autenticación de usuario para proteger el acceso no autorizado.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

session_start();
require 'funcs/conexion.php';
require 'funcs/funcs.php';
if (!isset($_SESSION["id_usuario"])) { //Si no ha iniciado sesión redirecciona a index.php
    header("Location: login.php");
}
