<?php
if (file_exists("../funcs/config.php") && filesize("../funcs/config.php") > 0.5) {
    $text = utf8_decode('El Sistema ya esta Instalado');
    header("Location: ../login.php?eventos=si&mensaje=$text");
    exit();
} ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shri">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>SisGDoc UPT Bolivar</title>
    <!-- iconos y favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/icons/favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="../img/icons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="apple-mobile-web-app-title" content="SGD UPT">
    <meta name="application-name" content="SGD UPT Bolivar">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="../img/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Archivos de estilos CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css" >
    <link rel="stylesheet" href="../css/style.css" >
    <link rel="stylesheet" href="../css/theme.css" >
    <link rel="stylesheet" type="text/css" href="../css/mdb.css">
    <link rel="stylesheet" type="text/css" href="../css/addons/datatables.min.css">
    <style type="text/css">
    </style>
  </head>
  <body  background="../img/images/bg.jpg">
    <!-- Añadir contenido de pagina aqui -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6"><br>
          <div class="card au-card card-outline-info">
            <div class="card-header text-justify">
              Para instalar el Sistema correctamente, debemos tener configurada la conexión con la base de datos en MySQL.
            </div>
            <div class="card-body">
              <form id="formnuevo" class="form-card" method="POST" action="paso2.php" autocomplete="off">
                  <div class="form-group row">
                    <div class="col-md-6">
                    Host del Servidor MySql <input type="text" class="form-control" id="DBhostname" name="DBhostname" required title="direccion del servidor de MySql, generalmente Localhost" data-toggle="tooltip" data-placement="top">
                  </div>
                    <div class="col-md-6">
                    Usuario MySql <input type="text" class="form-control" id="DBusername" name="DBusername" title="Usuario del Servidor MySql" data-toggle="tooltip" data-placement="top" required>
                  </div>
                </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                    Contrase&ntilde;a MySQL <input type="text" class="form-control" id="DBpassword" name="DBpassword" title="Clave del Servidor MySql" data-toggle="tooltip" data-placement="top" required>
                  </div>
                  <div class="col-md-6">
                    Base de Datos MySql <input type="text" class="form-control" id="DBname" title="Nombre que tendra la Base de Datos" name="DBname" required>
                  </div>
                </div>
                  <div class="form-check-inline">
                    Instalar Datos de Prueba?  <input type="checkbox" class="form-check-inline" id="prueba" name="prueba" value="true" data-toggle="tooltip" data-placement="top" title="Instalar los datos aleatorios de Prueba?">
                  </div>
                </div>
              <div class="card-footer text-center">
                <div class="form-group">
                  <div>
                    <button type="submit" class="btn btn-primary" title="Continuar con la Instalacion" data-toggle="tooltip" data-placement="top">Instalar</button>
                  </div>
                </div>
            </div></form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>
<!-- Footer -->
<footer class="page-footer font-small cyan darken-3">
<!-- Footer Elements -->
<div class="container">
<!-- Grid row-->
<div class="row">
  <!-- Grid column -->
  <div class="col-md-12 py-5">
    <div class="mb-5 flex-center">
      
    </div>
  </div>
  <!-- Grid column -->
</div>
<!-- Grid row-->
</div>
<!-- Footer Elements -->
<!-- Copyright -->
<div class="footer-copyright text-center py-3" font-small> 2019 Copyleft<br>
<a href="../index.php"> TIN PNF Informatica, Trayecto 8 - SisGD UPT Bolivar</a>
</div>
<!-- Copyright -->
</footer>
</body>
    <!-- jQuery  -->
<script src="../js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="../js/bootstrap.bundle.min.js"></script>
<!-- Validador de form -->
<script type="text/javascript" src="../js/addons/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/addons/localization/messages_es.min.js"></script>
<script type="text/javascript">
  // para pruebas
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
  </script>
<!-- main JS -->
<script  src="../js/main.js"></script>
<!-- Font Awesome JS -->
<script defer src="../js/fontawesome/all.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
</html>