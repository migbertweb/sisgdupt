<?php
include 'sessionsi.php';
    $user_id = $mysqli->real_escape_string($_POST['user_id']);
    $token = $mysqli->real_escape_string($_POST['token']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $con_password = $mysqli->real_escape_string($_POST['con_password']);
    
if (validaPassword($password, $con_password)) {
    $pass_hash = hashPassword($password);
        
    if (cambiaPassword($pass_hash, $user_id, $token)) {
        header("Location: login.php?errores=si&mensaje=Password modificado con exito.");
    } else {
        echo "Error al modificar contrase&ntilde;a";
    }
} else {
    echo 'Las contraseñas no coinciden';
}
