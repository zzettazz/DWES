<?php
echo "<h1>Listado de cookies del NIVEL 1</h1><br/><br/>";
?>

<table border="1">
    <tr>
        <th>Nombre de la cookie</th>
        <th>Contenido de la cookie</th>
    </tr>
    <?php foreach ($_COOKIE as $nombreCookie => $contenidoCookie) { ?>
        <tr>
            <td><?= $nombreCookie ?></td>
            <td><?= $contenidoCookie ?></td>
        </tr>
    <?php } ?>
</table>