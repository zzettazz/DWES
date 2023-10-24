<?php
if (!isset($_COOKIE["nv"]))
{
    $numVisitas = 1;
    setcookie("nv",$numVisitas);
}
else {
    $numVisitas = $_COOKIE["nv"] + 1;
    setcookie("nv",$numVisitas);
}

?>

<h2> Hola esta es tu visita numero </h2>
<h2><?= $numVisitas ?></h2>