<?php
include_once("../../lib/redBeanPHP/rb.php");

R::setup('mysql:host=localhost;port=3306;dbname=pruebas', 'root', '');

// Verifica si hay al menos una persona en la base de datos
$persona = R::findOne('persona');

if (!$persona) {
    // Si no hay ninguna persona, crea una nueva y guárdala
    $persona = R::dispense('persona');
    $persona->nombre = "Pepito";
    $persona->contrasenya = password_hash("HOLA QUE TAL", PASSWORD_DEFAULT);
    echo "Persona Insertada";
    R::store($persona);
} else {
    // Si ya existe al menos una persona, cárgala
    $persona = R::load('persona', 1);
    echo "Persona recuperada";
}

if (password_verify("HOLA QUE TAL", $persona->contrasenya)) {
    echo "<br/>Contraseña correcta";
} else {
    echo "<br/>Contraseña INCORRECTA";
}
?>
