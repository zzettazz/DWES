<?php
session_start();

if (!isset($_SESSION["mensajes"]))
{
    $_SESSION["mensajes"] = array();
}

if (isset($_POST["textoMensaje"]))
{
    $mensaje = $_POST["textoMensaje"];
    $emisor = $_SESSION["usuarioActual"];
    $receptor = $_POST["destinatario"];
    $fechaHoraActual = date("d/m/Y (H:i)");

    array_push($_SESSION["mensajes"],["mensaje" => $mensaje, "emisor" => $emisor, "receptor" => $receptor, "fechaHora" => $fechaHoraActual]);

    header("Location:listaUsuarios.php");
}
?>