<?php
include("datos.php");
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Seleccionar comunidad</title>
    </head>

    <body>
        <h1>Comunidades Autónomas</h1>
        ccaa
        <select id="selectComunidades" onchange="sacarProvincias()">
            <?php foreach ($comunidades as $clave => $valor) : ?>
                <option value="<?= $clave ?>"><?= $clave ?></option>
            <?php endforeach; ?>
        </select>
        <br/>
        <div id="provincias"></div>
    </body>

    <script src="script.js"></script>
</html>