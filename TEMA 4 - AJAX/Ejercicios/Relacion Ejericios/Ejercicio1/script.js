function generarSaludo()
{
    var nombre = document.getElementById("nombreInput").value;
    if (nombre.trim() === "")
    {
        alert("Por favor, introduce un nombre.");
        return;
    }

    var xhr = new XMLHttpRequest(); // creacion el objeto
    xhr.open("GET", "generar_saludo.php?nombre=" + nombre, true); //envio de la peticion al servidor
    xhr.onreadystatechange = function()
    {
        if (xhr.readyState == 4 && xhr.status == 200)
        {
            //manejo de la respuesta del servidor
            var saludo = xhr.responseText;
            document.getElementById("saludoContainer").innerHTML = saludo + saludoContainer.innerHTML;
        }
    };
    xhr.send();
}