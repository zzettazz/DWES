<?php
class Home extends CI_Controller {

    public function index() {
        $this->home();
    }

    public function home() {
        frame($this,'home/home');
    }

    public function init() {
        $this->load->model('Usuario_model');
        $this->Usuario_model->init();
        $this->index();
        
    }
}
?>