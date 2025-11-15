<?php
/**
 * Archivo: funcs/funcs.php
 * 
 * Descripción: Contiene todas las funciones auxiliares del sistema incluyendo:
 * validación de datos, autenticación de usuarios, gestión de sesiones, envío
 * de emails, generación de tokens, hash de contraseñas, y funciones de utilidad
 * para mostrar mensajes de error y éxito.
 * 
 * Autor: migbertweb
 * 
 * Fecha: 2019
 * 
 * Repositorio: https://github.com/migbertweb/sisgdupt
 * 
 * Licencia: MIT License
 * 
 * Uso: Librería de funciones reutilizables utilizadas en todo el sistema
 * para operaciones comunes como validación, autenticación y utilidades.
 * 
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 * derivados como código libre, especialmente para fines educativos.
 */

setlocale(LC_ALL, 'es_ES.UTF-8');
date_default_timezone_set('America/Caracas');
function minMax($min, $max, $valor)
{
    if (strlen(trim($valor)) < $min) {
        return true;
    } elseif (strlen(trim($valor)) > $max) {
        return true;
    } else {
        return false;
    }
}
    
function usuarioExiste($usuario)
{
    global $mysqli;
        
    $stmt = $mysqli->prepare("SELECT id FROM usuarios WHERE usuario = ? LIMIT 1");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();
    $num = $stmt->num_rows;
    $stmt->close();
        
    if ($num > 0) {
        return true;
    } else {
        return false;
    }
}
    
