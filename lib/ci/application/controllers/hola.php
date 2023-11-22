<?php

class hola extends CI_Controller
{
    public function index()
    {
        $datos["nombre"] = "index";
        $this->load->view("hola.php", $datos);
    }
    
    public function saludar()
    {
        $datos["nombre"] = "el saludador";
        $this->load->view("hola.php", $datos);
    }
}

?>