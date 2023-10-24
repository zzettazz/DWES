<?php

$num = 1;
$arrayNumeros = [];

do
{
    $num = readline("Introduce un número: ");
    if ($num != 0)
    {
        $arrayNumeros[sizeof($arrayNumeros)] = $num;
    }
}
while ($num != 0);

$operacion = "NA";

do
{
    $operacion = readline("Operación (\"sumar\" / \"multiplicar\"): ");
}
while ($operacion !== "sumar" && $operacion !== "multiplicar");

$resultado = 0;

if ($operacion === "sumar")
{
    for ($i = 0; $i < (sizeof($arrayNumeros)); $i++)
    {
        $resultado = intval($resultado) + intval($arrayNumeros[$i]);
    }
}
elseif ($operacion === "multiplicar")
{
    if ($resultado === 0) $resultado = 1;
    for ($i = 0; $i < (sizeof($arrayNumeros)); $i++)
    {
        $resultado = intval($resultado) * intval($arrayNumeros[$i]);
    }
}

echo("\nResultado: $resultado");

?>