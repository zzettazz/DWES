<style>
    .cabeza th{
        padding:10px;
    }
</style>

<?php
session_start();
$usuarioActual = $_SESSION["usuarioActual"];

if (isset($_POST['escritor'])) {
    $escritor = $_POST['escritor'];
}
?>

Usuario actual: <?= $usuarioActual ?><br/>
<br/>
<h2>Lista de mensajes de <?= isset($escritor) ? $escritor : '' ?></h2>
<br/>
<table border="1">
    <tr class="cabeza">
        <th>FECHA</th>
        <th>MENSAJE</th>
    </tr>
</table>