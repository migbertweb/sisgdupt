<?php
/**
 * Archivo: modificar-perfil.php
 * 
 * Descripción: Formulario para modificar el perfil de un usuario del sistema.
 * Permite cambiar nombre, usuario y tipo de usuario. Solo accesible para
 * administradores. Muestra la última conexión del usuario.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Interfaz de administración para editar información de usuarios del sistema.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

include 'sessionno.php';
$errors = array();
$events = array();
$errores = (!empty($_GET['errores']) ) ? $_GET['errores'] : null;
$eventos = (!empty($_GET['eventos']) ) ? $_GET['eventos'] : null;
$mensaje = (!empty($_GET['mensaje']) ) ? $_GET['mensaje'] : null;
$id = (!empty($_GET['id']) ) ? $_GET['id'] : null;
if ($eventos=='si') {
    $events[] = $mensaje;
}
if ($errores=='si') {
    $errors[] = $mensaje;
}
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
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
    <li class="breadcrumb-item"><a href="registrosper.php">Mostrar Registros</a></li>
    <li class="breadcrumb-item active" aria-current="page">Modificar</li>
  </ol>
</nav>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6"><div class="card login-box">
                <div class="card-header"><h3 style="text-align:center">MODIFICAR PERFIL</h3>
                    <div><?php echo resultBlock($errors); ?></div>
                    <div><?php echo resultadoBlock($events); ?></div>
                </div>
                <div class="card-body">
                    <form id="formnuevo" class="form-card" method="POST" action="update-perfil.php" autocomplete="off">
                        <div class="form-group row">
                            <div class="col-md-6">
                                Nombre <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>">
                            </div>
                            <div class="col-md-6">
                                Usuario <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario" value="<?php echo $row['usuario']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                Tipo Usuario <select name="id_tipo" class="form-control">
                                    <option value="1">Administrador</option>
                                    <option value="2">Usuario</option>
                                </select>
                            </div>
                           <div class="col-md-6">
                                Ultima Conexion <input type="text" class="form-control" id="ultimaconexion" name="ultimaconexion" placeholder="Ultima Conexion" value="<?php echo $row['last_session']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="listarusuarios.php" class="btn btn-default">Regresar</a>
                            </div>
                        </div>
                        <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <br>
</div>
<!-- Footer -->
<?php include 'footer.php'; ?>
<?php include 'jscript.php'; ?>
</body>
</html>