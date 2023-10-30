<?php
session_start();
$primerNumero = $_SESSION["primerNumero"];
$segundoNumero = $_SESSION["segundoNumero"];

echo "<h2>Primer número: $primerNumero<br/>";
echo "<h2>Segundo número: $segundoNumero<br/>";
if ($primerNumero > $segundoNumero) echo "<h2>El primer número es MAYOR que el segundo</h2><br/>";
if ($primerNumero < $segundoNumero) echo "<h2>El primer número es MENOR que el segundo</h2><br/>";
echo "<h2><a href=\"index.php\">Volver a introduci números</a></h2>";

?>