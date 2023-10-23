<style>
    .boton-escribir {
        background-color: blue; /* Fondo transparente */
        border: 2px solid black; /* Sin borde */
        border-radius: 25px;
        color: white; /* Color de texto (ajusta según tu diseño) */
        cursor: pointer; /* Cambia el cursor al pasar el mouse */
        padding: 5px; /* Elimina el relleno interno del botón */
        display: block; /* Hacer el botón un bloque para centrarlo */
        margin: 0 auto; /* Centrar horizontalmente */
        margin-top:15px;
    }

    .boton-escribir:hover {
        background-color: white; /* Fondo transparente */
        color:black;
    }

    .boton-leer {
        background-color: green; /* Fondo transparente */
        border: 2px solid black; /* Sin borde */
        border-radius: 25px;
        color: white; /* Color de texto (ajusta según tu diseño) */
        cursor: pointer; /* Cambia el cursor al pasar el mouse */
        padding: 5px; /* Elimina el relleno interno del botón */
        display: block; /* Hacer el botón un bloque para centrarlo */
        margin: 0 auto; /* Centrar horizontalmente */
        margin-top:15px;
    }

    .boton-leer:hover {
        background-color: black; /* Fondo transparente */
        color:white;
    }

    .acciones th{
        padding:10px;
    }
</style>


<?php
session_start();
$usuarioActual = $_SESSION["usuarioActual"];
?>

<h1>Usuario actual: <?= $usuarioActual ?></h1>
<br/>
<h2>Lista de usuarios / mensajes</h2>
<br/><br/>
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