<?php

generaFormulario();

function generaFormulario()
{
    echo "<form action=\"procesar.php\" method=\"get\">";
    echo "Nombre: <input type=\"text\" id=\"nombre\" name=\"nombre\"/>";
    echo "<br/>";
    echo "Contraseña: <input type=\"password\" id=\"contrasenia\" name=\"contrasenia\"/>";
    echo "<br/>";
    echo "<input type=\"submit\" value=\"Enviar\"/>";
    echo "</form>";
}

?>