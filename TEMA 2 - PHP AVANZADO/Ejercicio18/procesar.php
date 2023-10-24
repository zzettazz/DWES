<h3>Resultado final:</h3>

<?php
$primerNumero = $_GET['primernumero'];
$segundoNumero = $_GET['segundonumero'];
$suma = $segundoNumero + 2;

echo "<h4>$segundoNumero + 2 = $suma";
?>

<h3>Resultado Mejorado:</h3>

<?php
$primerNumero = $_GET['primernumero'];
$segundoNumero = $_GET['segundonumero'];
echo "<h4>$primerNumero + $segundoNumero = ".($primerNumero + $segundoNumero)."</h4>";
?>