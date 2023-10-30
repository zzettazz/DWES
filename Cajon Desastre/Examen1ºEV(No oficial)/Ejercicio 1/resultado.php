<?php
include("miLibreria.php");

$signoSeleccionado = $_POST["signoZodiaco"];
$mesSeleccionado = $_POST["mesSeleccionado"];

echo to_h(1,"Signo escogido: $signoSeleccionado<br/>");
echo to_h(1,"Mes escogido: $mesSeleccionado<br/>");

?>