<?php
/**
 * Archivo: plantilla.php
 * 
 * Descripción: Página plantilla o template para desarrollo futuro. Actualmente
 * muestra una página en construcción. Puede ser utilizada como base para crear
 * nuevas páginas del sistema.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Template o plantilla base para crear nuevas páginas del sistema
 * manteniendo la estructura y componentes comunes.
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
    <div class="text-center">
       <span class="fas fa-industry fa-lg"></span><h3>Pagina en Construccion</h3> 
    </div>
</div><br><br>
        <!-- Footer -->
        <?php include 'footer.php'; ?>
    <?php include 'jscript.php'; ?>
</body>
</html>