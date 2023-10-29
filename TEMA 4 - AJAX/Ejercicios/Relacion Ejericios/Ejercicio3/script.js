function traducir()
{
    var idioma = document.querySelector('input[name="idioma"]:checked').value;

    var ajax = new XMLHttpRequest(); // creacion el objeto
    ajax.open("GET", "cambiar_idioma.php?idioma=" + idioma, true); //envio de la peticion al servidor
    ajax.onreadystatechange = function()
    {
        if (ajax.readyState == 4 && ajax.status == 200)
        {
            //manejo de la respuesta del servidor
            var idiomaCambiado = ajax.responseText;
            document.getElementById("traduccion").innerHTML = idiomaCambiado;
        }
    };
    ajax.send();
}