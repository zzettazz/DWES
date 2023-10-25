<!doctype html>
<html>

    <head>

        <style>
            span {
                font-weight: bold;
                font-size: x-large;
            }

            form {
                display: inline;
            }

            fieldset {
                width: 300px;
                display: inherit;
            }

            legend {
                font-weight: bold;
                font-size: 20px;
            }
        </style>
    </head>

    <body>
        <h3>Cajas de texto</h3>
        <form name="f1" method="get">
            <fieldset>
                <legend>Formulario 1</legend>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre"/>
                <br /> 
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" />
                <br />
                <br />
                <input type="submit" value="Enviar datos" />
            </fieldset>
        </form>
        <form name="f2" method="get">
            <fieldset>
                <legend>Formulario 2</legend>
                <label for="clave">Password</label>
                <input type="password" name="clave" />
                <br />
                <label for="ocultoVacio">Oculto vac&iacute;o</label>
                <input type="hidden" name="ocultoVacio" />
                <br />
                <label for="ocultoLleno">Oculto lleno</label>
                <input type="hidden" name="ocultoLleno" value="sorpresa" />
                <br />
                <input type="submit" value="Enviar datos" />
            </fieldset>
        </form>
        <form name="f3" method="get">
            <fieldset>
                <legend>Formulario 3</legend>
                <label for="comentarios">Comentarios</label>
                <textarea name="comentarios" rows="3" cols="40"></textarea>
                <br />
                <input type="submit" value="Enviar datos" />
            </fieldset>
        </form>
        <h3>Botones de radio</h3>
        <form name="f4" method="get">
            <fieldset>
                <legend>Formulario 4</legend>
                <label for="radioVerde">Verde</label>
                <input type="radio" name="radioVerde" id="radioVerde" />
                <label for="radioNaranja">Naranja</label>
                <input type="radio" name="radioNaranja" id="radioNaranja" />
                <label for="radioRojo">Rojo</label>
                <input type="radio" name="radioRojo" id="radioRojo" />
                <br />
                <input type="submit" value="Enviar datos" />
            </fieldset>
        </form>
        <form name="f5" method="get">
            <fieldset>
                <legend>Formulario 5</legend>
                <label for="radioGenero">Mujer</label>
                <input type="radio" name="genero" id="genero" value="mujer"/>
                <label for="radioGenero">Hombre</label>
                <input type="radio" name="genero" id="genero" value="hombre"/>
                <label for="radioGenero">Otro</label>
                <input type="radio" name="genero" id="genero" value="otro"/>
                <br />
                <input type="submit" value="Enviar datos" />
            </fieldset>
        </form>
        <form name="f6" method="get">
            <fieldset>
                <legend>Formulario 6</legend>
                <label for="radioCabello">Moreno</label>
                <input type="radio" name="cabello" id="cabello" value="moreno" />
                <label for="radioCabello">Rubio</label>
                <input type="radio" name="cabello" id="cabello" value="rubio" />
                <label for="radioCabello">Pelirrojo</label>
                <input type="radio" name="cabello" id="cabello" value="pelirrojo" />
                <br />
                <input type="submit" value="Enviar datos" />
            </fieldset>
        </form>
        <form name="f7" method="get">
            <fieldset>
                <legend>Formulario 7</legend>
                <label>Moreno</label>
                <input type="radio" name="cabello" value="moreno"/>
                <label>Rubio</label>
                <input type="radio" name="cabello" value="rubio"/>
                <label>Pelirrojo</label>
                <input type="radio" name="cabello" value="pelirrojo"/>
                <br />
                <input type="submit" value="Enviar datos" />
            </fieldset>
        </form>
        <br />
        <h3>Cajas de chequeo</h3>
        <form name="f8" method="get">
            <fieldset>
                <legend>Formulario 8</legend>
                <label for="checkAficionL">Lectura</label>
                <input type="checkbox" name="checkAficion" id="checkAficionL" value="lectura"/>
                <label for="checkAficionD">Deporte</label>
                <input type="checkbox" name="checkAficion" id="checkAficionD" value="deporte"/>
                <label for="checkAficionV">Viajes</label>
                <input type="checkbox" name="checkAficion" id="checkAficionV" value="viajes"/>
                <br />
                <input type="submit" value="Enviar datos" />
            </fieldset>
        </form>
        <form name="f9" method="get">
            <fieldset>
                <legend>Formulario 9</legend> 
                <label for="checkLectura">Lectura</label>
                <input type="checkbox" name="checkLectura" id="checkLectura" />
                <label for="checkDeporte">Deporte</label>
                <input type="checkbox" name="checkDeporte" id="checkDeporte" />
                <label for="checkViaje">Viajes</label>
                <input type="checkbox" name="checkViajes" id="checkViaje" />
                <br /> 
                <input type="submit" value="Enviar datos" />
            </fieldset>
        </form>
        <form name="f10" method="get">
            <fieldset>
                <legend>Formulario 10</legend> 
                <label for="checkLectura10">Lectura</label>
                <input type="checkbox" name="checkLectura" id="checkLectura10" value="lectura" />
                <label for="checkDeporte10">Deporte</label>
                <input type="checkbox" name="checkDeporte" id="checkDeporte10" value="deporte" />
                <label for="checkViajes10">Viajes</label>
                <input type="checkbox" name="checkViajes" id="checkViajes10" value="viajes" />
                <br /> 
                <input type="submit" value="Enviar datos" />
            </fieldset>
        </form>
        <form name="f11" method="get">
            <fieldset>
                <legend>Formulario 11</legend> 
                <label>Lectura</label>
                <input type="checkbox" name="checkAficiones[]" value="lectura" />
                <label>Deporte</label>
                <input type="checkbox" name="checkAficiones[]" value="deporte" />
                <label>Viajes</label>
                <input type="checkbox" name="checkAficiones[]" value="viajes" />
                <br /> 
                <input type="submit" value="Enviar datos" />
            </fieldset>
        </form>
    </body>

</html>