<?php
class Pais extends CI_Controller
{
    public function c()
    {
        frame($this, 'pais/c');
    }
    public function cPost()
    {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        if ($nombre != null) {
            $this->load->model('Pais_model');
            try {
                $this->Pais_model->c($nombre);
                prg("El país $nombre ha sido creado con éxito", 'pais/c', 'success');
            } catch (Exception $e) {
                prg($e->getMessage(), 'pais/c', 'danger');
            }
        } else {
            prg("El nombre de país no puede ser nulo", 'pais/c', 'danger');
        }
    }

    public function r()
    {
        // MODELO
        $this->load->model('Pais_model');
        $paises = $this->Pais_model->r();
        $datos['paises'] = $paises;

        // VISTA
        frame($this, 'pais/r', $datos);
    }

    public function u()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->load->model('Pais_model');
        $datos['pais'] = $this->Pais_model->rID($id);
        frame($this, 'pais/u', $datos);
    }

    public function uPost()
    {
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $this->load->model('Pais_model');
        try {
            $this->Pais_model->u($id, $nombre);
            header('Location:' . base_url() . 'pais/r');
        } catch (Exception $e) {
            prg($e->getMessage(),('pais/u?id='.$id), 'danger');
        }
    }

    public function dPost() {
        $id = isset($_POST['id'])?$_POST['id']:null;
        $this->load->model('Pais_model');
        $this->Pais_model->d($id);
        header('Location:'.base_url().'pais/r');
    }

}
?>