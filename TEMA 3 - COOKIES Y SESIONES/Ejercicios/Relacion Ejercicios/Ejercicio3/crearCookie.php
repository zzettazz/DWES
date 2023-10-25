<?php

if (isset($_POST["nombreCookie"]) && isset($_POST["contenidoCookie"]))
{
    $nombreCookie = $_POST["nombreCookie"];
    $contenidoCookie = $_POST["contenidoCookie"];
    $nivel = $_POST["nivel"];

    if ($nivel == 0) setcookie($nombreCookie,$contenidoCookie,0,"nivel0");
    elseif ($nivel == 1) setcookie($nombreCookie,$contenidoCookie,0,"nivel1") ;
    elseif ($nivel == 2) setcookie($nombreCookie,$contenidoCookie,0,"/nivel2");
}

header("Location:index.php");

?>