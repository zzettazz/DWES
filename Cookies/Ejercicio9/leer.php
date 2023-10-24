<?php
session_start();

if (!isset($_SESSION["bd"])) {
    header("Location:login.php");
}

$contadorUsuarios = 0;
foreach ($_SESSION["bd"] as $usuario)
{
    $contadorUsuarios = $contadorUsuarios + 1;
}
if ($contadorUsuarios == 0) header("Location:login.php");

$usuarioActual = $_SESSION["usuarioActual"];

if (isset($_POST['escritor'])) {
    $usuarioDestino = $_POST['escritor'];
}
$hayMensajes = false;

if (!isset($_SESSION["mensajes"]))
{
    $_SESSION["mensajes"] = array();
    $hayMensajes = false;
}
else
{
    foreach ($_SESSION["mensajes"] as $mensaje)
    {
        if ($mensaje["emisor"] == $usuarioDestino && $mensaje["receptor"] == $usuarioActual)
        {
            $hayMensajes = true;
            break;
        }
    }
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

        table {
            margin: 0 auto;
        }

        table th {
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        Usuario actual: <?= $usuarioActual ?><br/>
        <br/>
        <h2>Lista de mensajes de <?= isset($usuarioDestino) ? $usuarioDestino : '' ?></h2>
        <br/>
        <?php if ($hayMensajes == true) : ?>
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
        <?php else : ?>
            <h4>SIN MENSAJES</h4>
        <?php endif; ?>
        <br/>
        <br/>
        <a href="listaUsuarios.php">Volver a la lista de usuarios</a>
    </div>
</body>
</html>
