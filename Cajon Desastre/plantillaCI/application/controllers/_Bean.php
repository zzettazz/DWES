<?php
class _Bean extends CI_Controller
{
    public function index() {
        $this->r();
    }
    public function c()
    {
        frame($this, '_bean/c');
    }
    public function cPost()
    {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        if ($nombre != null) {
            $this->load->model('_Bean_model');
            try {
                $this->_Bean_model->c($nombre);
                header('Location:'.base_url().'_bean/r');
            } catch (Exception $e) {
                prg($e->getMessage(), '_bean/c', 'danger');
            }
        } else {
            prg("El nombre de bean no puede ser nulo", '_bean/c', 'danger');
        }
    }

    public function r()
    {
        // MODELO
        $this->load->model('_bean_model');
        $_beanes = $this->_bean_model->r();
        $datos['_beanes'] = $_beanes;

        // VISTA
        frame($this, '_bean/r', $datos);
    }

    public function u()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('_bean_model');
        $datos['_bean'] = $this->_bean_model->rID($id);
        frame($this, '_bean/u', $datos);
    }

    public function uPost()
    {
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $this->load->model('_bean_model');
        try {
            $this->_bean_model->u($id, $nombre);
            header('Location:' . base_url() . '_bean/r');
        } catch (Exception $e) {
            prg($e->getMessage(),('_bean/u?id='.$id), 'danger');
        }
    }

    public function dPost() {
        $id = isset($_POST['id'])?$_POST['id']:null;
        $this->load->model('_bean_model');
        $this->_bean_model->d($id);
        header('Location:'.base_url().'_bean/r');
    }

}
?>