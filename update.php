<?php
    require 'sessionno.php';
    
    $id = $_POST['id'];
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

    $sql = "UPDATE estudiantes SET cedula='$cedula', nombres='$nombres', apellidos='$apellidos', direccion='$direccion', fechanac='$fechanac', email='$email', telefono='$telefono',indigena='$indigena', etnia='$etnia', discapacitado='$discapacitado', discapacidad='$discapacidad', pnf='$pnf', anno='$anno' WHERE id = '$id'";
    $resultado = $mysqli->query($sql);
if ($resultado) {
    header("Location: mostrarregistros.php?eventos=si&mensaje=Registro $nombres Actualizado");
} else {
    header("Location: modificar.php?id=$id&errores=si&mensaje=Error al Actualizar el Registro $nombres");
}
