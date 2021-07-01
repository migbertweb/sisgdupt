<?php
include 'sessionsi.php';
// añadir codigo php aqui
$errors = array();
$events = array();
if (!empty($_POST)) {
    $nombre = $mysqli->real_escape_string($_POST['nombre']);
    $usuario = $mysqli->real_escape_string($_POST['usuario']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $con_password = $mysqli->real_escape_string($_POST['con_password']);
    $tipo_usuario = 2;
    if (usuarioExiste($usuario)) {
        $errors[] = "El nombre de usuario $usuario ya existe";
    }
    if (count($errors) == 0) {
        $pass_hash = hashPassword($password);
        $registro = registraUsuario($usuario, $pass_hash, $nombre, $tipo_usuario);
        if ($registro > 0) {
            header("Location: login.php?eventos=si&mensaje=Registro Realizado, Inicie sesion");
        } else {
            $errors[] = "Error al Registrar";
        }
    }
}
include 'head.php';
?>
<body  background="img/images/bg.jpg">
    <div class="container login-container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4 login-form-1">
                <div class="text-center"><br>
                    <img src="img/logo.png" alt="Logo" width="100" height="100">
                </div>
                <form id="signupForm" class="email-signup" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div><?php echo resultBlock($errors); ?></div>
                    <div><?php echo resultadoBlock($events); ?></div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre Completo" value="" name="nombre" pattern=".{7,}" title="Siete o mas caracteres" minlength="7" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Usuario" value="" name="usuario" pattern=".{7,}" title="Siete o mas caracteres" minlength="7" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" class="form-control" placeholder="Password" value="" name="password" pattern=".{7,}" title="Siete o mas caracteres" minlength="7" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="con_password" class="form-control" placeholder="Confirme Password" value="" name="con_password" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Registrar" />
                    </div>
                    <div class="form-group">
                        <a href="login.php" class="ForgetPwd">Inicia Sesion</a><br>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                
            </div>
            <?php include 'jscript.php'; ?>
            <script type="text/javascript">
                $(function(){
            $('#signupForm').ebcaptcha();
        });
            $( document ).ready( function () {
            $( "#signupForm" ).validate( {
            rules: {
            con_password: {
            required: true,
            minlength: 7,
            equalTo: "#password"
            },
            },
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