<?php
class Usuario extends CI_Controller
{
    public function c()
    {
        if (!isRolOK('anonymous')) {
            show_404();
        }
        frame($this, 'usuario/c');
    }
    public function cPost()
    {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $passwd = isset($_POST['passwd']) ? $_POST['passwd'] : null;
        if ($nombre != null) {
            $this->load->model('Usuario_model');
            $this->Usuario_model->c($nombre, $passwd);
            header('Location:' . base_url(). 'usuario/r' );
        } else {
            //TODO Mandar mensaje de error
        }
    }

    public function r()
    {
        // MODELO
        $this->load->model('Usuario_model');
        $usuarios = $this->Usuario_model->r();
        $datos['usuarios'] = $usuarios;

        // VISTA
        frame($this, 'usuario/r', $datos);
    }

    public function login()
    {
        frame($this, 'usuario/login');
    }

    public function loginPost()
    {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $passwd = isset($_POST['passwd']) ? $_POST['passwd'] : null;
        $this->load->model('Usuario_model');
        try {
            $usuario = $this->Usuario_model->comprobarLogin($nombre, $passwd);
            if (session_status () == PHP_SESSION_NONE) {session_start ();}
            $_SESSION['usuario'] = $usuario;
            header('Location:'.base_url());
        } catch (Exception $e) {
            prg($e->getMessage(),'','danger');
        }
    }

    public function logout() {
        if (session_status () == PHP_SESSION_NONE) {session_start ();}
        session_destroy();
        header('Location:'.base_url());
    }
}
?>