<?php
require_once('../lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] :null;
$existe = ( R::findOne('aficion','nombre=:aficion',[':aficion'=> $nombre]) != null );


if ($nombre!=null && $nombre!='' && ! $existe)  {
    $aficion = R::dispense('aficion');
    $aficion->nombre = $nombre;
    R::store($aficion);
    header('Location:r.php');
}
else {
    $mensaje="La afición $nombre no se pudo crear";
    header('Location:../lib/msg.php?txt='.$mensaje);
}
?>