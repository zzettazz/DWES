<style>
    .custom-button {
        background-color: transparent; /* Fondo transparente */
        border: none; /* Sin borde */
        color: blue; /* Color de texto (ajusta según tu diseño) */
        cursor: pointer; /* Cambia el cursor al pasar el mouse */
        padding: 0; /* Elimina el relleno interno del botón */
        text-decoration: underline; /* Añade un subrayado al texto (ajusta según tu diseño) */
        display: block; /* Hacer el botón un bloque para centrarlo */
        margin: 0 auto; /* Centrar horizontalmente */
        line-height: 2.5; /* Ajusta el valor de line-height según tu diseño para centrar verticalmente */
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
    <tr>
        <th>USUARIOS</th>
        <th>MENSAJES</th>
        <th>ACCIONES</th>
    </tr>
    <?php foreach ($_SESSION["bd"] as $usuario): ?>
        <?php if ($usuario["usuario"] != $usuarioActual) : ?>
            <tr>
                <th><?= $usuario["usuario"] ?></th>
                <th><a href="#">Leer</a></th>
                <th>
                    <form action="escribir.php" method="POST">
                        <input type="hidden" name="destinatario" value="<?= $usuario['usuario'] ?>">
                        <input type="submit" class="custom-button" value="Escribir">
                    </form>
                </th>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
</table>