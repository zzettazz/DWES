<?php
$numIntroducido = readline("Introduce un número: ");
$contador = 0;
$arrayCaracteres = [];

while ($numIntroducido > 0)
{
    $longitud = sizeof($arrayCaracteres);

    while ($longitud < $numIntroducido)
    {
        if ($contador === 0)
        {
            $arrayCaracteres[$longitud] = "+";
            $contador = $contador + 1;
        }
        elseif ($contador === 1)
        {
            $arrayCaracteres[$longitud] = "-";
            $contador = $contador + 1;
        }
        elseif ($contador === 2)
        {
            $arrayCaracteres[$longitud] = ".";
            $contador = 0;
        }

        $longitud = sizeof($arrayCaracteres);

    }

    echo("\n");

    for ($i = 0; $i < $longitud; $i++)
    {
        echo($arrayCaracteres[$i]);
    }
    
    $numIntroducido = $numIntroducido - 1;
    $arrayCaracteres = [];
}

echo("\nFINALIZADO\n");

?>