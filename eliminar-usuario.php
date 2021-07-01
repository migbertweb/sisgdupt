<?php
require 'sessionno.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    $resultado = $mysqli->query($sql);
if ($resultado) {
    header("Location: listarusuarios.php?errores=si&mensaje=Registro Eliminado de la base de Datos");
} else {
    header("Location: listarusuarios.php?errores=si&mensaje=Error al eliminar el Registro");
}
