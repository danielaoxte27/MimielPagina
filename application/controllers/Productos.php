<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model("Pagina_model");
        $this->load->model("Producto_model");
    }

    public function index()
	{
        // CAPTURAR FILTROS 
        $categoria = (int)$this->input->get('categoria'); 
        $busqueda  = $this->input->get('buscar');

/*         //  inico el de productos del header
        if(!$categoria){
            $categoria = 0;
        } */

        
        $data["img"] = $this->cargar_imagenes();
        $data["secciones"] = $this->cargar_secciones();
        $data["footer"] = $this->cargar_footer();

        //  CATEGORÍAS (para el select)
        $data["categorias"] = $this->Producto_model->obtener_categorias();

        //  PRODUCTOS 
        $data["productos"] = $this->Producto_model->obtener_productos($categoria, $busqueda);

        //  PARA MANTENER SELECCIÓN EN LA VISTA
        $data["categoria_actual"] = $categoria;
        $data["busqueda"] = $busqueda;

        //  CARGAR VISTAS
        $this->load->view("secciones/header", $data);
        $this->load->view("productos/miel", $data);
        $this->load->view("secciones/footer", $data);
	}

    //  FUNCIONES

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

	private function cargar_footer(){
        return [
            "redes" => $this->Pagina_model->obtener_footer("redes"),
            "contacto" => $this->Pagina_model->obtener_footer("contacto"),
            "sucursales" => $this->Pagina_model->obtener_footer("sucursal"),
            "enlaces" => $this->Pagina_model->obtener_footer("enlace")
        ];
    }
}