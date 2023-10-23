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
                <th><a href="escribir.php?destinatario=<?= $usuario["usuario"] ?>">Escribir</a></th>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
</table>