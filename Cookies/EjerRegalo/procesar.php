<?php

$nuevaAportacion["nombre"] = isset($_GET["nombre"]) ? $_GET["nombre"] : null;
$nuevaAportacion["aportaciones"] = isset($_GET["aportaciones"]) ? $_GET["aportaciones"] : 0;

if ($nombre == null && $aportacion != 0)
{
    session_start();
    if (!isset($_SESSION["aportaciones"]))
    {
        $_SESSION["aportaciones"] = [];
    }
}
header("Location:regalo.php")
?>