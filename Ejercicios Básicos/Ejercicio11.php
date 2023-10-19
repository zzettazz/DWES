<?php

//$cadena = "Nombre:Apellido:Telefono//OtroNombre:OtroApellido:OtroTelefono";
$cadena = "David:Gómez:600000000//Juan:Antonio:656565656565//Pedro:Rodriguez:67678787878//Manuel:Perez:0550695069";

$partes = explode("//",$cadena);

foreach ($partes as $parte)
{
    $persona = explode(":",$parte);
    echo("\n-----------------\nNombre: ".$persona[0]."\nApellido: ".$persona[1]."\nTeléfono: ".$persona[2]);
}

?>