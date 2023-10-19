<?php
session_start();
if (isset($_SESSION['nv']))
{
    $veces = $_SESSION['nv'] + 1;
    $_SESSION['nv'] = $veces;
}
else
{
    $veces = 1;
    $_SESSION['nv'] = $veces;
}
?>

<h1>Contador de visitas</h1>
<p>
    Has visitado nuestro sitio <b><?= $veces?></b>a
</p>
