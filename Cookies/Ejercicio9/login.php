<?php
session_start();
$ultimoUsuario;

if (!isset($_SESSION["bd"])) {
    $_SESSION["bd"] = array();
}

if (isset($_SESSION["ultimoUsuario"])) $ultimoUsuario = $_SESSION["ultimoUsuario"];
else $ultimoUsuario = "";
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>LOGIN</h1>
        <h2>Usuarios</h2>
        <ul>
            <?php foreach ($_SESSION["bd"] as $usuario): ?>
                <li><?= "Usuario: " . $usuario["usuario"] . " || Contraseña: " . $usuario["contrasenia"] ?></li>
            <?php endforeach; ?>
        </ul>
        <form action="hacerLogin.php" method="POST">
            Usuario <input type="text" id="nombreUsuarioIntroducido" name="nombreUsuarioIntroducido" value=<?= $ultimoUsuario ?>><br/>
            Contraseña <input type="password" id="contraseniaIntroducida" name="contraseniaIntroducida"/><br/>
            Recordar <input type="checkbox" name="recordar"/><br/>
            <input type="submit"/><br/><br/>
            <a href="registrar.php">Registrar nuevo usuario</a>
            <br/><br/><br/>
            </h6>*<br/>AVISO:<br/>TODOS CONTIENEN CSS<br/>POR PURA ESTETICA,<br/>NO ES NECESARIO<br/>*</h6>
        </form>
    </div>
</body>
</html>
