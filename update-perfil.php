<?php
/**
 * Archivo: update-perfil.php
 * 
 * Descripción: Procesa la actualización del perfil de usuario en la base de
 * datos. Recibe los datos del formulario de modificación y actualiza el registro
 * del usuario. Redirige con mensajes de éxito o error.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Script de procesamiento que actualiza los datos de un usuario en la
 * base de datos después de la edición en modificar-perfil.php.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

require 'sessionno.php';
    
    $id = (isset($_POST['id']) ) ? $_POST['id'] : null;
    /*$id = $_POST['id'];*/
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $id_tipo= $_POST['id_tipo'];

    $sql = "UPDATE usuarios SET nombre='$nombre', usuario='$usuario', id_tipo='$id_tipo' WHERE id = '$id'";
    $resultado = $mysqli->query($sql);
if ($resultado) {
    header("Location: listarusuarios.php?id=$id&eventos=si&mensaje=Perfil $nombre Actualizado");
} else {
    header("Location: listarusuarios.php?id=$id&errores=si&mensaje=Error al Actualizar el Perfil de $nombre");
}
