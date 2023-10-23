<?php
session_start();
$usuarioActual = $_SESSION["usuarioActual"];

// Obtén el destinatario del parámetro de la URL
if (isset($_GET['destinatario'])) {
    $destinatario = $_GET['destinatario'];
}
?>

<form action="#" method="POST">
    <h1>Escribir un mensaje</h1><br/><br/>
    De: <input type="text" value=<?= $usuarioActual ?> disabled/><br/><br/>
    Para: <input type="text" value="<?= isset($destinatario) ? $destinatario : '' ?>" disabled/><br/><br/>
    Escribe el contenido del mensaje<br/>
    <textarea style="height:150px;width:300px;"></textarea><br/><br/>
    <input type="submit"/>
</form>
