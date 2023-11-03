<!DOCTYPE html>
<html lang="es">

    <head>
        <title>Titulo</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h2>Listado de cookies por nivel</h2>
        <br/>
        Nivel 0 -> <a href="verCookies0.php/">Listado de cookies</a>
        <br/>
        Nivel 0 -> Nivel 1 -> <a href="nivel1/verCookies1.php/">Listado de cookies</a>
        <br/>
        Nivel 0 -> Nivel 1 -> Nivel 2 -> <a href="nivel1/nivel2/verCookies2.php/">Listado de cookies</a>
        <br/>
        <br/>
        <h2>Creación de cookies en diferentes niveles (directorios) por un script ubicado en /</h2>
        <h3>Se permite fijar nombre y contenido de la cookie, así como el nivel</h3>
        <fieldset>
            <legend>Creación de cookie</legend>
            <form action="crearCookie.php" method="POST">
                Nombre <input type="text" name="nombreCookie"/>
                Contenido <input type="text" name="contenidoCookie"/>
                <br/>
                Nivel
                <select name="nivelCookie">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
                <input type="submit"/>
            </form>
        </fieldset>
    </body>

</html>