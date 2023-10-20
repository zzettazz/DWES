<?php
session_start();

if (isset($_POST["nombreUsuarioIntroducido"]) && isset($_POST["contraseniaIntroducida"]))
{
    $usuario = $_POST["nombreUsuarioIntroducido"];
    $contrasenia = $_POST["contraseniaIntroducida"];
    
    foreach ($_SESSION["bd"] as $user)
    {
        if ($user["usuario"] === $usuario && $user["contrasenia"] === $contrasenia)
        {
            if ($_POST["recordar"] == "on") $_SESSION["ultimoUsuario"] = $usuario;
            header("Location: listaUsuarios.php");
            exit;
        }
    }
}

// Si el usuario y la contraseña no coinciden, redirige de nuevo al formulario de inicio de sesión
header("Location: index.php?error=1");

?>