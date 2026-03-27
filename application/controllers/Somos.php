<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Somos extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model("Pagina_model");
        $this->load->model("Quienesomos_model");
        
    }

    public function index()
	{
		$this->load->view('welcome_message');
		// Esto es un comentario de prueba
		//Prueba 2
	}

    public function somos()
	{
		
		$data['historia'] = $this->Quienesomos_model->obtener_historia();
		$data['valores'] = $this->Quienesomos_model->obtener_valores();
		$data['info'] = $this->Quienesomos_model->obtener_info();
        

		
		$data['img'] = $this->cargar_imagenes();
		$data['secciones'] = $this->Pagina_model->consultar_secciones_activas();
		$data['footer'] = $this->cargar_footer();
        $data['politica'] = $this->Quienesomos_model->obtener_politica();
        $data['filosofia'] = $this->Quienesomos_model->obtener_filosofia();
		// Vistas
		$this->load->view('secciones/header', $data);
		$this->load->view('Quienessomos', $data);
		$this->load->view('secciones/footer', $data);
        
	}

	private function cargar_footer(){
        return [
            "redes" => $this->Pagina_model->obtener_footer("redes"),
            "contacto" => $this->Pagina_model->obtener_footer("contacto"),
            "sucursales" => $this->Pagina_model->obtener_footer("sucursal"),
            "enlaces" => $this->Pagina_model->obtener_footer("enlace")
        ];
    }

	private function cargar_imagenes(){ 
        $imagenes = $this->Pagina_model->consultar_imagenes();
        $img = [];

        if($imagenes){
            foreach($imagenes as $i){
                $img[$i->alt] = $i;
            }
        }

        return $img;
    }
}