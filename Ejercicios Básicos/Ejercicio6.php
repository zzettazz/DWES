<?php

$respuesta = "";
$miArray = [];

do
{
    $nombre = readline("¿Nombre?: ");

    $respuesta = $nombre;

    if ($respuesta !== "fin")
    {    
        $edad = intval(readline("¿Edad de $nombre?: "));

        while ($edad < 0 || $edad > 110)
        {
            $edad = intval(readline("¿Edad de $nombre?: "));  
        }

        $miArray[sizeof($miArray)] = ($nombre."($edad)");
    }

}
while ($respuesta !== "fin");

for($i = 0; $i < sizeof($miArray); $i++)
{
    if ($i == (sizeof($miArray)-1)) echo($miArray[$i]);
    else echo($miArray[$i].", ");
}

?>