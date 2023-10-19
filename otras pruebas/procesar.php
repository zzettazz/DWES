<?php

require_once "claves.php";

$nombre = "";
$apellido = "";
$notas = "";

if (esValido())
{
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $notas = $_GET['notas'];
    ejecutarInsert($nombre,$apellido,$notas);
}
else echo "<br/><h3 style=\"color:red;\">Error: Los campos \"Nombre\", \"Apellido\" y \"Notas\" son obligatorios</h3>";


function ejecutarInsert($nombre,$apellido,$notas)
{
    $contrasena = CONTRASENA;
    $conexion = new mysqli("localhost", "root", $contrasena, "pruebas");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    else echo "<br/>Conexión Exitosa";
    
    $consulta = "INSERT INTO alumnos (nombre, apellido, notas) VALUES (?,?,?)";
    $valor1 = $nombre;
    $valor2 = $apellido;
    $valor3 = $notas;

    // Preparar la consulta
    if ($stmt = $conexion->prepare($consulta)) {
        // Vincular parámetros
        $stmt->bind_param("sss", $valor1, $valor2, $valor3);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "<br/>Se ha completado la operación";
        } else {
            echo "<br/>Error de inserción: " . $stmt->error;
        }

        // Cerrar la consulta preparada
        $stmt->close();
    } else {
        echo "<br/>Error de preparación de la consulta: " . $conexion->error;
    }

    // Cierra la conexión cuando hayas terminado
    $conexion->close();
}

function esValido()
{
    if (isset($_GET['nombre']) && ($_GET['nombre'] != "") 
        && isset($_GET['apellido']) && ($_GET['apellido'] != "")
        && isset($_GET['notas']) && ($_GET['notas'] != ""))
    {
        return true;
    }
    else return false;
}

?>

<br/>
<button onclick="window.location.href='prueba.php'">Volver</button>