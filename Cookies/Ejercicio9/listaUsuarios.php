<?php
session_start();
$usuarioActual = $_SESSION["usuarioActual"];

$recuentoUsuarios = 0;

if (isset($_SESSION["bd"]))
{
    foreach ($_SESSION["bd"] as $elemento)
    {
        if (isset($elemento["usuario"]))
        {
            $recuentoUsuarios++;
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

        .acciones th {
            padding: 10px;
        }

        .boton-escribir {
        background-color: blue; /* Fondo transparente */
        border: 2px solid black; /* Sin borde */
        border-radius: 25px;
        color: white; /* Color de texto (ajusta según tu diseño) */
        cursor: pointer; /* Cambia el cursor al pasar el mouse */
        padding: 7px; /* Elimina el relleno interno del botón */
        margin: 0 auto; /* Centrar horizontalmente */
        margin-top: 0;
        display: block; /* Hacer el botón un bloque para centrarlo */
        }

        .boton-leer {
            background-color: green; /* Fondo transparente */
            border: 2px solid black; /* Sin borde */
            border-radius: 25px;
            color: white; /* Color de texto (ajusta según tu diseño) */
            cursor: pointer; /* Cambia el cursor al pasar el mouse */
            padding: 7px; /* Elimina el relleno interno del botón */
            margin: 0 auto; /* Centrar horizontalmente */
            margin-top: 0;
            display: block; /* Hacer el botón un bloque para centrarlo */
        }

        .boton-escribir:hover, .boton-leer:hover {
            background-color: white; /* Fondo transparente */
            color: black;
        }

        .container {
            border: 2px dotted black;
            padding: 100px;
            border-radius: 25px;
            text-align: center;
        }

        h1 {
            border-bottom: 2px dashed black;
        }

        th {
            padding: 10px;
        }

        .sinUsuarios {
            border: 4px solid black;
            padding: 10px;
            border-color: red;
            border-radius: 20px;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Usuario actual: <?= $usuarioActual ?></h1>
        <br/>
        <h2>Lista de usuarios / mensajes</h2>
        <br/><br/>
        <?php if ($recuentoUsuarios > 1) : ?>
            <table border="1">
                <tr class="acciones">
                    <th>USUARIOS</th>
                    <th>MENSAJES</th>
                    <th>ACCIONES</th>
                </tr>
                <?php foreach ($_SESSION["bd"] as $usuario): ?>
                    <?php if ($usuario["usuario"] != $usuarioActual) : ?>
                        <tr>
                            <th><?= $usuario["usuario"] ?></th>
                            <th>
                                <form action="leer.php" method="POST">
                                    <input type="hidden" name="escritor" value="<?= $usuario['usuario'] ?>">
                                    <input type="submit" class="boton-leer" value="Leer">
                                </form>
                            </th>
                            <th>
                                <form action="escribir.php" method="POST">
                                    <input type="hidden" name="destinatario" value="<?= $usuario['usuario'] ?>">
                                    <input type="submit" class="boton-escribir" value="Escribir">
                                </form>
                            </th>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <h2 class="sinUsuarios">No hay usuarios disponibles</h2>
        <?php endif; ?>
        <br/>
        <br/>
        <a href="login.php">Volver a login</a>
    </div>
</body>
</html>
