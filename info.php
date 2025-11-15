<?php
/**
 * Archivo: info.php
 * 
 * Descripción: Página de información sobre el proyecto. Muestra detalles del
 * proyecto académico incluyendo tutores, autores y descripción del sistema.
 * Proporciona información institucional y académica del proyecto.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Página informativa accesible desde el menú de ayuda que muestra
 * información sobre el proyecto y sus desarrolladores.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

include 'sessionno.php';
// añadir codigo php aqui
include 'head.php';
?>
<body class="hm-gradient">
    <?php include 'navbar.php'; ?>
  <!-- Añadir contenido de pagina aqui -->
  <div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Info</li>
      </ol>
    </nav>
    <div class="container text-center">
      <h3 style="text-align: center;"><strong>Aplicaci&oacute;n Web Para La Gesti&oacute;n De Documentos En El Departamento De Control De Estudios Para La Universidad Polit&eacute;cnica Territorial Estado Bolivar.</strong></h3>
      <h3 style="text-align: center;"><strong>Ciudad Bolivar, Estado Bolivar</strong></h3><br>
      <p style="text-align: center;"><strong>(Proyecto Socio-Tecnol&oacute;gico Para Optar Al T&iacute;tulo De Ingeniero Inform&aacute;tico)</strong></p>
    </div><br>
    <div class="row">
      <div class="col-md-6 text-center">
        Tutor Académico: Thaíz Lugo <br>
        Tutor Institucional: Aida Gonzalez Ortega <br>
      Tutor Técnico: Migbert Yanez Caña</div>
      <div class="col-md-6 text-center"> 
        Autores: <br>
        Flores Prado, Noelmari Josefina <br>
        Gonzalez Ortega, Aida de Jesus <br>
      Peña Oronoz, Gillen Dayanis</div>
    </div><br>
    <div class="container text-justify">
      <h4>Introduccion</h4><br>
La sociedad hoy en día, tiene la posibilidad de tener información al alcance de sus manos. En Venezuela, las instituciones tanto públicas como privadas consideran como necesidad utilizar estas nuevas herramientas para el mejoramiento y agilización de sus procesos, con el fin de garantizar un eficaz funcionamiento y así obtener una adaptación en el mundo actual. Es importante confrontar el desarrollo que se ha llevado a cabo en el campo de la informática. 
Realizar un sistema web refleja la sustitución de tareas tradicionalmente manuales por las mismas realizadas de manera automática por una computadora, o cualquier otro tipo de automatismo. Estos procesos permiten agilizar los procesos de manera más eficaz y rápida, además de minimizar el material que requiere. 
    </div><br><br>
  </div>
  <!-- Footer -->
    <?php include 'footer.php'; ?>
    <?php include 'jscript.php'; ?>
</body>
</html>