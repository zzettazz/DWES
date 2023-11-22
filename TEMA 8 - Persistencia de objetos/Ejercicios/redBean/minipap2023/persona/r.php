<?php
require_once '../lib/rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');
$personas = R::findAll('persona');
?>

<h1>Lista de personas</h1>

<button onclick="window.location.href='c.php'">Nuevo</button>
<table border="1">
    <header>
        <th>Nombre</th>
        <th>Fecha nacimiento</th>
        <th>País de nacimiento</th>
        <th>País de residencia</th>
    </header>

    <?php foreach ($personas as $persona): ?>
        <tr>
            <td>
                <?= $persona->nombre ?>
            </td>
            <td>
                <?= $persona->fnac ?>
            </td>
            <td>
                <?= $persona->fetchAs('pais')->nace->nombre ?>
            </td>
            <td>
                <?= $persona->fetchAs('pais')->vive->nombre ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

<button onclick="window.location.href='../index.php'">Volver</button>