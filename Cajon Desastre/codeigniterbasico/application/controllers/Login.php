<?php

class Login extends CI_Controller {

    public function index()
    {
        $vistasNecesarias = [
            "login/login"
        ];

        frame($this, $vistasNecesarias, null);
    }

    public function login()
    {
        $usuario = $_POST["usuario"];
        $contrasenia = $_POST["contrasenia"];

        $_SESSION["usuarioActual"] = $usuario;

        $this->load->view("_templates/head");
    }
}

?>