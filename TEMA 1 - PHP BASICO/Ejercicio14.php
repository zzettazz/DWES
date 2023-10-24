<?php

// VARIABLES

$bd = array(
    "departamento" => array (
        "10" => array(
            "nombre" => "Ventas",
            "desc" => "Dpto. de ventas"
        ),
        "20" => array(
            "nombre" => "FrontEnd",
            "desc" => "Desarrollo ForntEnd"
        ),
        "30" => array(
            "nombre" => "BackEnd",
            "desc" => "Desarrollo BackEnd"
        ),
        "40" => array(
            "nombre" => "Publicidad",
            "desc" => "Dpto. de publicidad"
        )
    ),
    "empleado" => array (
        "100" => array(
            "nombre" => "Pepe",
            "apellido" => "Sánchez",
            "idDpto" => "10"
        ),
        "200" => array(
            "nombre" => "Ana",
            "apellido" => "García",
            "idDpto" => "10"
        ),
        "300" => array(
            "nombre" => "Juan",
            "apellido" => "Muñoz",
            "idDpto" => "20"
        ),
        "400" => array(
            "nombre" => "Luis",
            "apellido" => "Corbajo",
            "idDpto" => "40"
        ),
        "500" => array(
            "nombre" => "Álvaro",
            "apellido" => "Romero",
            "idDpto" => "30"
        )
    )
);

$salir = "salir";
$repuesta = "";
$opciones = ["1","2"];

// BUCLE PRINCIPAL

do
{
    echo "\nIntroduzca una opción o escriba \"$salir\" para salir.\n";
    echo "1) Mostrar todos los objetos\n";
    echo "2) Recuperar un objeto por ID\n";
    $respuesta = readline("Su opción: ");
    if ($respuesta !== $salir) gestionarRespuesta($respuesta,$bd);
}
while ($respuesta !== $salir);

//FUNCIÓN PRINCIPAL

function gestionarRespuesta($opcionRespondida,$bd)
{
    if ($opcionRespondida == "1")
    {
        // MOSTRAR DEPARTAMENTOS

        echo "\n--------------------------------------";
        echo "\nDEPARTAMENTOS";
        foreach ($bd["departamento"] as $id => $departamento)
        {
            echo "\n--------------------------------------";
            echo "\nID: $id"; // Utiliza $id para obtener el ID del departamento
            echo "\nNombre: ".$departamento["nombre"];
            echo "\nDescripción: ".$departamento["desc"];
        }
        echo "\n--------------------------------------";

        // MOSTRAR EMPLEADOS
        echo "\n***************************************";

        echo "\n--------------------------------------";
        echo "\nEMPLEADOS";
        foreach ($bd["empleado"] as $id => $empleado)
        {
            echo "\n--------------------------------------";
            echo "\nID: $id"; // Utiliza $id para obtener el ID del departamento
            echo "\nNombre: ".$empleado["nombre"];
            echo "\nApellido: ".$empleado["apellido"];
            echo "\nId Dpto: ".$empleado["idDpto"];
        }
        echo "\n--------------------------------------";

    }
    elseif ($opcionRespondida == "2")
    {
        $encontrado = false;
        $idIntroducido = readline("\nIntroduzca ID para buscar: ");

        $encontrado = buscarDepartamento($idIntroducido,$bd);

        if ($encontrado == false)
        {
            $encontrado = buscarEmpleado($idIntroducido,$bd);
        }


        if ($encontrado == false) echo("\nNo se ha encontrado ningún objeto con ID: $idIntroducido\n");
        else echo "\n--------------------------------------\n";
    }
    else echo "\nOpción no reconocida";
}

// FUNCIONES SECUNDARIAS

function buscarDepartamento($idIntroducido,$bd)
{
    $encontrado = false;
    
    foreach ($bd["departamento"] as $id => $departamento)
    {
        if ($id == $idIntroducido)
        {
            echo "\n--------------------------------------";
            echo "\nSe ha encontrado un objeto con ID: $idIntroducido";
            echo "\n--------------------------------------";
            echo "\nTIPO: DEPARTAMENTO";
            echo "\nID: $id"; // Utiliza $id para obtener el ID del departamento
            echo "\nNombre: ".$departamento["nombre"];
            echo "\nDescripción: ".$departamento["desc"];
            $encontrado = true;
            break;
        }
    }

    return $encontrado;
}

function buscarEmpleado($idIntroducido,$bd)
{
    $encontrado = false;
    
    foreach ($bd["empleado"] as $id => $empleado)
    {
        if ($id == $idIntroducido)
        {
            $nombreDepartamento = obtenerNombreDepartamento($empleado["idDpto"],$bd);
            echo "\n--------------------------------------";
            echo "\nSe ha encontrado un objeto con ID: $idIntroducido";
            echo "\n--------------------------------------";
            echo "\nTIPO: EMPLEADO";
            echo "\nID: $id"; // Utiliza $id para obtener el ID del departamento
            echo "\nNombre: ".$empleado["nombre"];
            echo "\nApellido: ".$empleado["apellido"];
            echo "\nId Dpto: ".$empleado["idDpto"]." ($nombreDepartamento)";
            $encontrado = true;
            break;
        }
    }

    return $encontrado;
}

function obtenerNombreDepartamento($idDepartamento,$bd)
{
    $nombreDepartamento = "";
    
    foreach ($bd["departamento"] as $id => $departamento)
    {
        if ($id == $idDepartamento)
        {
            $nombreDepartamento = $departamento["nombre"];
            break;
        }
    }

    return $nombreDepartamento;
}

?>