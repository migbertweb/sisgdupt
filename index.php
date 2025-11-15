<?php
/**
 * Archivo: index.php
 * 
 * Descripción: Página principal del sistema. Muestra el dashboard después del login,
 * con acceso a las funcionalidades principales como búsqueda de alumnos y visualización
 * de pensum de estudio. Requiere autenticación de usuario.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Página de inicio del sistema después del login. Proporciona navegación
 * a las diferentes funcionalidades del sistema de gestión de documentos.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

session_start();
if (!file_exists("funcs/config.php")) {
    header("Location:instalar/");
    exit();
}
require 'funcs/conexion.php';
require 'funcs/funcs.php';
if (!isset($_SESSION["id_usuario"])) { //Si no ha iniciado sesión redirecciona a index.php
    header("Location: login.php");
}
$idUsuario = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$idUsuario'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
include 'head.php'; ?>
 <body class="hm-gradient">
    <?php include 'navbar.php'; ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>
<?php include 'carrusel.php'; ?><br>
<div class="container text-center">
    <h2><b>Sistema de Gestion de Documentos UPT Bolivar</b></h2>
</div>
    <br>
        <div class="row">
        <div class="col-md-3">
        
        </div>
        <div class="col-md-3">
            <a type="button" class="btn btn-primary btn-lg btn-block"  data-toggle="tooltip" data-placement="top" title="Busqueda de Alumno" href="buscaralumno.php">Buscar Alumno</a>
        </div>
        <div class="col-md-3">
            <a type="button" class="btn btn-secondary btn-lg btn-block"  data-toggle="tooltip" data-placement="top" title="Imprimir Pensum de Estudio" href="pensum.php">Pensum de Estudio</a>
        </div>
        <div class="col-md-3">
            
        </div>
    </div><br>
    <div class="row text-center">
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
    </div>
</div><br>
<!-- Footer -->
<?php include 'footer.php'; ?>
<?php include 'jscript.php'; ?>
</body>
</html>