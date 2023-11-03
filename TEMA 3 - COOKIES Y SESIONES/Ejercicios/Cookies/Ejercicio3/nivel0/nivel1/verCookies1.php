<!DOCTYPE html>
<html lang="es">

    <head>
        <title>Titulo</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h2>Listado de cookies de nivel 1</h2>
        <br/>
        <table border="1">
            <tr>
                <td><h4>Nombre cookie</h4></td>
                <td><h4>Contenido cookie</h4></td>
            </tr>
            <?php foreach ($_COOKIE as $nombreCookie => $contenidoCookie) : ?>
                <tr>
                    <td><?= $nombreCookie ?></td>
                    <td><?= $contenidoCookie ?></td>
                </tr>
            <?php endforeach;?> 
        </table>
    </body>

</html>