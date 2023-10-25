<h2>Selecciona tus deportes</h2>
<form action="procesar.php" method="get">
    <?php
    include("funciones.php");
    generaCheckbox();
    ?>
    <br/>
    <input type="submit" value="Enviar"/>
    <input type="reset" value="Borrar"/>
</form>