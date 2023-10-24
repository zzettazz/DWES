<?php
session_start();
$aportaciones = isset($_SESSION["aportaciones"]) ? $_SESSION["aportaciones"] : [];
?>

<h1>Regalo de cumpleaños</h1>
<h3>Lista de participantes</h3>
<ul>
    <?php foreach ($aportaciones as $aportacion): ?>
        <li><?= $aportacion["nombre"]." (".$aportacion["cantidad"].")" ?></li>
    <?php endforeach; ?>

</ul>
<form action="procesar.php" method="GET">
    Nombre: <input type="text" id="nombre" name="nombre"/><br/>
    Aportacion: <input type="number" id="cantidad" name="cantidad"/><br/>
    <input type="submit"/>
</form>