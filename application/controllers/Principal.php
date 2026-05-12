<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model("Pagina_model");
    }

	public function index()
	{
		$data["img"] = $this->cargar_imagenes();
		
		$data["secciones"] = $this->cargar_secciones();
		$data["mision"] = $this->cargar_mision();
		$data["beneficios"] = $this->cargar_beneficios();
		$data["elegirnos"] = $this->cargar_elegirnos();
		$data["titulos"] = $this->cargar_titulos();
		$data["tarjetas"] = $this->cargar_categorias();
		$data["footer"] = $this->cargar_footer();

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
        $secciones = $this->Pagina_model->consultar_secciones_activas();
        return $secciones ? $secciones : [];
    }

	private function cargar_mision(){
    	$mision = $this->Pagina_model->consultar_mision();
    	return $mision ? $mision : [];
	}

	private function cargar_beneficios(){
		$beneficios = $this->Pagina_model->consultar_beneficios();
		return $beneficios ? $beneficios : [];
	}

	private function cargar_elegirnos(){
		$elegirnos = $this->Pagina_model->consultar_elegirnos();
		return $elegirnos ? $elegirnos : [];
	}

	private function cargar_titulos(){
		$titulos = $this->Pagina_model->consultar_titulos();
		if($titulos){
			$t = [];
			foreach($titulos as $item){
				$t[$item->seccion] = $item;
			}
			return $t;
		}
		return [];
	}

	private function cargar_categorias(){
		$tarjetas = $this->Pagina_model->consultar_categorias();
		return $tarjetas ? $tarjetas : [];
	}

	private function cargar_footer(){
    return [
        "redes" => $this->Pagina_model->obtener_footer("redes"),
        "contacto" => $this->Pagina_model->obtener_footer("contacto"),
        "sucursales" => $this->Pagina_model->obtener_footer("sucursal"),
        "enlaces" => $this->Pagina_model->obtener_footer("enlace")
    ];
	}
}
