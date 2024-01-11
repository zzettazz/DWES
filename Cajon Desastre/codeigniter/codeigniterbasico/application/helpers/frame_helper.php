<?php

function frame($controlador, $rutaVista, $datos = []) {

	if (session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

	$controlador->load->view ( '_templates/head' , $datos);

    foreach ($rutaVista as $vista)
    {
        $controlador->load->view($vista);
    }

    $controlador->load->view ( '_templates/end' , $datos);
    
}

?>