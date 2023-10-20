<?php
session_start();

if (isset($_GET["usuarioRegistro"]) && isset($_GET["contraseniaRegistro"]))
{
    if (!isset($_SESSION["bd"]) )
    {
        $_SESSION["bd"] = array();
        array_push($_SESSION["bd"],[$_GET["usuarioRegistro"],$_GET["contraseniaRegistro"]]);
        header("Location:login.php");
    }
    else
    {
        array_push($_SESSION["bd"],[$_GET["usuarioRegistro"],$_GET["contraseniaRegistro"]]);
        sleep(3);
        header("Location:login.php");
    }
}
else
{
    header("Location:registrar.php");
}

?>