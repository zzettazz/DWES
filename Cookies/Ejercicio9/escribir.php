<?php
session_start();
$usuarioActual = $_SESSION["usuarioActual"];

if (isset($_POST['destinatario'])) {
    $destinatario = $_POST['destinatario'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            border: 2px dotted black;
            padding: 100px;
            border-radius: 25px;
        }

        form {
        margin: 0 auto; /* Centrar horizontalmente */
        text-align: center;
        }

        h1{
            border-bottom:2px dashed black;
        }

        .botonEnviar {
            background-color: green; /* Fondo transparente */
            color: white;
            border: 2px solid black; /* Sin borde */
            border-radius: 25px;
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 7px;
            padding-top: 7px;
            font-size: 17px;
            cursor: pointer;
        }

        .botonEnviar:hover {
            background-color: black; /* Fondo transparente */
        }

    </style>
</head>
<body>
    <div class="container">
        <form action="mandarMensaje.php" method="POST">
            <h1>Escribir un mensaje a: <?= isset($destinatario) ? $destinatario : '' ?></h1><br/><br/>
            De: <input type="text" value=<?= $usuarioActual ?> disabled/><br/><br/>
            Para: <input type="text" value="<?= isset($destinatario) ? $destinatario : '' ?>" disabled/><br/><br/><br/>
            Escribe el contenido del mensaje<br/><br/>
            <textarea style="height:150px;width:300px;" name="textoMensaje"></textarea><br/><br/>
            <input type="hidden" name="destinatario" value="<?= isset($destinatario) ? $destinatario : '' ?>">
            <input type="submit" class="botonEnviar"/>
        </form>
        <br/>
        <br/>
        <a href="listaUsuarios.php">Volver a la lista de usuarios</a>
    </div>
</body>
</html>
