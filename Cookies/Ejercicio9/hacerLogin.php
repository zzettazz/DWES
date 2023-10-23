<?php
session_start();

if (isset($_POST["nombreUsuarioIntroducido"]) && isset($_POST["contraseniaIntroducida"]))
{
    $usuario = $_POST["nombreUsuarioIntroducido"];
    $contrasenia = $_POST["contraseniaIntroducida"];
    
    $loginExitoso = false;
    
    foreach ($_SESSION["bd"] as $user)
    {
        if ($user["usuario"] === $usuario && $user["contrasenia"] === $contrasenia)
        {
            if ($_POST["recordar"] == "on") $_SESSION["ultimoUsuario"] = $usuario;
            $_SESSION["usuarioActual"] = $usuario;
            $_SESSION["estadoLogin"] = "correcto";
            $loginExitoso = true;
            break;
        }
    }
    
    if (!$loginExitoso) {
        $_SESSION["estadoLogin"] = "fallido";
    }
    
    header("Location: pantallaInfoLogin.php");
    exit;
}
?>
