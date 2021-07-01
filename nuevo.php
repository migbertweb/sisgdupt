<?php
include 'sessionno.php';
$errors = array();
$events = array();
$errores = (!empty ($_GET['errores']) ) ? $_GET['errores'] : NULL; 
$eventos = (!empty ($_GET['eventos']) ) ? $_GET['eventos'] : NULL;
$mensaje = (!empty ($_GET['mensaje']) ) ? $_GET['mensaje'] : NULL;
if ($eventos=='si') {
$events[] = $mensaje;
}
if ($errores=='si') {
$errors[] = $mensaje;
}
include 'head.php';
?>
<body class="hm-gradient">
    <?php include 'navbar.php'; ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrar</li>
  </ol>
</nav>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card login-box">
                <div class="card-header"><h3 style="text-align:center">Nuevo Registro</h3>
                    <div><?php echo resultadoBlock($events); ?></div>
                    <div><?php echo resultBlock($errors); ?></div>
                </div>
                <div class="card-body">
                    <form id="formnuevo" class="form-card" method="POST" action="guardar.php" autocomplete="off">
                        <div class="form-group row">
                            <div class="col-md-6">
                                Cedula <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Cedula" required>
                            </div>
                            <div class="col-md-6">
                                Nombres <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                Apellidos <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required>
                            </div>
                            <div class="col-md-6">
                                Fecha Nacimiento <input type="date" class="form-control" id="fechanac" name="fechanac" placeholder="Fecha Nacimiento" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                Direccion <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                Email<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-6">
                                Telefono<input type="number" class="form-control" id="telefono" name="telefono"  placeholder="Telefono">
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <div class="col-md-6"> Pertenece a una Etnia Indigena?
                                <select name="indigena" id="one">
                                    <option value="no">No</option>
                                    <option value="si">Si</option>
                                </select>
                                <select name="etnia" id="two" disabled>
                                    <option value="Pemon">Pemon</option>
                                    <option value="Yekuana">Yekuana</option>
                                    <option value="Sanema">Sanema</option>
                                    <option value="Panare">Panare</option>
                                    <option value="Hotis">Hotis</option>
                                    <option value="Piaroa">Piaroa</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                Posee alguna Discapacidad?
                                <select name="discapacitado" id="oned">
                                    <option value="no">No</option>
                                    <option value="si">Si</option>
                                </select>
                                <select name="discapacidad" id="twod" disabled>
                                    <option value="Fisico-Motora">Fisico-Motora</option>
                                    <option value="Baja Talla">Baja Talla</option>
                                    <option value="Auditiva">Auditiva</option>
                                    <option value="Visual">Visual</option>
                                    <option value="Mental-intelectual">Mental-intelectual</option>
                                    <option value="Insuficiencia Renal">Insuficiencia Renal</option>
                                    <option value="Ausencia de Extremidad">Ausencia de Extremidad</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-6">PNF
                                <select name="pnf" class="form-control">
                                    <option value="PNF Electricidad Diseño Curricular 2008">PNF Electricidad Diseño Curricular 2008</option>
                                    <option value="PNF Electricidad Diseño Curricular 2013">PNF Electricidad Diseño Curricular 2013</option>
                                    <option value="PNF Geociencias Diseño Curricular 2011">PNF Geociencias Diseño Curricular 2011</option>
                                    <option value="PNF Geociencias Diseño Curricular 2013">PNF Geociencias Diseño Curricular 2013</option>
                                    <option value="PNF Informatica Diseño Curricular 2008">PNF Informatica Diseño Curricular 2008</option>
                                    <option value="PNF Mantenimiento Diseño Curricular 2008">PNF Mantenimiento Diseño Curricular 2008</option>
                                    <option value="PNF Mecanica Diseño Curricular 2008">PNF Mecanica Diseño Curricular 2008</option>
                                    <option value="PNF Sistemas de Calidad y Ambiente Diseño Curricular 2011">PNF Sistemas de Calidad y Ambiente Diseño Curricular 2011</option>
                                    <option value="PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013">PNF Sistemas de Calidad y Ambiente Diseño Curricular 2013</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                Año<input type="number" class="form-control" id="año" name="anno" placeholder="Año" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="index.php" class="btn btn-default">Regresar</a>
                            </div>
                        </div>
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
<script type="text/javascript">
$( document ).ready( function () {
$( "#formnuevo" ).validate( {
errorElement: "em",
errorPlacement: function ( error, element ) {
// Add the `invalid-feedback` class to the error element
error.addClass( "invalid-feedback" );
if ( element.prop( "type" ) === "checkbox" ) {
error.insertAfter( element.next( "label" ) );
} else {
error.insertAfter( element );
}
},
highlight: function ( element, errorClass, validClass ) {
$( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
},
unhighlight: function (element, errorClass, validClass) {
$( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
}
} );
} );
</script>
</body>
</html>