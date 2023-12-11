<?php
class Persona extends CI_Controller {
    public function c() {
        frame($this,'persona/c');
    }
    public function cPost() {
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        if ($nombre!=null) {
            $this->load->model('Persona_model');
            $this->Persona_model->c($nombre);
            header('Location:'.base_url().'persona/r');
        }
        else {
            //TODO Mandar mensaje de error
        }
    }

    public function r() {
        // MODELO
        $this->load->model('Persona_model');
        $personas = $this->Persona_model->r();
        $datos['personas'] = $personas;

        // VISTA
        frame($this,'persona/r',$datos);
    }
}
?>