<?php
include("../utilSQL.php");

if (isset($_POST["usuario"]) && isset($_POST["contrasenia"]) && $_POST["usuario"] != "" && $_POST["contrasenia"] != "")
{
    $usuario = $_POST["usuario"];
    
    $conexion = conectarBBD();
    $resultado;
    $consulta = <<<SQL
        SELECT * FROM usuarios
        WHERE usuario = ?
    SQL;

    try
    {
        $sentencia = $conexion -> prepare($consulta);
        $sentencia->execute([$usuario]);
        $resultado = $sentencia->fetchAll();
        
        if ($resultado != null)
        {
            echo "Bienvenido: $usuario";
        }
        else
        {
            echo "<h1>No se ha encontrado el usuario</h1>";
            header("refresh:3;url=login.html");
        }
    }
    catch (Exception $e)
    {

    }
}
else
{
    echo "<h1>Has introducido datos erróneos</h1>";
    echo "<br/>Serás reedirigido en 3 segundos";
    header("refresh:3;url=login.html");
}

?>