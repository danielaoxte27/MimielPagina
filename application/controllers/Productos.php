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
public function todos(){
    $this->load->model('Producto_model');
    $data['productos'] = $this->Producto_model->obtenerTodos();
    $data['img'] = $this->cargar_imagenes();
    $data['secciones'] = $this->Pagina_model->consultar_secciones_activas();
    $data['footer'] = $this->cargar_footer();
    $data['categoria'] = 0; 

    $this->load->view('secciones/header', $data);
    $this->load->view('productos/miel', $data);
    $this->load->view('secciones/footer', $data);
}

public function categoria($id_categoria)
{
    $this->load->model('Producto_model');
    $data['productos'] = $this->Producto_model->obtenerProductosPorCategoria($id_categoria);
    $data['img'] = $this->cargar_imagenes();
    $data['secciones'] = $this->Pagina_model->consultar_secciones_activas();
    $data['footer'] = $this->cargar_footer();
    $data['categoria'] = $id_categoria; 

    $this->load->view('secciones/header', $data);
    $this->load->view('productos/miel', $data);
    $this->load->view('secciones/footer', $data);
}
}