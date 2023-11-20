<?php
require __DIR__ . '/../../../lib/rb.php';

R::setup('mysql:host=localhost;port=3333;dbname=pruebas', 'root', '');

$tabla = R::dispense('prueba');

$valor1 = "Nuevo valor 1";
$columna = "Columna2";

$tabla->valor1 = $valor1;
$tabla->c2 = $columna;

R::store($tabla);

?>