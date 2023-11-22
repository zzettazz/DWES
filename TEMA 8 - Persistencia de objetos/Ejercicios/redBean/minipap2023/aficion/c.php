<?php
require_once '../lib/rb.php';
R::setup( 'mysql:host=localhost;dbname=test','root', '' );
?>

<h1>Nueva afición</h1>
<form action="cPost.php" method="post">
    Nombre
    <input type="text" name="nombre"/>
    <br/>
    <input type="submit"/>
</form>