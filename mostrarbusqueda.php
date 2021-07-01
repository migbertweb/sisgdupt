<?php
include 'sessionno.php';
$errors = array();
$events = array();
$errores = (!empty($_GET['errores']) ) ? $_GET['errores'] : null;
$eventos = (!empty($_GET['eventos']) ) ? $_GET['eventos'] : null;
$mensaje = (!empty($_GET['mensaje']) ) ? $_GET['mensaje'] : null;
if ($eventos=='si') {
    $events[] = $mensaje;
}
if ($errores=='si') {
    $errors[] = $mensaje;
}
$id = $_GET['id'];
$sql = "SELECT * FROM estudiantes WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
include 'head.php';
?>
<body class="hm-gradient">
    <?php include 'navbar.php'; ?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="buscaralumno.php">Busqueda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mostrar Busqueda</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6"><div class="card login-box">
                <div class="card-header"><h4 style="text-align:center">Datos Alumno</h4>
                    <div><?php echo resultBlock($errors); ?></div>
                    <div><?php echo resultadoBlock($events); ?></div>
                </div>
                <div class="card-body">
                    <label for="">Cedula: </label><strong> <?php echo $row['cedula']; ?></strong><br>
                    <label for="">Nombres: </label><strong> <?php echo $row['nombres']; ?></strong><br>
                    <label for="">Apellidos: </label><strong> <?php echo $row['apellidos']; ?></strong><br>
                    <label for="">PNF: </label><strong> <?php echo $row['pnf']; ?></strong><br>
                    <label for="">Año: </label><strong> <?php echo $row['anno']; ?></strong><br>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary" data-href="constanciamodalidadpdf.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#pdf">Constancia de Modalidad</a>
                    <a href="#" class="btn btn-success" data-href="cartaconductapdf.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#pdf">Constancia de Buena Conducta</a>
                    <a href="#" class="btn btn-secondary" data-href="autenticacionnotaspdf.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#pdf">Autenticacion de Titulo</a>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <br>
</div>
<!-- inicio del Modal -->
<div class="modal fade" id="pdf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
<!-- Footer -->
<?php include 'footer.php'; ?>
<?php include 'jscript.php'; ?>
<script>
$('#pdf').on('show.bs.modal', function(e) {
$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
$('.debug-url').html('URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});
</script>
</body>
</html>