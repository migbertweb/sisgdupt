<?php
include 'sessionsi.php';
if (empty($_GET['user_id'])) {
    header('Location: index.php');
}
if (empty($_GET['token'])) {
    header('Location: index.php');
}
$user_id = $mysqli->real_escape_string($_GET['user_id']);
$token = $mysqli->real_escape_string($_GET['token']);
if (!verificaTokenPass($user_id, $token)) {
    echo 'No se pudo verificar los Datos';
    exit;
}
include 'head.php';
?>
<body>
    <div class="container-fluid"><br>
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <div class="card login-box">
                    <div class="text-center"><br>
                        <img src="img/logo.png" alt="Logo" width="120" height="120">
                    </div>
                    <div class="card-body">
                        <div class="card-title lb-header">Cambiar Password</div>
                        <form class="email-login" id="loginform" role="form" action="guarda_pass.php" method="POST" autocomplete="off">
                            <div><?php echo resultBlock($errors); ?></div>
                            <input type="hidden" id="user_id" name="user_id" value ="<?php echo $user_id; ?>" />
                            <input type="hidden" id="token" name="token" value ="<?php echo $token; ?>" />
                            <div class="u-form-group">
                                <input type="password" placeholder="Nuevo Password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres"/>
                            </div>
                            <div class="u-form-group">
                                <input type="password" placeholder="Confirme Password" name="con_password" required />
                            </div>
                            <div class="u-form-group">
                                <button>Cambiar</button>
                            </div>
                            <div class="u-form-group">
                                <a href="login.php" class="forgot-password">Inicie Sesion</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                
            </div>
            <script src="js/jquery-3.3.1.min.js" ></script>
            <script  src="js/main.js"></script>
            <script src="js/bootstrap.min.js" ></script>
        </div></div>
        
    </body>
</html>