function cambiarPeli()
{
    var ajax = new XMLHttpRequest(); // creacion el objeto
    ajax.open("GET", "generar_aleatorio.php?tipo="+"peli", true); //envio de la peticion al servidor
    ajax.onreadystatechange = function()
    {
        if (ajax.readyState == 4 && ajax.status == 200)
        {
            //manejo de la respuesta del servidor
            var peliRandom = ajax.responseText;
            document.getElementById("peliFav").value = peliRandom;
        }
    };
    ajax.send();
}

function cambiarCancion()
{
    var ajax = new XMLHttpRequest(); // creacion el objeto
    ajax.open("GET", "generar_aleatorio.php?tipo="+"cancion", true); //envio de la peticion al servidor
    ajax.onreadystatechange = function()
    {
        if (ajax.readyState == 4 && ajax.status == 200)
        {
            //manejo de la respuesta del servidor
            var cancionRandom = ajax.responseText;
            document.getElementById("cancionFav").value = cancionRandom;
        }
    };
    ajax.send();
}