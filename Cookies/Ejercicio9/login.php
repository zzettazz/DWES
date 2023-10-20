<?php
// OBTENEMOS LOS VALORES DE REGISTRAR.PHP
if (isset($_GET["registroUsuario"]) && isset($_GET["registroContrasenia"]))
{
    session_start();
    if (isset($_SESSION["usuariosRegistrados"]))
    {
        array_push($_SESSION["usuariosRegistrados"],
        ["nombreUsuario"=>$_GET["registroUsuario"],
        "contrasenia"=>$_GET["registroContrasenia"]]
        );
    }
    else
    {
        $_SESSION["usuariosRegistrados"] = array("nombreUsuario","contrasenia");

        array_push(
        $_SESSION["usuariosRegistrados"],
        ["nombreUsuario"=>$_GET["registroUsuario"],
        "contrasenia"=>$_GET["registroContrasenia"]]
        );
    }
}

// OBTENEMOS EL VALOR DE LA COOKIE PARA PODER PONER EL ULTMO USUARIO
$usuario = isset($_COOKIE["ultimousuario"]) ? $_COOKIE["ultimousuario"] : "";
?>

<!-- CREMOS EL FORMULARIO -->
<h1>LOGIN</h1>

<form action="crearCookieUsuario.php" method="GET">
    <!-- OBTENEMOS EL VALOR DEL ULTIMO USUARIO -->
    Usuario <input type="text" name="usuario" value="<?php echo $usuario ?>"/><br/>
    Contraseña <input type="password" name="contrasenia"/><br/>
    <label for="recordar">Recordar</label><input type="checkbox" id="recordar" name="recordar"/><br/><br/>
    <input type="submit"/><br/><br/>
    <a href="registrar.php">Registrar nuevo usario</a>
</form>