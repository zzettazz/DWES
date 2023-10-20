<?php
session_start();
$usuarioGuadado = "";
if (!isset($_SESSION["usuarios"]))
{
    $_SESSION["usuarios"] = array(
        "arrayUsuarios" => array(),
        "arrayContrasenias" => array()
    );
}
?>

<h1>LOGIN</h1>
<form action="listaUsuarios.php" method="GET">
    Usuario <input type="text" id="nombreUsuarioIntroducido" name="nombreUsuarioIntroducido"/><br/>
    Contraseña <input type="password" id="contraseñaIntroducida" name="contraseñaIntroducida"/><br/>
    Recordar <input type="checkbox" name="recordar"/><br/>
    <input type="submit"/><br/><br/>
    <a href="registrar.php">Registrar nuevo usuario</a>
</form>