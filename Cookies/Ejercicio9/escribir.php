<style>
    form {
        margin: 0 auto; /* Centrar horizontalmente */
        text-align: center;
    }
</style>

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
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="mandarMensaje.php" method="POST">
            <h1>Escribir un mensaje</h1><br/><br/>
            De: <input type="text" value=<?= $usuarioActual ?> disabled/><br/><br/>
            Para: <input type="text" value="<?= isset($destinatario) ? $destinatario : '' ?>" disabled/><br/><br/>
            Escribe el contenido del mensaje<br/>
            <textarea style="height:150px;width:300px;" name="textoMensaje"></textarea><br/><br/>
            <input type="hidden" name="destinatario" value="<?= isset($destinatario) ? $destinatario : '' ?>">
            <input type="submit"/>
        </form>
        <br/>
        <br/>
        <a href="listaUsuarios.php">Volver a la lista de usuarios</a>
    </div>
</body>
</html>
