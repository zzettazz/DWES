<?php
if (isset($_POST["nombreCookie"]) && isset($_POST["contenidoCookie"]) && $_POST["nombreCookie"] != "" && $_POST["contenidoCookie"] != "") {
    $nombreCookie = $_POST["nombreCookie"];
    $contenidoCookie = $_POST["contenidoCookie"];
    $nivelCookie = $_POST["nivelCookie"];

    $path = '/';
    
    // Agregar directorios a la ruta para que sea visible en niveles superiores
    for ($i = 0; $i <= $nivelCookie; $i++) {
        $path .= 'nivel' . $i . '/';
    }

    setcookie($nombreCookie, $contenidoCookie, 0, $path);
    header("Location:index.php");
} else {
    echo "<h1>No se ha podido crear la cookie</h1>";
    header("refresh:2;url=index.php");
}
?>
