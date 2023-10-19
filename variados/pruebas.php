<?php

/* $url = "http://google.com";

//echo "<h1>ATENCION</h1>\n","<p>\n","Si te atreves\n","<a href=\"$url\">Pincha Aquí</a>\n","y verás\n","<p>\n";

$cabecera = "<h1>Prueba</h1>";
$html = <<<PRUEBA

"<h1>ATENCION</h1>"
"<p>"
"Si te atreves"
"<a href="$url">Pincha Aquí</a>"
"y verás"
"<p>"

PRUEBA;
$footer = "<footer>Footer</footer>";

echo $cabecera.$html.$footer; */

while (true)
{
    echo "PALABRA: ";
    fscanf(STDIN, "%s\n", $a);

    $cj = substr($a,-2);
    echo $cj;
    echo "\n";

    
}

?>