<?php

function generaCheckbox()
{
    include("variables.php");
    foreach($deportes as $deporte)
    {
        $nombreDePantalla = ucfirst($deporte);
        echo "<input type=\"checkbox\" id=\"$deporte\" name=\"$deporte\"/>";
        echo "<label for=\"$deporte\"> $nombreDePantalla</label>";
        echo "<br/>";
    }
}

function generarDeportes()
{
    include("variables.php");
    foreach($deportes as $deporte)
    {
        $respuesta = isset($_GET[$deporte]);
        if ($respuesta == 1) echo "<li style=\"font-size:20px\">".ucfirst($deporte)."</li>";
    }
}

?>