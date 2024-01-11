<?php

class Login extends CI_Controller {

    public function index()
    {
        $vistasNecesarias = [
            "login/login"
        ];

        frame($this, $vistasNecesarias, null);
    }
}

?>