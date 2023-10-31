<?php
include("utilSQL.php");

$conexion = conectarBBD();

$query = <<<SQL
    INSERT INTO alumnos
    VALUES ("pedro","juan","una nota")
SQL;

try
{
    $conexion->exec($query);
    echo "INSERTADO";
}
catch (Exception $e)
{
    echo "ERROR DE INSERCIÓN";
}

?>