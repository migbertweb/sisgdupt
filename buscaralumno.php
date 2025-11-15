<?php
/**
 * Archivo: buscaralumno.php
 * 
 * Descripción: Interfaz de búsqueda de estudiantes. Permite buscar estudiantes
 * por cédula, nombre o apellido mediante búsqueda en tiempo real usando AJAX.
 * Muestra los resultados de forma dinámica sin recargar la página.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Página para buscar y localizar estudiantes registrados en el sistema
 * mediante diferentes criterios de búsqueda.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

session_start();
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
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Buscar</li>
            </ol>
        </nav><br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <form action="modalidades_submit" method="get" accept-charset="utf-8" onkeypress="return anular(event)">
                    <div class="form-group">
                        <h3>Ingrese Cedula, Nombre o Apellido</h3>
                        <input class="form-control" type="search" id="busqueda" name="busqueda" value="" placeholder="Cedula, Nombre o Apellido" autocomplete="off" onKeyUp="buscar();" >
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div id="resultadoBusqueda" class="form-group text-center"></div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <br>
        <br>
    </div>
    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <?php include 'jscript.php'; ?>
    <script>
    $(document).ready(function() {
    $("#resultadoBusqueda").html('<p>BUSQUEDA VACIA</p>');
    });function buscar() {
    var textoBusqueda =
    $("input#busqueda").val();
    if (textoBusqueda != "") {
    $.post("buscar.php",{valorBusqueda: textoBusqueda},
    function(mensaje) {
    $("#resultadoBusqueda").html(mensaje);});
    } else {
    $("#resultadoBusqueda").html('<p>BUSQUEDA VACIA</p>');
    };
    };
    function anular(e) {
          tecla = (document.all) ? e.keyCode : e.which;
          return (tecla != 13);
     }
    </script>
</body>
</html>