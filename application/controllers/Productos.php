<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model("Pagina_model");
    }

    public function index()
	{
		$this->load->view('welcome_message');
		// Esto es un comentario de prueba
		//Prueba 2
	}
}