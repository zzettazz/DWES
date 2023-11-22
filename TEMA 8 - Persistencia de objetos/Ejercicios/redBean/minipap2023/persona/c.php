<?php
require_once '../lib/rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');
$paises = R::findAll('pais');
$aficiones = R::findAll('aficion');
?>

<h1>Nueva persona</h1>
<form action="cPost.php" method="post">

    Nombre
    <input type="text" name="nombre" />
    <br />

    Fecha nacimiento
    <input type="date" name="fnac" />
    <br />

    País de nacimiento
    <select name="idPaisNace">
        <?php foreach ($paises as $pais): ?>
            <option value="<?= $pais->id ?>">
                <?= $pais->nombre ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br />

    País de residencia
    <select name="idPaisVive">
        <?php foreach ($paises as $pais): ?>
            <option value="<?= $pais->id ?>">
                <?= $pais->nombre ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br />


    <fieldset>
        <legend>
            Aficiones que me gustan
        </legend>
        <?php foreach ($aficiones as $aficion): ?>
            <input id="idg-<?=$aficion->id?>" type="checkbox" name="idsAficionGusta[]" value="<?=$aficion->id?>"/>
            <label for="idg-<?=$aficion->id?>" ><?=$aficion->nombre?></label>
        <?php endforeach; ?>
    </fieldset>


    <fieldset>
        <legend>
            Aficiones que odio
        </legend>
        <?php foreach ($aficiones as $aficion): ?>
            <input id="ido-<?=$aficion->id?>" type="checkbox" name="idsAficionOdio[]" value="<?=$aficion->id?>"/>
            <label for="ido-<?=$aficion->id?>" ><?=$aficion->nombre?></label>
        <?php endforeach; ?>
    </fieldset>

    <input type="submit" />
</form>