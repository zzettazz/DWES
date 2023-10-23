<?php
//////////////////////////////////
$debug = true;
/////////////////////////////////
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
            min-height: 100vh; /* Asegura que el contenedor esté centrado verticalmente */
            margin: 0;
        }

        h1 {
            border-bottom: 2px dashed black;
        }

        h2 {
            border: 2px solid black;
        }

        li {
            padding-top: 5px;
        }

        .container {
            text-align: center;
            border: 2px dotted black;
            border-radius: 20px;
            padding: 100px; /* Reducido el padding para ajustar a una apariencia más estilizada */
        }

        .botonEnviar {
            background-color: blue;
            border: 2px solid black;
            border-radius: 25px;
            margin-top: 20px;
            padding: 10px 20px; /* Simplificado el padding para mantener el aspecto */
            font-size: 15px;
            color: white;
            cursor: pointer;
        }

        .botonEnviar:hover {
            background-color: black;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>LOGIN</h1>
        <?php if ($debug == true): ?>
            <h2>Usuarios</h2>
            <ul>
                <?php foreach ($_SESSION["bd"] as $usuario): ?>
                    <li><?= "Usuario: " . $usuario["usuario"] . " || Contraseña: " . $usuario["contrasenia"] ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <form action="hacerLogin.php" method="POST">
            Usuario <input type="text" id="nombreUsuarioIntroducido" name="nombreUsuarioIntroducido" value=<?= $ultimoUsuario ?>><br/>
            Contraseña <input type="password" id="contraseniaIntroducida" name="contraseniaIntroducida"/><br/><br/>
            <label for="recordar">Recordar</label> <input type="checkbox" name="recordar" id="recordar"/><br/>
            <input type="submit" class="botonEnviar"/><br/><br/>
            <a href="registrar.php">Registrar nuevo usuario</a>
            <br/><br/><br/>
            </h6>*<br/>AVISO:<br/>TODOS CONTIENEN CSS<br/>POR PURA ESTETICA,<br/>NO ES NECESARIO<br/>*</h6>
        </form>
    </div>
</body>
</html>
