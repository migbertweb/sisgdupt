<?php
/**
 * Archivo: eliminar-usuario.php
 * 
 * Descripción: Procesa la eliminación de un usuario del sistema de la base
 * de datos. Recibe el ID del usuario y elimina el registro correspondiente.
 * Redirige con mensajes de éxito o error. Solo accesible para administradores.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Script que elimina usuarios del sistema de la base de datos.
 * Generalmente llamado desde un modal de confirmación en listarusuarios.php.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

require 'sessionno.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    $resultado = $mysqli->query($sql);
if ($resultado) {
    header("Location: listarusuarios.php?errores=si&mensaje=Registro Eliminado de la base de Datos");
} else {
    header("Location: listarusuarios.php?errores=si&mensaje=Error al eliminar el Registro");
}
