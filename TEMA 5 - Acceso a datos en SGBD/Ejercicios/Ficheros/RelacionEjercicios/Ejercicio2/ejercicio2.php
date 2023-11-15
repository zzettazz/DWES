<?php

$fichero = fopen("fichero2.txt","r");
$textoAMostrar = "";


while (!feof($fichero))
{
    $textoAMostrar .= fgets($fichero);
}

?>


<textarea style="height: 60vh; width: 40vw;" disabled><?= $textoAMostrar ?></textarea>