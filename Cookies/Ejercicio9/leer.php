<style>
    table {
        margin: 0 auto; /* Centrar horizontalmente */
    }

    table th {
        padding: 10px;
    }
</style>

<?php
session_start();
$usuarioActual = $_SESSION["usuarioActual"];

if (isset($_POST['escritor'])) {
    $usuarioDestino = $_POST['escritor'];
}
$hayMensajes = false;

if (!isset($_SESSION["mensajes"]))
{
    $_SESSION["mensajes"] = array();
}

// REVISAR
if (isset($_SESSION["mensajes"])) $hayMensajes = true;
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
        Usuario actual: <?= $usuarioActual ?><br/>
        <br/>
        <h2>Lista de mensajes de <?= isset($usuarioDestino) ? $usuarioDestino : '' ?></h2>
        <br/>
        <table border="1">
            <tr>
                <th>FECHA</th>
                <th>MENSAJE</th>
            </tr>
            <?php foreach($_SESSION["mensajes"] as $mensaje) : ?>
                <?php if ($mensaje["receptor"] == $usuarioActual && $mensaje["emisor"] == $usuarioDestino) : ?>
                    <tr>
                        <th><?= $mensaje["fechaHora"] ?></th>
                        <th><?= $mensaje["mensaje"] ?></th>
                    </tr>
                <?php endif ?>
            <?php endforeach ?>
        </table>
        <br/>
        <br/>
        <a href="listaUsuarios.php">Volver a la lista de usuarios</a>
    </div>
</body>
</html>
