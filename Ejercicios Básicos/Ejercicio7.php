<?php

$textoIntroducido = "";
$num = 0;

do
{
    $textoIntroducido = readline("Introduce línea de texto: ");
    $num = readline("Introduce numero: ");
    while ($num < 1 || $num > 6)
    {
        $num = readline("Introduce numero: ");
    }

    for($i = 1; $i <= $num; $i++)
    {
        echo("\n<h$i>$textoIntroducido</h$i>");
    }

    // PARA EVITAR LA REPETICIÓN DEL ÚLTIMO NÚMERO LE RESTAMOS UNO AL BUCLE FOR

    for($i = ($num-1); $i >= 1; $i--)
    {
        echo("\n<h$i>$textoIntroducido</h$i>");
    }

    echo("\n\n");
}
while ($textoIntroducido != "salir");

?>