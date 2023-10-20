
<h1>LOGIN</h1>
<form action="hacerLogin.php" method="GET">
    Usuario <input type="text" id="nombreUsuarioIntroducido" name="nombreUsuarioIntroducido" value=<?=$ultimoUsuario?>/><br/>
    Contraseña <input type="password" id="contraseniaIntroducida" name="contraseniaIntroducida"/><br/>
    Recordar <input type="checkbox" name="recordar"/><br/>
    <input type="submit"/><br/><br/>
    <a href="registrar.php">Registrar nuevo usuario</a>
</form>