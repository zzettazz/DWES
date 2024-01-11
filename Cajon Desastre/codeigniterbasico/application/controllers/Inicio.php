<?php

class Inicio extends CI_Controller {

	public function index()
	{
		/*
		$this->load->view('welcome_message');
		$datos = [
			"usuario" => "pepito"
		];
		*/
        if (session_status() == PHP_SESSION_NONE) session_start();

		$this->load->view('home/home');
	}

}
?>