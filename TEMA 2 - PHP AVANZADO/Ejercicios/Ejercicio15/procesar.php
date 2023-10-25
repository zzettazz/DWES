<?php

if (esValido(["nombre","contrasenia"]))
{
    $nombre = $_GET['nombre'];
    $contrasenia = $_GET['contrasenia'];
    echo "Bienvenido $nombre, tu contraseña es: $contrasenia";
}
else echo "Has dejado datos sin introducir";

function esValido($arrayParametros)
{
    $esValido = false;

    foreach($arrayParametros as $campo)
    {
        if (isset($_GET[$campo]) && $_GET[$campo] != "" && !empty(trim($_GET[$campo]))) $esValido = true;
        else $esValido = false;
    }

    return $esValido;
}

?>