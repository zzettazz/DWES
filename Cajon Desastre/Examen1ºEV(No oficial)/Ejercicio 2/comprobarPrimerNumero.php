<?php
session_start();

if (isset($_POST["primerNumero"]) && $_POST["primerNumero"] != "" && is_numeric($_POST["primerNumero"]))
{
    $_SESSION["primerNumero"] = $_POST["primerNumero"];
    header("Location:segundaPantalla.php");
}
else
{
    echo "<h1>Datos inválidos</h1>";
    echo "<h3>Serás reedirigido automáticamente en 3 segundos";
    header("refresh:3;url=index.php");
}

?>
