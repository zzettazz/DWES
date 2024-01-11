<?php
class Persona extends CI_Controller
{
    public function c()
    {
        frame($this, 'persona/c');
    }
    
    public function cPost()
    {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $passwd = isset($_POST['passwd']) ? $_POST['passwd'] : null;
        if ($nombre != null) {
            $this->load->model('Persona_model');
            $this->Persona_model->c($nombre, $passwd);
            header('Location:' . base_url() );
        } else {
            //TODO Mandar mensaje de error
        }
    }

    public function r()
    {
        // MODELO
        $this->load->model('Persona_model');
        $personas = $this->Persona_model->r();
        $datos['personas'] = $personas;

        // VISTA
        frame($this, 'persona/r', $datos);
    }

    public function login()
    {
        frame($this, 'persona/login');
    }

    public function loginPost()
    {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $passwd = isset($_POST['passwd']) ? $_POST['passwd'] : null;
        $this->load->model('Persona_model');
        try {
            $persona = $this->Persona_model->comprobarLogin($nombre, $passwd);
            if (session_status () == PHP_SESSION_NONE) {session_start ();}
            $_SESSION['persona'] = $persona;
            header('Location:'.base_url());
        } catch (Exception $e) {
            prg($e->getMessage(),'','danger');
        }
    }
}
?>