<?php
//////////////////////////////////
// ACTIVAR SI QUEREMOS VER LOS USUARIOS CREADOS
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
        .textoEntrada {
            padding:9px;
            border:2px solid black;
            border-radius:25px;
            text-align: center;
            font-family: cursive;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
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
            padding: 60px;
        }

        .botonEnviar {
            background-color: blue;
            border: 2px solid black;
            border-radius: 25px;
            margin-top: 20px;
            padding: 10px 75px;
            font-size: 15px;
            color: white;
            cursor: pointer;
            font-family: cursive;
        }

        .botonEnviar:hover {
            background-color: black;
        }

        .botonRegistrar {
            background-color: green;
            border: 2px solid black;
            border-radius: 25px;
            margin-top: 20px;
            padding: 5px 40px;
            font-size: 15px;
            color: white;
            cursor: pointer;
            font-family: cursive;
        }

        .botonRegistrar:hover {
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
            <input type="text" placeholder="Usuario" class="textoEntrada" id="nombreUsuarioIntroducido" name="nombreUsuarioIntroducido" value=<?= $ultimoUsuario ?>><br/><br/>
            <input type="password" placeholder="Contraseña" class="textoEntrada" id="contraseniaIntroducida" name="contraseniaIntroducida"/><br/><br/>
            <label for="recordar">Recordar</label> <input type="checkbox" name="recordar" id="recordar"/><br/>
            <input type="submit" class="botonEnviar" value="ENTRAR"/>
        </form>
        <form action="registrar.php" method="POST">
            <input type="submit" class="botonRegistrar" value="REGISTRARSE"/><br/><br/>
        </form>
        </h6>*<br/>AVISO:<br/>TODOS CONTIENEN CSS<br/>POR PURA ESTETICA,<br/>NO ES NECESARIO<br/>*</h6>
    </div>
</body>
</html>
