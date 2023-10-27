<?php
include("datos.php");
if (isset($_GET['comunidadautonoma'])) {
    $comunidadAutonoma = $_GET['comunidadautonoma'];

    $select = "<select>";
    foreach($comunidades[$comunidadAutonoma] as $valor)
    {
        $select = $select."<option value=\"$valor\">$valor</option>";
    }
    $select = $select."</select>";
    echo $select;
}
else
{
    echo "Error";
}
?>
