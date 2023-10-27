function sacarProvincias()
{
    var ca = document.getElementById("selectComunidades").value;

    var xhr = new XMLHttpRequest(); // creacion el objeto
    xhr.open("GET", "generar_provincias.php?comunidadautonoma=" + ca, true); //envio de la peticion al servidor
    xhr.onreadystatechange = function()
    {
        if (xhr.readyState == 4 && xhr.status == 200)
        {
            //manejo de la respuesta del servidor
            var provincias = xhr.responseText;
            document.getElementById("provincias").innerHTML = provincias;
        }
    };
    xhr.send();
}