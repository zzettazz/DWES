<?php
echo "Nivel 0 --> <a href=\"nivel0/nivel0.php\">Listado de cookies</a><br/>";
echo "Nivel 0 --> Nivel 1 --> <a href=\"nivel0/nivel1/nivel1.php\">Listado de cookies</a><br/>";
echo "Nivel 0 --> Nivel 1 --> Nivel 2 <a href=\"nivel0/nivel1/nivel2/nivel2.php\">Listado de cookies</a><br/>";

echo "<h2>Creación de cookies en diferentes niveles (directorios) por un script ubicado en /</h2><br/>";
echo "<h2>Se permite fijacr nombre y contenido de la cookie, así como el nivel</h2>";

?>

<fieldset>
    <legend>Creación de cookie</legend>
    <form action="crearCookie.php" method="POST">
        Nombre: <input type="text" name="nombreCookie"/><br/>
        Contenido <input type="text" name="contenidoCookie"/><br/>
        Nivel: 
        <select name="nivel">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="1">2</option>
        </select><br/>
        <input type="submit"/>
    </form>
</fieldset>