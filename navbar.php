<?php
/**
 * Archivo: navbar.php
 * 
 * Descripción: Barra de navegación principal del sistema. Incluye el menú
 * de navegación con acceso a las diferentes funcionalidades, menú desplegable
 * de ayuda, y perfil de usuario con opciones de gestión de cuenta y cierre
 * de sesión. Muestra opciones adicionales para administradores.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Componente de navegación incluido en todas las páginas autenticadas
 * del sistema para proporcionar acceso rápido a las funcionalidades.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */
?>
<nav class="mb-4 navbar navbar-expand-lg navbar-light"><div class="container">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand ml-auto nav-flex-icons" href="index.php"><img src="img/logo.png" width="50" height="55"> <strong class="navbar-brand ml-auto nav-flex-icons">Sisgd UPT</strong></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav" id="nav">
            <li class="nav-item">
                <a class="nav-link" href="nuevo.php"><span class="fas fa-save fa-lg"></span> Registrar</a>
                <li class="nav-item">
                    <a class="nav-link" href="mostrarregistros.php"><span class="fas fa-table"></span> Mostrar Registros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="buscaralumno.php"><span class="fas fa-user-graduate"></span> Buscar Alumno</a>
                </li>
                <li class="nav-item dropdown nav">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><span class="fas fa-question"></span>
                    Ayuda
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="ayuda.php"><span class="fas fa-book"></span> Guia de Usuario</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="info.php"><span class="fas fa-exclamation-circle"></span> Acerca de..</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- <ul class="navbar-nav ml-auto nav-flex-icons nav">
        <li class="nav-item">
            <a class="nav-link waves-effect waves-light"><span class="badge badge-pill badge-light">0</span> <i class="fa fa-envelope"> </i></a>
        </li>
    </ul> -->
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link dropdown-toggle dropdown-toggle-profile" id="navbarDropdownMenuLink" data-toggle="dropdown">
                <img class="inset" src="img/images/user-icon.jpg" alt="user">
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-unique navbar-login login-box" aria-labelledby="navbarDropdownMenuLink">
            <div class="row">
                <div class="col-md-4"><img src="img/images/user-icon.jpg" alt="user"></div>
                <div class="col-md-8">Usuario: <strong><?php echo $_SESSION['nombre'];  ?>
                        </strong></div>
            </div>
            <?php if ($_SESSION['tipo_usuario']==1) { ?>
                <div class="dropdown-divider"></div>
            <div class="list-group">
                    <a class="nav-link" href="respaldobd/respaldo_bd.php"><span class="fas fa-download"></span> Respaldar la BD</a>
            <?php } ?><div class="dropdown-divider"></div>
                    <div class="navbar-login navbar-login-session">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="listarusuarios.php"><button type="button"  class="btn btn-default btn-sm">Ver Usuarios</button></a>
                            </div>
                            <div class="col-md-6">
                                <a href="logout.php"><button type="button"  class="btn btn-warning btn-sm">Cerrar Sesion</button></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>