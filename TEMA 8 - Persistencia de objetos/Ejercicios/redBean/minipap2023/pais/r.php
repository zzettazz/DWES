<?php
require_once '../lib/rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');
$paises = R::findAll('pais');
?>

<h1>Lista de países</h1>

<button onclick="window.location.href='c.php'">Nuevo</button>
<table border="1">
    <header>
        <th>Nombre</th>
        <th>Nacidos</th>
        <th>Residentes</th>
    </header>

    <?php foreach ($paises as $pais): ?>
        <tr>
            <td>
                <?= $pais->nombre ?>
            </td>

            <td>
                <?php foreach ($pais->alias('nace')->ownPersonaList as $persona): ?>
                    <?= $persona->nombre ?> (<?= $persona->fnac ?>) //
                <?php endforeach; ?>
            </td>

            <td>
                <?php foreach ($pais->alias('vive')->ownPersonaList as $persona): ?>
                    <?= $persona->nombre ?> (<?= $persona->fnac ?>) //
                <?php endforeach; ?>
            </td>

        </tr>
    <?php endforeach; ?>

</table>

<button onclick="window.location.href='../index.php'">Volver</button>