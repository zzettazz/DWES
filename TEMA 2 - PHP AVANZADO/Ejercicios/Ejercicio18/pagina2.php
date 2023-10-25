<form action="procesar.php" method="get">
    Selecciona una opción:<br/><br/>
    <?php
    mostrarNumeros();
    ?>
    <br/><br/>
    <input type="submit"/>
</form>

<?php

function mostrarNumeros()
{
    $arrayNumeros = ["Uno","Dos","Tres","Cuatro","Cinco","Seis","Siete","Ocho","Nueve","Diez","Once","Doce","Trece","Catorce","Quince"];
    $numero = $_GET['numero'];
    for ($i = 0; $i < $numero; $i++)
    {
        $num = $i+1;
        echo "<input type=\"radio\" name=\"segundonumero\" value=\"$num\"/>".$arrayNumeros[$i]."<br/>";
    }
    echo "<input type=\"hidden\" name=\"primernumero\" value=\"$numero\"";
}

?>