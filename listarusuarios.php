<?php
require 'sessionno.php';
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
$where = "";
if (!empty($_POST)) {
    $valor = $_POST['campo'];
    if (!empty($valor)) {
        $where = "WHERE nombre LIKE '%$valor'";
    }
}
$sql = "SELECT * FROM usuarios $where";
$resultado = $mysqli->query($sql);
include 'head.php';
?>
<body class="hm-gradient">
    <?php include 'navbar.php'; ?>
    <div class="container">
        <h4 style="text-align:center">Usuarios Registrados</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mostrar Usuarios</li>
            </ol>
        </nav>
        <div><?php echo resultBlock($errors); ?></div>
        <div><?php echo resultadoBlock($events); ?></div>
        <br>
        <table class="table table-striped table-bordered table-hover example" id="mitabla" width="100%">
            <thead>
                <tr>
                    <th class="fix-col">ID</th>
                    <th class="fix-col">Nombre</th>
                    <th class="fix-col">Usuario</th>
                    <th class="fix-col">Tipo de Usuario</th>
                    <?php if ($_SESSION['tipo_usuario']==1) { ?>
                    <th class="fix-col"></th>
                    <th class="fix-col"></th>
                    <?php } ?>
                </tr>
            </thead>
            
            <tbody>
                <?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['usuario']; ?></td>
                    <td><?php
                    if ($row['id_tipo']==1) {
                        echo "Administrador";
                    } else {
                        echo "Usuario";
                    }
                    ?></td>
                    <?php if ($_SESSION['tipo_usuario']==1) { ?>
                    <td><a href="modificar-perfil.php?id=<?php echo $row['id']; ?>" data-toggle="tooltip" data-placement="top" title="Modificar"><span class="fa fa-pen"></span></a></td>
                    <td><a href="#" data-href="eliminar-usuario.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete" title="Eliminar Usuario"><span class="fa fa-trash"></span></a></td>
                    <?php } ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-danger" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fas fa-trash fa-4x mb-3 animated rotateIn"></i>
                        <p>¿Desea eliminar este registro?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <a type="button" class="btn btn-danger btn-ok">Borrar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <?php include 'jscript.php'; ?>
    <script>
    $(document).ready(function(){
    $('#mitabla').DataTable({
    "order": [[0, "asc"]],
    "language":{
    "lengthMenu": "Mostrar _MENU_ registros por pagina",
    "info": "Mostrando pagina _PAGE_ de _PAGES_",
    "infoEmpty": "No hay registros disponibles",
    "infoFiltered": "(filtrada de _MAX_ registros)",
    "loadingRecords": "Cargando...",
    "processing":     "Procesando...",
    "search": "Buscar:",
    "zeroRecords":    "No se encontraron registros coincidentes",
    "paginate": {
    "next":       "Siguiente",
    "previous":   "Anterior"
    },
    }
    });
    });
    </script>
    <script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
    });
    </script>
</body>
</html>