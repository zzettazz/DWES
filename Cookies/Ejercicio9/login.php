<?php
$usuario = isset($_COOKIE["ultimousuario"]) ? $_COOKIE["ultimousuario"] : "";
?>

<h1>LOGIN</h1>

<form action="crearCookieUsuario.php" method="GET">
    Usuario <input type="text" name="usuario" value="<?php echo $usuario ?>"/><br/>
    Contraseña <input type="password" name="contrasenia"/><br/>
    <label for="recordar">Recordar</label><input type="checkbox" id="recordar" name="recordar"/><br/><br/>
    <input type="submit"/><br/><br/>
    <a href="registrar.php">Registrar nuevo usario</a>
</form>