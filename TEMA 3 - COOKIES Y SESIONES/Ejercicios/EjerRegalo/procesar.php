<?php

$nuevaAportacion["nombre"] = isset($_GET["nombre"]) ? $_GET["nombre"] : null;
$nuevaAportacion["cantidad"] = isset($_GET["cantidad"]) ? $_GET["cantidad"] : 0;

if ($nuevaAportacion["nombre"] && $nuevaAportacion["cantidad"] != 0)
{
    session_start();
    if (!isset($_SESSION["aportaciones"]))
    {
        $_SESSION["aportaciones"] = [];
    }
    $_SESSION["aportaciones"][] = $nuevaAportacion;
}
header("Location:regalo.php")
?>