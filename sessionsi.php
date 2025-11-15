<?php
/**
 * Archivo: sessionsi.php
 * 
 * Descripción: Script de verificación de sesión para páginas públicas (login,
 * registro). Verifica que el sistema esté instalado y que el usuario NO esté
 * autenticado, redirigiendo al index si ya tiene sesión activa.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Archivo requerido en páginas públicas como login.php y registro.php
 * para evitar que usuarios autenticados accedan a estas páginas.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

session_start();
if (!file_exists("funcs/config.php")) {
    header("Location: instalar/");
}
require 'funcs/conexion.php';
include 'funcs/funcs.php';
if (isset($_SESSION["id_usuario"])) {
    header("Location: index.php");
}
