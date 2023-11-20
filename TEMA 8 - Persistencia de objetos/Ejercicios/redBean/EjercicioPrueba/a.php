<?php
require __DIR__ . '/../../../lib/rb.php';

R::setup('mysql:host=localhost;port=3333;dbname=pruebas', 'root', '');

// Crear la tabla 'prueba' con la columna 'id'
R::exec("CREATE TABLE IF NOT EXISTS prueba (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, valor1 VARCHAR(255), c2 VARCHAR(255))");

$tabla = R::dispense('prueba');

$valor1 = "Nuevo valor 1";
$columna = "Columna2";

$tabla->valor1 = $valor1;
$tabla->c2 = $columna;

R::store($tabla);
?>
