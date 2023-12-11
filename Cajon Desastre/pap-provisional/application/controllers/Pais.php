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
                prg("El país $nombre ha sido creado con éxito",'pais/c','success');
            }
            catch (Exception $e) {
               prg($e->getMessage(), 'pais/c','danger');
            }
        } else {
            prg("El nombre de país no puede ser nulo",'pais/c','danger');
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

    public function u() {
        $id = isset($_GET['id'])?$_GET['id']:null;
        $this->load->model('Pais_model');
        $datos['pais'] = $this->Pais_model->rID($id);
        frame($this,'pais/u',$datos);
    }
}
?>