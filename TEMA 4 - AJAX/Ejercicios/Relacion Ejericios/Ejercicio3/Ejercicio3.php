<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ejercicio 3</title>
        <link rel="stylesheet" href="estilo.css" />
    </head>
    <body>
        <form action="#" method="POST">
            <div class="banderas">
                <label for="ES">
                    <img src="img/banderaEspaña.png" height="30vh"></img>
                </label>
                <input type="radio" name="idioma" onchange="traducir()" id="ES" value="ES"/>
                <label for="UK">
                    <img src="img/banderaUk.png" height="30vh"></img>
                </label>
                <input type="radio" name="idioma" onchange="traducir()" id="UK" value="EN"/>
                <label for="FR">
                    <img src="img/banderaFrancia.png" height="30vh"></img>
                </label>
                <input type="radio" name="idioma" onchange="traducir()" id="FR" value="FR"/>
            </div>

            <br/><br/>

            <div id="traduccion">
                Palabra <input type="text"/><br/>
                Traducción <input type="text"/><br/>
                <input type="submit" value="Enviar"/>
            </div>
        </form>
    </body>
    <script src="script.js"></script>
</html>