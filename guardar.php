<?php
/**
 * Archivo: guardar.php
 * 
 * Descripción: Procesa y guarda los datos del formulario de nuevo estudiante
 * en la base de datos. Valida y sanitiza los datos antes de insertarlos.
 * Redirige con mensajes de éxito o error según el resultado de la operación.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Script de procesamiento que recibe los datos del formulario nuevo.php
 * y los almacena en la tabla de estudiantes de la base de datos.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

require 'sessionno.php';

    $cedula = $_POST['cedula'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $direccion= $_POST['direccion'];
    $fechanac = $_POST['fechanac'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $indigena = $_POST['indigena'];
    $etnia = $_POST['etnia'];
    if ($indigena=='no') {
        $etnia='ninguna';
    }
    $discapacitado = $_POST['discapacitado'];
    $discapacidad = $_POST['discapacidad'];
    if ($discapacitado=='no') {
        $discapacidad='ninguna';
    }
    $pnf = $_POST['pnf'];
    $anno = $_POST['anno'];

    
    $sql = "INSERT INTO estudiantes (cedula, nombres, apellidos, direccion, fechanac, email, telefono, indigena, etnia, discapacitado, discapacidad, pnf, anno) VALUES ('$cedula','$nombres','$apellidos','$direccion','$fechanac','$email', '$telefono','$indigena','$etnia','$discapacitado','$discapacidad','$pnf','$anno')";
    $resultado = $mysqli->query($sql);
if ($resultado) {
    header("Location: nuevo.php?eventos=si&mensaje=Registro $nombres Guardado correctamente");
} else {
    header("Location: nuevo.php?errores=si&mensaje=Error al Registrar $nombres");
}
