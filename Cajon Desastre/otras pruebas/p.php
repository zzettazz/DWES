<?php

$array = ["D"=>"Deporte", "C"=>"Cine"];

foreach($array as $clave => $valor)
{
    echo "Clave: ".$clave." || Valor: ".$valor;
}

$fechaHoraActual = date("d/m/Y H:i");
echo "\n".$fechaHoraActual;

$fechaActual = date("d/m/Y (H:i)");
echo "\n".$fechaActual;

$horaActual = date("H:i");
echo "\n".$horaActual;
?>