<?php
if (file_exists("../funcs/config.php") && filesize("../funcs/config.php") > 0.5) {
    $text = utf8_decode('El Sistema ya esta Instalado');
    header("Location: ../login.php?eventos=si&mensaje=$text");
    exit();
}
setlocale(LC_ALL, 'es_ES.UTF-8');
date_default_timezone_set('America/Caracas');
    $DBhostname = trim($_POST['DBhostname']);
    $DBusername = trim($_POST['DBusername']);
    $DBpassword = trim($_POST['DBpassword']);
    $DBname     = trim($_POST['DBname']);
if (empty($_POST['prueba'])) {
    $datos='sql/base1.sql';
} else {
    $datos='sql/base2.sql';
}
    $correcto="si";
//Creamos la base de Datos
$link = mysqli_connect($DBhostname, $DBusername, $DBpassword);
// Chequeamos la Conexion
if ($link==false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Creamos la Consulta
$sql = 'CREATE DATABASE '.$DBname.' CHARACTER SET utf8 COLLATE utf8_spanish_ci';
if (mysqli_query($link, $sql)) {
    //Importamos el archivo SQL a la base de datos Creada
    $conn =new mysqli($DBhostname, $DBusername, $DBpassword, $DBname);
    $query = '';
    $sqlScript = file($datos); //archivo a importar
    foreach ($sqlScript as $line) {
        $startWith = substr(trim($line), 0, 2);
        $endWith = substr(trim($line), -1, 1);
        if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
            continue;
        }
        $query = $query . $line;
        if ($endWith == ';') {
            mysqli_query($conn, $query) or die('Problema instalando el sistema, no se pudo importar la Base de Datos: <b>' . $query. '</');
            $query= '';
        }
    }
    // Creamos el archivo config.php
    $fp = fopen("../funcs/config.php", "w");
    if (!$fp) {
        die(" ERROR: No se tiene acceso a fichero de configuracion: config.php. Instalación a medias");
    }
    fputs($fp, "<?php\r\n");
    fputs($fp, "\$db_host=\"$DBhostname\"; //Host del Servidor MySQL\r\n");
    fputs($fp, "\$db_name=\"$DBname\"; //Nombre de la Base de datos\r\n");
    fputs($fp, "\$db_user=\"$DBusername\"; //Usuario de MySQL\r\n");
    fputs($fp, "\$db_pass=\"$DBpassword\"; //Password de Usuario MySQL\r\n");
    fputs($fp, "?>\r\n");
    fclose($fp);
    chmod("../funcs/config.php", 0744);
    $text = utf8_decode('Exito al Instalar - Usuario:usuario y Clave:usuario');
    header("Location: ../login.php?eventos=si&mensaje=$text");
} else {
    echo "ERROR: no se pudo conectar al servidor de base de Datos. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
