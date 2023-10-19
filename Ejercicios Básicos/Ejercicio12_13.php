<?php

$cadena = "Hola soy tonto, idiota y un esternocelidomastoeideo";

$palabrasProhibidas = ["tonto","idiota","esternocelidomastoeideo"];

for($i = 0; $i < count($palabrasProhibidas); $i++)
{
    if (stripos($cadena, $palabrasProhibidas[$i]) !== false)
    {
        $longitudPalabraProhibida = strlen($palabrasProhibidas[$i]);

        $reemplazo = "";
        for ($i2 = 0; $i2 < $longitudPalabraProhibida; $i2++) 
        {
            $reemplazo = $reemplazo."*";
        }

        $cadena = str_ireplace($palabrasProhibidas[$i],$reemplazo,$cadena);
    }
}

echo($cadena);

?>