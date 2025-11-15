<?php
/**
 * Archivo: logout.php
 * 
 * Descripción: Script para cerrar sesión de usuario. Destruye la sesión actual
 * y redirige al usuario a la página principal del sistema.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Procesa el cierre de sesión cuando el usuario selecciona "Cerrar Sesión"
 * desde el menú de navegación.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

session_start(); //Iniciar una nueva sesión o reanudar la existente
session_destroy(); //Destruye la sesión

header('location: index.php'); //Redirecciona la inicio

?>
