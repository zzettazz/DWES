<style>

    .container {
        text-align: center;
        margin-top: 250px;
    }

    .loader-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 10px;
    }

    .loader {
        transform: rotateZ(45deg);
        perspective: 1000px;
        border-radius: 50%;
        width: 48px;
        height: 48px;
        color: #000000;
    }

    .loader:before,
    .loader:after {
        content: '';
        display: block;
        width: inherit;
        height: inherit;
        border-radius: 50%;
        transform: rotateX(70deg);
        animation: 1s spin linear infinite;
        position: absolute;
    }

    .loader:after {
        color: #0044ff;
        transform: rotateY(70deg);
        animation-delay: .4s;
    }

    @keyframes rotate {
        0% {
            transform: rotateZ(0deg);
        }

        100% {
            transform: rotateZ(360deg);
        }
    }

    @keyframes spin {
        0%, 100% {
            box-shadow: .2em 0px 0 0px currentcolor;
        }

        12% {
            box-shadow: .2em .2em 0 0 currentcolor;
        }

        25% {
            box-shadow: 0 .2em 0 0px currentcolor;
        }

        37% {
            box-shadow: -.2em .2em 0 0 currentcolor;
        }

        50% {
            box-shadow: -.2em 0 0 0 currentcolor;
        }

        62% {
            box-shadow: -.2em -.2em 0 0 currentcolor;
        }

        75% {
            box-shadow: 0px -.2em 0 0 currentcolor;
        }

        87% {
            box-shadow: .2em -.2em 0 0 currentcolor;
        }
    }
</style>

<?php
session_start();

if (!isset($_SESSION["bd"])) {
    header("Location:login.php");
}

$contadorUsuarios = 0;
foreach ($_SESSION["bd"] as $usuario)
{
    $contadorUsuarios = $contadorUsuarios + 1;
}
if ($contadorUsuarios == 0) header("Location:login.php");

if (!isset($_SESSION["mensajes"]))
{
    $_SESSION["mensajes"] = array();
}

if (isset($_POST["textoMensaje"]) && $_POST["textoMensaje"] != "")
{
    $mensaje = $_POST["textoMensaje"];
    $emisor = $_SESSION["usuarioActual"];
    $receptor = $_POST["destinatario"];
    $fechaHoraActual = date("d/m/Y (H:i)");

    array_push($_SESSION["mensajes"],["mensaje" => $mensaje, "emisor" => $emisor, "receptor" => $receptor, "fechaHora" => $fechaHoraActual]);

    echo "<div class='container'>";
    echo "<h1>MENSAJE ENVIADO CON EXITO</h1>";
    echo "<br/>Se le redirigirá automáticamente en 3 segundos";
    echo "<div class='loader-container'>";
    echo "<span class=\"loader\"></span>";
    echo "</div>";
    echo "</div>";

    header("refresh:3;url=listaUsuarios.php");
}
else
{
    echo "<div class='container'>";
    echo "<h1>ERROR AL ENVIAR EL MENSAJE</h1>";
    echo "<br/>Se le redirigirá automáticamente en 3 segundos";
    echo "<div class='loader-container'>";
    echo "<span class=\"loader\"></span>";
    echo "</div>";
    echo "</div>";

    header("refresh:3;url=listaUsuarios.php");
}
?>