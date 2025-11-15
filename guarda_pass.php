<?php
/**
 * Archivo: guarda_pass.php
 * 
 * Descripción: Procesa el cambio de contraseña del usuario. Valida que las
 * contraseñas coincidan, genera el hash y actualiza la contraseña en la base
 * de datos. Invalida el token de recuperación después del cambio.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Script que procesa el formulario de cambio de contraseña desde
 * cambia_pass.php y actualiza la contraseña en la base de datos.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

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
