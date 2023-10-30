<?php
session_start();

if (isset($_POST["segundoNumero"]) && $_POST["segundoNumero"] != "" && is_numeric($_POST["segundoNumero"]))
{
    $_SESSION["segundoNumero"] = $_POST["segundoNumero"];
    header("Location:resultado.php");
}
else
{
    echo "<h1>Datos inválidos</h1>";
    echo "<h3>Serás reedirigido automáticamente en 3 segundos";
    header("refresh:3;url=segundaPantalla.php");
}

?>