function emailExiste($email)
{
    global $mysqli;
        
    $stmt = $mysqli->prepare("SELECT id FROM usuarios WHERE correo = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $num = $stmt->num_rows;
    $stmt->close();
        
    if ($num > 0) {
        return true;
    } else {
        return false;
    }
}
    
function generateToken()
{
    $gen = md5(uniqid(mt_rand(), false));
    return $gen;
}
    
function hashPassword($password)
{
    $hash = password_hash($password, PASSWORD_DEFAULT);
    return $hash;
}
    
function resultBlock($errors)
{
    if (count($errors) > 0) {
        echo "<div id='error' class='alert alert-danger alert-dismissible fade show' role='alert'>
			<ul>";
        foreach ($errors as $error) {
            echo "<li>".$error."</li>";
        }
        echo "</ul>";
        echo " <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button></div>";
    }
}
    
function resultadoBlock($events)
{
    if (count($events) > 0) {
        echo "<div id='error' class='alert alert-success alert-dismissible fade show' role='alert'>
            <ul>";
        foreach ($events as $event) {
            echo "<li>".$event."</li>";
        }
        echo "</ul>";
        echo " <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button></div>";
    }
}

function registraUsuario($usuario, $pass_hash, $nombre, $tipo_usuario)
{
    global $mysqli;
        
    $stmt = $mysqli->prepare("INSERT INTO usuarios (usuario, password, nombre, id_tipo) VALUES(?,?,?,?)");
    $stmt->bind_param('sssi', $usuario, $pass_hash, $nombre, $tipo_usuario);
        
    if ($stmt->execute()) {
        return $mysqli->insert_id;
    } else {
        return 0;
    }
}
    
function enviarEmail($email, $nombre, $asunto, $cuerpo)
{
    require_once 'PHPMailer/PHPMailerAutoload.php';
        
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls'; //Modificar
    $mail->Host = 'disroot.org'; //Modificar
    $mail->Port = '25'; //Modificar
        
    $mail->Username = 'migbertyanez'; //Modificar
    $mail->Password = 'KP(blvr)0378'; //Modificar
        
    $mail->setFrom('migbertyanez@disroot.org', 'Sistema'); //Modificar
    $mail->addAddress($email, $nombre);
        
    $mail->Subject = $asunto;
    $mail->Body    = $cuerpo;
    $mail->IsHTML(true);
        
    if ($mail->send()) {
        return true;
    } else {
        return false;
    }
}
    
function validaIdToken($id, $token)
{
    global $mysqli;
        
    $stmt = $mysqli->prepare("SELECT activacion FROM usuarios WHERE id = ? AND token = ? LIMIT 1");
    $stmt->bind_param("is", $id, $token);
    $stmt->execute();
    $stmt->store_result();
    $rows = $stmt->num_rows;
        
    if ($rows > 0) {
        $stmt->bind_result($activacion);
        $stmt->fetch();
            
        if ($activacion == 1) {
            $msg = "La cuenta ya se activo anteriormente.";
        } else {
            if (activarUsuario($id)) {
                $msg = 'Cuenta activada.';
            } else {
                $msg = 'Error al Activar Cuenta';
            }
        }
    } else {
        $msg = 'No existe el registro para activar.';
    }
    return $msg;
}
    
function activarUsuario($id)
{
    global $mysqli;
        
    $stmt = $mysqli->prepare("UPDATE usuarios SET activacion=1 WHERE id = ?");
    $stmt->bind_param('s', $id);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}
    
function isNullLogin($usuario, $password)
{
    if (strlen(trim($usuario)) < 1 || strlen(trim($password)) < 1) {
        return true;
    } else {
        return false;
    }
}
    
function login($usuario, $password)
{
    global $mysqli;
        
    $stmt = $mysqli->prepare("SELECT id, id_tipo, password, nombre FROM usuarios WHERE usuario = ? LIMIT 1");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();
    $rows = $stmt->num_rows;
        
    if ($rows > 0) {
            $stmt->bind_result($id, $id_tipo, $passwd, $nombre);
            $stmt->fetch();
                
            $validaPassw = password_verify($password, $passwd);
                
            if ($validaPassw) {
                lastSession($id);
                $_SESSION['id_usuario'] = $id;
                $_SESSION['tipo_usuario'] = $id_tipo;
                $_SESSION['nombre'] = $nombre;
                    
                header("location: index.php");
            } else {
                $errors = "La contrase&ntilde;a es incorrecta";
            }
    } else {
        $errors = "El nombre de usuario o correo electr&oacute;nico no existe";
    }
    return $errors;
}
    
function lastSession($id)
{
    global $mysqli;
        
    $stmt = $mysqli->prepare("UPDATE usuarios SET last_session=NOW() WHERE id = ?");
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $stmt->close();
}
    
function isActivo($usuario)
{
    global $mysqli;
        
    $stmt = $mysqli->prepare("SELECT activacion FROM usuarios WHERE usuario = ? || correo = ? LIMIT 1");
    $stmt->bind_param('ss', $usuario, $usuario);
    $stmt->execute();
    $stmt->bind_result($activacion);
    $stmt->fetch();
        
    if ($activacion == 1) {
        return true;
    } else {
        return false;
    }
}
    
function generaTokenPass($user_id)
{
    global $mysqli;
        
    $token = generateToken();
        
    $stmt = $mysqli->prepare("UPDATE usuarios SET token_password=?, password_request=1 WHERE id = ?");
    $stmt->bind_param('ss', $token, $user_id);
    $stmt->execute();
    $stmt->close();
        
    return $token;
}
    
function getValor($campo, $campoWhere, $valor)
{
    global $mysqli;
        
    $stmt = $mysqli->prepare("SELECT $campo FROM usuarios WHERE $campoWhere = ? LIMIT 1");
    $stmt->bind_param('s', $valor);
    $stmt->execute();
    $stmt->store_result();
    $num = $stmt->num_rows;
        
    if ($num > 0) {
        $stmt->bind_result($_campo);
        $stmt->fetch();
        return $_campo;
    } else {
        return null;
    }
}
    
function getPasswordRequest($id)
{
    global $mysqli;
        
    $stmt = $mysqli->prepare("SELECT password_request FROM usuarios WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->bind_result($_id);
    $stmt->fetch();
        
    if ($_id == 1) {
        return true;
    } else {
        return null;
    }
}
    
function verificaTokenPass($user_id, $token)
{
    global $mysqli;
        
    $stmt = $mysqli->prepare("SELECT activacion FROM usuarios WHERE id = ? AND token_password = ? AND password_request = 1 LIMIT 1");
    $stmt->bind_param('is', $user_id, $token);
    $stmt->execute();
    $stmt->store_result();
    $num = $stmt->num_rows;
        
    if ($num > 0) {
        $stmt->bind_result($activacion);
        $stmt->fetch();
        if ($activacion == 1) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
    
function cambiaPassword($password, $user_id, $token)
{
    global $mysqli;
        
    $stmt = $mysqli->prepare("UPDATE usuarios SET password = ?, token_password='', password_request=0 WHERE id = ? AND token_password = ?");
    $stmt->bind_param('sis', $password, $user_id, $token);
        
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}
