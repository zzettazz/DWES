<?php
session_start();
include("variables.php");
$inicio = $_SESSION["valorCotaInferior"] - 1;
$longitud = $_SESSION["valorCotaSuperior"] - $_SESSION["valorCotaInferior"] +1 ;
$arraySignosPartido = array_slice($arraySignos,$inicio,$longitud);
$arrayMesesPartido = array_slice($meses,$inicio,$longitud);
$primerSigno = true;
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8"/>
        <title>Ejercicio 1</title>
    </head>

    <body>
        <form action="resultado.php" method="POST">
            <fieldset>
                <legend>Signos del zodiaco</legend>
                <?php foreach($arraySignosPartido as $signo) : ?>
                    <?php if ($primerSigno == true) : ?>
                        <input type="radio" name="signoZodiaco" value="<?=$signo?>" id="<?=$signo?>" checked/>
                        <label for="<?= $signo ?>">
                            <?=$signo?>
                        </label>
                        <br/>
                        <?php $primerSigno = false; ?>
                    <?php else : ?>
                        <input type="radio" name="signoZodiaco" value="<?=$signo?>" id="<?=$signo?>"/>
                        <label for="<?= $signo ?>">
                            <?=$signo?>
                        </label>
                        <br/>
                    <?php endif; ?>
                <?php endforeach; ?>
            </fieldset>
            <br/>
            <fieldset>
                <legend>Meses del año</legend>
                <select name="mesSeleccionado">
                    <?php foreach ($arrayMesesPartido as $mes) : ?>
                        <option value="<?= $mes ?>"><?= $mes ?></option>
                    <?php endforeach; ?>
                </select>
            </fieldset>
            <br/>
            <input type="submit" value="Continuar"/>
        </form>
    </body>

</html>