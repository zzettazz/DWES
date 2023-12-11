<?php
class Home extends CI_Controller {

    public function index() {
        $this->home();
    }

    public function home() {
        frame($this,'home/home');
    }
}
?>