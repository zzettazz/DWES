<?php

if (isset($_GET['radioP'])&&($_GET['radioP'] == 'A'))
{
    echo "<h1>A seleccionado</h1>";
}
elseif (isset($_GET['radioP'])&&($_GET['radioP'] == 'B'))
{
    echo "<h3>B seleccionado</h3>";
}
elseif (isset($_GET['radioP'])&&($_GET['radioP'] == 'C'))
{
    echo "<h5>C seleccionado</h5>";
}
else echo "<h4 style=\"color:red;\">No se ha seleccionado nada</h4>";
?>

<button onclick="window.location.href='ejer.php'">Volver</button>