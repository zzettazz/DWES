<?php
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    $saludos = ["Hola", "¿Qué tal estás", "¡¡Qué pasa"];
    $etiquetas = ["h1", "h2", "h3"];

    $saludo = $saludos[array_rand($saludos)] . " " . $nombre . "!!";
    $etiqueta = $etiquetas[array_rand($etiquetas)];

    echo "<$etiqueta>$saludo</$etiqueta>";
}
else
{
    echo "Error: Nombre no proporcionado.";
}
?>
