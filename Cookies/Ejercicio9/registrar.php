<?php
session_start();

if (isset($_POST['destinatario'])) {
    $destinatario = $_POST['destinatario'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>

        .campos {
            padding:10px;
            border: 3px solid black;
            border-radius: 25px;
            text-align: center;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        form {
            margin: 0 auto;
            text-align: center;
        }

        .container {
            border:2px dotted black;
            border-radius:20px;
            padding: 100px;
        }

        h1 {
            border-bottom: 2px dashed black;
        }

        .botonEnviar{
            background-color: blue;
            border: 2px solid black;
            border-radius: 25px;
            padding-left:50px;
            padding-right:50px;
            padding-top:10px;
            padding-bottom:10px;
            font-size:15px;
            color:white;
            cursor: pointer;
        }

        .botonEnviar:hover{
            background-color: black;
            color:white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>NUEVO USUARIO</h1>
        <br/>
        <form action="registarNuevoUsuario.php" method="GET">
            <input type="text" class="campos" id="usuarioRegistro" placeholder="Usuario" name="usuarioRegistro"/><br/><br/>
            <input type="password" class="campos" id="contraseniaRegistro" placeholder="Contraseña" name="contraseniaRegistro"><br/><br/>
            <input type="submit" class="botonEnviar" value="REGISTRAR"/>
        </form>
        <br/>
        <br/>
        <a href="login.php">Volver a login</a>
    </div>
</body>
</html>
