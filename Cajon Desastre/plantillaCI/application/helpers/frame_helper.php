<?php
function frame($controlador, $rutaVista, $datos = [])
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['usuario'])) {
        $datos['_header']['usuario'] = $_SESSION['usuario'];
    }
    $controlador->load->view('_templates/head', $datos);
    $controlador->load->view('_templates/header', $datos);
    $controlador->load->view('_templates/nav', $datos);
    $controlador->load->view($rutaVista, $datos);
    $controlador->load->view('_templates/footer', $datos);
    $controlador->load->view('_templates/end');
}

function prg($mensaje = 'Pulsa el botón para volver', $link = '', $severidad = 'success')
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['_mensaje'] = $mensaje;
    $_SESSION['_link'] = $link;
    $_SESSION['_severidad'] = $severidad;

    header('Location:' . base_url() . 'info');
}

function areRolesOk($rolesExigidos)
{
    $rolActual = 'anonymous';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['persona'])) {
        if ($_SESSION['persona']->admin) {
            $rolActual = 'admin';
        } else {
            $rolActual = 'auth';
        }
    }
    return in_array($rolActual, $rolesExigidos);
}
function isRolOk($rolExigido)
{
    $rolActual = 'anonymous';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['persona'])) {
        if ($_SESSION['persona']->admin) {
            $rolActual = 'admin';
        } else {
            $rolActual = 'auth';
        }
    }
    return $rolActual == $rolExigido;
}
?>