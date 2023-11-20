<?php
require_once('../lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] :null;

if ($nombre!=null && $nombre!='')  {
    $pais = R::dispense('pais');
    $pais->nombre = $nombre;
    R::store($pais);
    header('Location:r.php');
}
else {
    $mensaje='Nombre del país vacío';
    header('Location:../lib/msg.php?txt='.$mensaje);
}
?>