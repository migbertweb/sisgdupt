<?php
if (file_exists("../funcs/config.php") && filesize("../funcs/config.php") > 0.5) {
    $text = utf8_decode('El Sistema ya esta Instalado');
    header("Location:../login.php?eventos=si&mensaje=$text");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <body  background="../img/images/bg.jpg"><br>
    <!-- Añadir contenido de pagina aqui -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="card au-card">
            <h3 class="text-center">Bienvenidos</h3> <br>
            <div class="card-header text-justify">
                          El Sistema de Gestion de Documentos de la UPT Bolivar es una aplicacion para la gestion eficiente de los documentos requeridos por la poblacion estudiantil y docente de la institucion <br>
              Para el Correcto funcionamiento de SGD-UPT Bolivar se debe contar con:<br></div>
              <div class="card-body">
                <li>Servidor WEB con PHP Version 7 o Superior.</li>
                <li>Servidor de Base de Datos MySql 10.3 o Superior.</li>
                <li>Navegador Web (Mozilla Firefox Recomendado).</li>
                <li>Visor de Archivos PDF.</li>
              </div>
              <div class="card-footer text-center">
                <a href="paso0.php" title="ir al siguiente paso" class="btn btn-info"  data-toggle="tooltip" data-placement="top">Siguiente</a>
              </div>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
      <!-- Footer -->
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
        <div class="footer-copyright text-center py-3" font-small>2019 Copyleft<br>
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