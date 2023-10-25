<?php
session_start();

if (isset($_SESSION["visitas"]))
{
    $_SESSION["visitas"] = $_SESSION["visitas"] + 1;
    echo "<h1>Hola, es la ".$_SESSION["visitas"]."º vez que visitas esta página</h1>";
}
else
{
    echo "<h1>Bienvenido</h1>";
    $_SESSION["visitas"] = 1;
}

?>