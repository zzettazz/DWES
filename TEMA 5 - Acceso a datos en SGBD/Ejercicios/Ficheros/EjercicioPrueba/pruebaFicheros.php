<?php

$lineas = file("ficheroDePrueba.txt");
foreach($lineas as $num_linea => $linea)
{
    echo "Linea: ".($num_linea+1)." || Contenido: $linea<br/>";
}

echo "-------------------------<br/>";

$fichero = fopen("ficheroDePrueba.txt","r+");

while (!feof($fichero))
{
    echo fgets($fichero)."<br/>";
}

fputs($fichero,"\nHOLA");

?>