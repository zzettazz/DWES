<?php
session_start();

if (isset($_POST["usuario"]) && isset($_POST["contraseña"]) && $_POST["usuario"] != "" && $_POST["contraseña"] != "")
{
    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["contraseña"] = $_POST["contraseña"];
    echo "<h1>HOLA</h1>";
    header("refresh:3;url=resultado.php");
}
else
{
    echo "<h1>No existen los datos</h1>";
    header("refresh:5;url=sesiones.php");
}
?>