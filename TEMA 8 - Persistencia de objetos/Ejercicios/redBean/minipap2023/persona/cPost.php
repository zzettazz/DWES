<?php
require_once('../lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$fnac = isset($_POST['fnac']) ? $_POST['fnac'] : null;
$idPaisNace = isset($_POST['idPaisNace']) ? $_POST['idPaisNace'] : null;
$idPaisVive = isset($_POST['idPaisVive']) ? $_POST['idPaisVive'] : null;
$idsAficion = isset($_POST['idsAficion']) ? $_POST['idsAficion'] : [];


if ($nombre != null && $nombre != '') {
    $persona = R::dispense('persona');

    $persona->nombre = $nombre;
    $persona->fnac = $fnac;

    $paisNace = R::load('pais', $idPaisNace);
    $persona->nace = $paisNace;

    $paisVive = R::load('pais', $idPaisVive);
    $persona->vive = $paisVive;

    $persona["gusta"];
    $persona["odia"];

    R::store($persona);

    foreach ($idsAficion as $idAficion) {
        $aficion = R::load('aficion', $idAficion);
        $persona->sharedAficionList[] = $aficion;
    }
    R::store($persona);
    header('Location:r.php');
} else {
    $mensaje = "La persona $nombre no se pudo crear";
    header('Location:../lib/msg.php?txt=' . $mensaje);
}
?>