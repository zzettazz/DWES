<?php
session_start();
include("miLibreria.php");

if (isset($_POST["cotaInferior"]) && isset($_POST["cotaSuperior"]) && $_POST["cotaInferior"] != "" && $_POST["cotaSuperior"] != "" && is_numeric($_POST["cotaInferior"]) && is_numeric($_POST["cotaSuperior"]))
{
    $_SESSION["valorCotaInferior"] = $_POST["cotaInferior"];
    $_SESSION["valorCotaSuperior"] = $_POST["cotaSuperior"];
    if ($_SESSION["valorCotaInferior"] > $_SESSION["valorCotaSuperior"])
    {
        //UTILIZO MI PROPIA FUNCION PARA PONER LAS COSAS ENTRE H EN HTML
        echo to_h(1,"La cota inferior no puede ser superior a la cota superior");
        echo to_h(3,"Serás reedirigido automáticamente en 3 segundos");
        header("refresh:3;url=index.php");
    }
    elseif ($_SESSION["valorCotaInferior"] < $_SESSION["valorCotaSuperior"])
    {
        if ($_SESSION["valorCotaInferior"] >= 1 && $_SESSION["valorCotaSuperior"] <= 12)
        {
            header("Location:signos_mes.php");
        }
        else
        {
            echo to_h(1,"La cota inferior y/o superior debe estar entre 1 y 12 (incluídos)");
            header("refresh:3;url=index.php");
        }
    }
}
else
{
    echo to_h(1,"No se han podido obtener los datos");
    echo to_h(3,"Serás reedirigido automáticamente en 3 segundos");
    header("refresh:3;url=index.php");
}

?>