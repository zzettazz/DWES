<?php
include("palabras.php");

$idioma = $_GET["idioma"];

$resultado = "";

foreach($BDetiquetas[$idioma] as $valor)
{
    if ($BDetiquetas[$idioma][count($BDetiquetas[$idioma]) - 1] == $valor) 
    {
        $resultado = $resultado."<input type=\"submit\" value=\"$valor\"/><br/>";
    }
    else
    {
        $resultado = $resultado."$valor <input type=\"text\"/><br/>";
    }
}

echo $resultado;
?>