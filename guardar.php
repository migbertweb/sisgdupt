<?php
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
