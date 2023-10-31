<?php

// ARRAY SIMPLE
$array = [1,2,3,4,5];

// ARRAY ASOCIATIVO
$arrayAsociativo = array(
    "deportes" => ["futbol","baloncesto","hockey"],
    "coches" => "un coche"
);

// FOREACH DEL ARRAY
foreach($arrayAsociativo as $valor)
{
    if (is_array($valor)){
        foreach($valor as $valorDelArraySecundario)
        {
            echo $valorDelArraySecundario."\n";
        }
    }
    else
    {
        echo $valor."\n";
    }
}

?>