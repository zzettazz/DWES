<?php

function resaltar($texto)
{
    return "<h1>$texto</h1>";
}

function pintarRadio($nombre, $arrayValueLabel, $seleccionado)
{
    $texto = "";
    foreach($arrayValueLabel as $clave => $valor)
    {
        // HACEMOS EL INPUT
        $texto = $texto."<input type=\"radio\" name=\"$nombre\" value=\"$clave\" id=\"$clave\"";

        // PARA DETERMINAR EL FINAL DE LA ETIQUETA DEBEMOS SABER SI LA CLAVE ES IGUAL A LA VARIABLE SELECCIONADO
        // EN CASO AFIRMATIVO ACABAMOS AÑADIENDO CHECKED
        if ($seleccionado == $clave) $texto = $texto." checked=\"checked\">";
        // N CASO CONTRARIO, ACABAMOS NORMAL
        else $texto = $texto.">";

        //AÑADIMOS EL LABEL
        $texto = $texto."<label for=\"$clave\"> $valor</label><br/>";
    }
    return $texto;
}

function pintarCheckboxes($nombre, $arrayValueLabel)
{
    $texto = "";
    foreach($arrayValueLabel as $clave => $valor)
    {
        // HACEMOS EL INPUT AÑADIENDO LOS CORCHETES
        $texto = $texto."<input type=\"checkbox\" name=\"$nombre"."[]"."\" value=\"$clave\" id=\"$clave\">";

        //AÑADIMOS EL LABEL
        $texto = $texto."<label for=\"$clave\"> $valor</label><br/>";
    }
    return $texto;
}

?>