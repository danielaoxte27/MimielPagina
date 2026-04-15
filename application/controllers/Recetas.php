<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recetas extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model("Pagina_model");
        $this->load->model("Recetas_model");
    }

     public function index(){
        $data = [
            'img'       => $this->cargar_imagenes(),
            'secciones' => $this->cargar_secciones(),
            'footer'    => $this->cargar_footer(),
            'articulos' => $this->Recetas_model->obtener_recetas()
        ];

        $this->load->view('secciones/header', $data);
        $this->load->view('recetas/recetas', $data);
        $this->load->view('secciones/footer', $data);
     }
     

    public function recetasdetalle($id = null){
        if(!$id || !is_numeric($id)){
            redirect('recetas');
        }

        $articulo = $this->Recetas_model->obtener_recetas_por_id((int)$id);

        if(!$articulo){
            redirect('recetas');
        }

        $data = [
            'img'      => $this->cargar_imagenes(),
            'secciones'=> $this->cargar_secciones(),
            'footer'   => $this->cargar_footer(),
            'articulo' => $articulo
        ];

        $this->load->view('secciones/header', $data);
        $this->load->view('recetas/recetasdetalle', $data);
        $this->load->view('secciones/footer', $data);
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

    Public function recetasformulario(){

    $data = [
        'img'        => $this->cargar_imagenes(),
        'secciones'  => $this->cargar_secciones(),
        'footer'     => $this->cargar_footer(),

        'hero' => (object)[
            'titulo' => 'Comparte tu receta',
            'subtitulo' => 'Envíanos tu receta favorita'
        ],
    ];

    $this->load->view('secciones/header', $data);
    $this->load->view('recetas/recetasformulario', $data);
    $this->load->view('secciones/footer', $data);
    }

    private function cargar_secciones(){
        $secciones = $this->Pagina_model->consultar_secciones_activas();
        return $secciones ? $secciones : [];
    }

    private function cargar_footer(){
        return [
            'redes'      => $this->Pagina_model->obtener_footer('redes'),
            'contacto'   => $this->Pagina_model->obtener_footer('contacto'),
            'sucursales' => $this->Pagina_model->obtener_footer('sucursal'),
            'enlaces'    => $this->Pagina_model->obtener_footer('enlace')
        ];
    }
}
?>