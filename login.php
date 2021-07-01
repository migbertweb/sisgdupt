<?php
include 'sessionsi.php';
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
if (!empty($_POST)) {
    $usuario = $mysqli->real_escape_string($_POST['usuario']);
    $password = $mysqli->real_escape_string($_POST['password']);
    if (isNullLogin($usuario, $password)) {
        $errors[] = "Debe llenar todos los campos";
    }
    $errors[] = login($usuario, $password);
}
include 'head.php';
?>
    <body background="img/images/bg.jpg">
        <div class="container login-container">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4 login-form-1">
                    <div class="text-center"><br>
                            <img src="img/logo.png" alt="Logo UPT" width="100" height="100">
                            <br>
                            <br>
                        </div>
                    <form class="email-login" id="loginform" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div><?php echo resultBlock($errors); ?></div>
                        <div><?php echo resultadoBlock($events); ?></div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Usuario" value="" name="usuario" pattern=".{7,}" title="Siete o mas caracteres" minlength="7" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" value="" name="password" pattern=".{7,}" title="Siete o mas caracteres" minlength="7" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Inicio" />
                        </div>
                        <div class="form-group">
                            <a href="registro.php" class="ForgetPwd">Registrate</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
                    <?php include 'jscript.php'; ?>
                    <script type="text/javascript">
        $( document ).ready( function () {
            $( "#loginform" ).validate( {
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
                </div></div>
            </body>
        </html>
