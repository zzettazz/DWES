<?php

if (isset($_GET["usuario"]) && isset($_GET["recordar"]))
{
    setcookie("ultimousuario",$_GET["usuario"],(time() + 3600));
}


header("Location:listaUsuarios.php")
?>