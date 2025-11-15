<?php
/**
 * Archivo: pensum.php
 * 
 * Descripción: Página para visualizar y acceder a los documentos PDF de pensum
 * de estudio y carga horaria de los diferentes Programas Nacionales de Formación (PNF).
 * Incluye un modal de confirmación antes de mostrar los documentos.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Permite a los usuarios acceder a los documentos académicos oficiales
 * de los diferentes programas de estudio de la universidad.
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
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pensum</li>
            </ol>
        </nav>
        <div class="text-center"><h3><b>Pensum de Estudio</b></h3></div><br>
        <div class="row">
        <div class="col-md-3">
            <a type="a" class="btn btn-primary" data-href="docs/PENSUM - PNF ELECTRICIDAD, DISENO CURRICULAR 2008(MODIFICACION).pdf" target="_blank" data-toggle="modal" data-target="#pnf-pdf">PNF Electricidad Diseño Curricular 2008</a>
        </div>
        <div class="col-md-3">
            <a type="a" class="btn btn-primary" data-href="docs/PENSUM - PNF ELECTRICIDAD, REDISENO CURRICULAR 2013(MODIFICACION).pdf" target="_blank" data-toggle="modal" data-target="#pnf-pdf">PNF Electricidad Diseño Curricular 2013</a>
        </div>
        <div class="col-md-3">
            <a type="a" class="btn btn-primary" data-href="docs/PENSUM - PNF GEOCIENCIAS, DISENO CURRICULAR 2011(MODIFICACION).pdf" target="_blank" data-toggle="modal" data-target="#pnf-pdf">PNF Geociencias Diseño Curricular 2011</a>
        </div>
        <div class="col-md-3">
            <a type="a" data-href="docs/PENSUM - PNF GEOCIENCIAS, DISENO CURRICULAR 2013(MODIFICACION).pdf" class="btn btn-primary" target="_blank" data-toggle="modal" data-target="#pnf-pdf">PNF Geociencias Diseño Curricular 2013</a>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-3">
            <a type="a" data-href="docs/PENSUM - PNF INFORMATICA, DISENO CURRICULAR 2008(MODIFICACION).pdf" class="btn btn-primary" target="_blank" data-toggle="modal" data-target="#pnf-pdf">PNF Informatica Diseño Curricular 2008</a>
        </div>
        <div class="col-md-3">
            <a type="a" data-href="docs/PENSUM - PNF MANTENIMIENTO, DISENO CURRICULAR 2008(MODIFICACION).pdf" class="btn btn-primary" target="_blank" data-toggle="modal" data-target="#pnf-pdf">PNF Mantenimiento Diseño Curricular 2008</a>
        </div>
        <div class="col-md-3">
            <a type="a" data-href="docs/PENSUM - PNF MECANICA, DISENO CURRICULAR 2008(MODIFICACION AJUSTE).pdf" class="btn btn-primary" target="_blank" data-toggle="modal" data-target="#pnf-pdf">PNF Mecanica Diseño Curricular 2008</a>
        </div>
        <div class="col-md-3">
            <a type="a" class="btn btn-primary" data-href="docs/PENSUM - PNF SISTEMAS DE CALIDAD Y AMBIENTE, DISENO CURRICULAR 2011(MODIFICACION).pdf" target="_blank" data-toggle="modal" data-target="#pnf-pdf">PNF Sistemas de Calidad y Ambiente Diseño Curricular 2008</a>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-3">
            <a class="btn btn-primary" href="#" data-href="docs/PENSUM - PNF SISTEMAS DE CALIDAD Y AMBIENTE, DISENO CURRICULAR 2013(MODIFICACION).pdf" data-toggle="modal" data-target="#pnf-pdf">PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013</a>
        </div>
        <div class="col-md-3">
            <a class="btn btn-default" href="#" data-href="docs/Carga Horaria (carrera)ELECTRICIDAD.pdf" data-toggle="modal" data-target="#pnf-pdf">Carga Horaria ELECTRICIDAD</a>
        </div>
        <div class="col-md-3">
            <a class="btn btn-default" href="#" data-href="docs/Carga Horaria (carrera)GEOLOGIA y MINAS.pdf" data-toggle="modal" data-target="#pnf-pdf">Carga Horaria GEOLOGIA Y MINAS</a>
        </div>
        <div class="col-md-3">
            <a class="btn btn-default" href="#" data-href="docs/Carga Horaria (carrera)MEC.pdf" data-toggle="modal" data-target="#pnf-pdf">Carga Horaria MECANICA</a>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-3">
            <a class="btn btn-default" href="#" data-href="docs/Carga Horaria (carrera)SISTEMAS INDUSTRIALES.pdf" data-toggle="modal" data-target="#pnf-pdf">Carga Horaria SISTEMAS INDUSTRIALES</a>
        </div>
    </div>
</div><br><br>
<!-- inicio del Modal -->
<div class="modal fade" id="pnf-pdf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-notify modal-secondary" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmacion de Pago</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fas fa-money-bill-alt fa-4x mb-3 animated rotateIn"></i>
                        <p>¿Realizo el Pago Correspondiente?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
                    <a type="button" class="btn btn-success btn-ok">Si</a>
                    <a type="button" class="btn btn-secondary btn-ok">Exonerado</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin del Modal -->
<!-- Inicio Footer -->
<?php include 'footer.php'; ?>
<?php include 'jscript.php'; ?>
<script>
    $('#pnf-pdf').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    $('.debug-url').html('URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
    });
    </script>
</body>
</html>