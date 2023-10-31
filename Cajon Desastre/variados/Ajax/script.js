function saludarUsuario()
{
    var usuario = document.getElementById("usuario").value;
    var contrasenya = document.getElementById("contrasenya").value;

    var ajax = new XMLHttpRequest(); // creacion el objeto
    ajax.open("GET", "gestionar.php?usuario="+usuario+"&"+"contrasenya="+contrasenya, true); //envio de la peticion al servidor
    ajax.onreadystatechange = function()
    {
        if (ajax.readyState == 4 && ajax.status == 200)
        {
            //manejo de la respuesta del servidor
            var respuesta = ajax.responseText;
            document.getElementById("casillaSaludo").value = respuesta;
        }
    };
    ajax.send();
}