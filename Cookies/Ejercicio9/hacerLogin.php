<?php
session_start();

if (!isset($_GET["nombreUsuarioIntroducido"]) && !isset($_GET["contraseniaIntroducida"]))
{
    $usuario = $_GET["nombreUsuarioIntroducido"];
    $contrasenia = $_GET["contraseniaIntroducida"];
    if (in_array($_SESSION["bd"], $usuario))
    {
        echo "usuario registrado";
    }
}
else
{
    echo("Error");
}

?>