<?php
session_start();
$ultimoUsuario;

if (!isset($_SESSION["bd"]))
{
    $_SESSION["bd"] = array();
}

if (isset($_SESSION["ultimoUsuario"])) $ultimoUsuario = $_SESSION["ultimoUsuario"];
else $ultimoUsuario = "";
// array_push($_SESSION["bd"],["usuario"=>"uno","contrasenia"=>"dos"]);
// array_push($_SESSION["bd"],["usuario"=>"tres","contrasenia"=>"cuatro"]);

?>

<h1>LOGIN</h1>
<h2>Usuarios</h2>
<ul>
    <?php foreach ($_SESSION["bd"] as $usuario): ?>
        <li><?= "Usuario: ".$usuario["usuario"]." || Contraseña: ".$usuario["contrasenia"]?></li>
    <?php endforeach; ?>
</ul>
<form action="hacerLogin.php" method="POST">
    Usuario <input type="text" id="nombreUsuarioIntroducido" name="nombreUsuarioIntroducido" value=<?=$ultimoUsuario?>><br/>
    Contraseña <input type="password" id="contraseniaIntroducida" name="contraseniaIntroducida"/><br/>
    Recordar <input type="checkbox" name="recordar"/><br/>
    <input type="submit"/><br/><br/>
    <a href="registrar.php">Registrar nuevo usuario</a>
</form>