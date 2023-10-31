<?php
include("../utilSQL.php");

if (isset($_POST["usuario"]) && isset($_POST["contrasenia"]) && $_POST["usuario"] != "" && $_POST["contrasenia"] != "")
{
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contrasenia"];
    
    $conexion = conectarBBD();

    try
    {
        $conexion->exec("INSERT INTO usuarios VALUES ('$usuario','$contraseña')");
        echo "<h1>USUARIO REGISTRADO</h1>";
        header("refresh:3;url=../login/login.html");
    }
    catch (Exception $e)
    {

    }
}
else
{
    echo "<h1>Has introducido datos erróneos</h1>";
    echo "<br/>Serás reedirigido en 3 segundos";
    header("refresh:3;url=registrar.html");
}

?>