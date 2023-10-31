<?php

function conectarBBD()
{
    $base = "pruebas";
    $usuario = "root";
    $pwd = "";
    $host = "localhost";
    try
    {
        $stringConexion = "mysql:host=$host;dbname=$base";
        $conexion = new PDO($stringConexion, $usuario, $pwd);
    }
    catch (Exception $e)
    {
        print("ERROR DE CONEXION");
        die();
    }
    return $conexion;
}

?>