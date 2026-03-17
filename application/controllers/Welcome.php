<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model("Pagina_model");
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		// Esto es un comentario de prueba
		//Prueba 2
	}
	public function Mensaje()
	{
		$this->load->view('welcome_message');
	}

	public function principal(){
		$data["img"] = $this->cargar_imagenes();
		$data["secciones"] = $this->cargar_secciones();
		$data["mision"] = $this->cargar_mision();

		$this->load->view("secciones/header",$data);
		$this->load->view("principal",$data);
		$this->load->view("secciones/footer",$data);
	}

	public function login(){
		$data["img"] = $this->cargar_imagenes();	
		$this->load->view("auth/login",$data);
	}
	public function registro(){
		$data["img"] = $this->cargar_imagenes();
		$this->load->view("auth/registro",$data);
	}


	private function cargar_imagenes(){
		//$this->load->model("Pagina_model");
		$imagenes = $this->Pagina_model->consultar_imagenes();
	
		$img = [];
	
		if($imagenes){
			foreach($imagenes as $i){
				$img[$i->alt] = $i;
			}
		}
	
		return $img;
	}

	private function cargar_secciones(){
		// $this->load->model("Pagina_model");
        $secciones = $this->Pagina_model->consultar_secciones_activas();
        return $secciones ? $secciones : [];
    }

	private function cargar_mision(){
		// $this->load->model("Pagina_model");
    	$mision = $this->Pagina_model->consultar_mision();
    	return $mision ? $mision : [];
	}
}
