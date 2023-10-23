<?php
session_start();

if (isset($_POST["textoMensaje"]))
{
    $mensaje = $_POST["textoMensaje"];
    $emisor = $_SESSION["usuarioActual"];
    $receptor = $_POST["destinatario"];

    array_push($_SESSION["bd"],["mensaje"=>$mensaje,"emisor"=>$emisor,"receptor"=>$receptor]);
}
?>