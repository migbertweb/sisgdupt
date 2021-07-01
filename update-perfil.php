<?php
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
