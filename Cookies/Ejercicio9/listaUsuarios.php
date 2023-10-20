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
    <tr>
    <?php foreach ($_SESSION["bd"] as $usuario): ?>
        <th><?= $usuario["usuario"] ?></th>
    <?php endforeach; ?>
    </tr>
</table>