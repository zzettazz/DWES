<?php

$arrayPalabras = ["as","dos","tres","cuatro","cinco","seis","siete","sota","caballo","rey"];
$miArray = [];
$num = 0;

do
{
    $num = readline("Introduce un número: ");
}
while ($num <= 0 || $num > 12);

for($i = 0; $i < $num; $i++)
{
    if($i <= 8) $miArray[$i] = $arrayPalabras[$i];
}

echo("\n");

for($i2 = 0; $i2 < sizeof($miArray); $i2++)
{
    if ($i2 == (sizeof($miArray)-1)) echo($miArray[$i2]);
    else echo($miArray[$i2].", ");
}

?>