<?php
require_once '../lib/rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');
$aficiones = R::findAll('aficion');
?>

<h1>Lista de aficiones</h1>

<button onclick="window.location.href='c.php'">Nuevo</button>
<table border="1">
    <header>
        <th>Nombre</th>
        <th>Fans</th>
        <th>Haters</th>
    </header>

    <?php foreach ($aficiones as $aficion): ?>
        <tr>
            <td>
                <?= $aficion->nombre ?>
            </td>
        </tr>
    <?php endforeach; ?>



</table>

<button onclick="window.location.href='../index.php'">Volver</button>