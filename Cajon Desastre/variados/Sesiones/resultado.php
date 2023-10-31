<?php
session_start();

$usuario = $_SESSION["usuario"];
$contraseña = $_SESSION["contraseña"];

echo "<h1>Tu usuario es: $usuario</h1><br/>";
echo "<h1>Tu contraseña es: $contraseña</h1><br/>";

?>