<?php
require_once('../lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] :null;
$existe = ( R::findOne('pais','nombre=:pais',[':pais'=> $nombre]) != null );


if ($nombre!=null && $nombre!='' && ! $existe)  {
    $aficion = R::dispense('pais');
    $aficion->nombre = $nombre;
    R::store($aficion);
    header('Location:r.php');
}
else {
    $mensaje="El país $nombre no se pudo crear";
    header('Location:../lib/msg.php?txt='.$mensaje);
}
?>