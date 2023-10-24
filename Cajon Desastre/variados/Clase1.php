<?php

//PRUEBA SIMPLE
$x=1;
$y=2;
echo $x == $y;

//OPERACIONES CON OPERADORES
$x2 = true;
$y2 = false;
$z2 = (false && ($x2 || $y2));
var_dump($z2);

// OPERADOR TERNARIO
$x3 = false;
$y3;
$x3 ? $y3 = true : $y3 = false;
var_dump($y3);

echo "\n\n";

$letra = "A";

if ($letra === "A") echo "La letra: $letra es una vocal";
elseif ($letra === "E") echo "La letra: $letra es una vocal";
elseif ($letra === "I") echo "La letra: $letra es una vocal";
elseif ($letra === "O") echo "La letra: $letra es una vocal";
elseif ($letra === "U") echo "La letra: $letra es una vocal";
else echo ("La letra: $letra es una consonate");
?>