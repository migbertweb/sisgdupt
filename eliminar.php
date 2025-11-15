<?php
/**
 * Archivo: eliminar.php
 * 
 * Descripción: Procesa la eliminación de un registro de estudiante de la base
 * de datos. Recibe el ID del estudiante y elimina el registro correspondiente.
 * Redirige con mensajes de éxito o error.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Script que elimina registros de estudiantes de la base de datos.
 * Generalmente llamado desde un modal de confirmación.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

require 'sessionno.php';
    $id = $_GET['id'];
    
    $sql = "DELETE FROM personas WHERE id = '$id'";
    $resultado = $mysqli->query($sql);
if ($resultado) {
    header("Location: registrosper.php?errores=si&mensaje=Registro Eliminado de la base de Datos");
} else {
    header("Location: registrosper.php?errores=si&mensaje=Error al eliminar el Registro");
}
