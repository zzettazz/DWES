<?php

$miArrayAsociativo = array(
    "clave1" => array("uno","dos","tres","cuatro"),
    "clave2" => "valor2",
    "clave3" => "valor3"
);

// Recorrer el array asociativo usando un bucle foreach
foreach ($miArrayAsociativo as $clave => $valor) {
    if (is_array($valor))
    {
        echo "Clave: ".$clave.", ";
        foreach($valor as $valorDeOtroAray)
        {
            echo $valorDeOtroAray.", ";
        }
        echo "\n";
    }
    else
    {
        echo "Clave: " . $clave . ", Valor: " . $valor."\n";
    }
}

?>