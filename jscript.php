<?php
/**
 * Archivo: jscript.php
 * 
 * Descripción: Incluye todos los archivos JavaScript necesarios para el
 * funcionamiento del sistema. Incluye jQuery, Bootstrap, validadores de
 * formularios, DataTables, Font Awesome y otros complementos.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Archivo incluido al final de todas las páginas PHP para cargar
 * las librerías JavaScript necesarias y mantener consistencia.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */
?>
<!-- jQuery  -->
<script src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	// para pruebas
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
	</script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Validador de form -->
<script type="text/javascript" src="js/addons/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/addons/localization/messages_es.min.js"></script>
<script src="js/addons/jquery.ebcaptcha.js" type="text/javascript" charset="utf-8" async defer></script>
<!-- main JS -->
<script  src="js/main.js"></script>
<!-- Font Awesome JS -->
<script defer src="js/fontawesome/all.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- datatable -->
<script type="text/javascript" src="js/addons/datatables.min.js"></script>