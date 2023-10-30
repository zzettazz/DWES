<?php

    $peliculas = ["Star Wars", "Titanic", "Crepúsculo", "Los juegos del hambre"];
    $canciones = ["Let it be", "Mediterráneo", "Close to the edge", "Bohemian rhapsody"];

    if (isset($_GET['tipo'])) {
        $tipo = $_GET['tipo'];

        if ($tipo == "peli")
        {
            $numeroRandom = rand(0,(count($peliculas)-1));
            echo $peliculas[$numeroRandom]." [$numeroRandom]";
        }
        elseif ($tipo == "cancion")
        {
            $numeroRandom = rand(0,(count($canciones)-1));
            echo $canciones[$numeroRandom]." [$numeroRandom]";
        }
        else
        {
            echo "ERROR";
        }
    }
    else
    {
        echo "ERROR NO EXISTE";
    }

?>
