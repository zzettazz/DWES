<?php

class Signup extends CI_Controller {

    public function index()
    {
        $this->load->view('_templates/head');
        $this->load->view('signup/signup');
        $this->load->view('_templates/end');
    }
}

?>