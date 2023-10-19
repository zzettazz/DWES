<?php

$numFinal = -1;
$arrayNumeros = [1];
$num = 0;

while ($numFinal != 0)
{
    $numIntroducido = readline("Introduce un número: ");
    $numFinal = $numIntroducido;
    $arrayNumeros[$num] = $numIntroducido;
    $num++;
}

$longitudArray = (count($arrayNumeros)-1);

$numeroMaximo;
$sinValor = true;

// BUSCAMOS EL NUMERO MÁXIMO
for( $i=0; $i<$longitudArray; $i++)
{
    $valor = $arrayNumeros[$i];
    if ($sinValor == true)
    {
        $numeroMaximo = $valor;
        $sinValor = false;
    }
    elseif ($valor > $numeroMaximo)
    {
        $numeroMaximo = $valor;
    }
}

$numeroMinimo;
$sinValor = true;

// BUSCAMOS EL NUMERO MINIMO
for( $i=0; $i<$longitudArray; $i++)
{
    $valor = $arrayNumeros[$i];
    if ($sinValor == true)
    {
        $numeroMinimo = $valor;
        $sinValor = false;
    }
    elseif ($valor < $numeroMinimo)
    {
        $numeroMinimo = $valor;
    }
}

echo("\nNúmero Minimo: $numeroMinimo");
echo("\nNúmero Maximo: $numeroMaximo");

?>
