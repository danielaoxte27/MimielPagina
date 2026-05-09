<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Pagina_model");
        $this->load->model("Contacto_model");
    }

    private function cargar_footer(){
        return [
            "redes"      => $this->Pagina_model->obtener_footer("redes"),
            "contacto"   => $this->Pagina_model->obtener_footer("contacto"),
            "sucursales" => $this->Pagina_model->obtener_footer("sucursal"),
            "enlaces"    => $this->Pagina_model->obtener_footer("enlace")
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

    public function index(){
        $data['img']      = $this->cargar_imagenes();
        $data['secciones'] = $this->Pagina_model->consultar_secciones_activas();
        $data['footer']   = $this->cargar_footer();
        $data['hero']       = $this->Contacto_model->obtener_hero();
        $data['canales']    = $this->Contacto_model->obtener_canales();
        $data['sucursales'] = $this->Contacto_model->obtener_sucursales();


        $this->load->view('secciones/header', $data);
        $this->load->view('contacto/contacto', $data);
        $this->load->view('secciones/footer', $data);
    }
    
    public function enviar(){

        header('Content-Type: application/json');

        ini_set('display_errors', 0);
        error_reporting(0);

        $nombre   = $this->input->post('nombre');
        $correo   = $this->input->post('correo');
        $telefono = $this->input->post('telefono');
        $asunto   = $this->input->post('asunto');
        $mensaje  = $this->input->post('mensaje');
        $tipo     = $this->input->post('tipo');

        if(!$nombre || !$correo || !$asunto || !$mensaje){
            echo json_encode(['status' => 'error', 'msg' => 'Campos obligatorios faltantes']);
            exit;
        }

        $data = [
            'nombre'   => $nombre,
            'correo'   => $correo,
            'telefono' => $telefono,
            'asunto'   => $asunto,
            'mensaje'  => $mensaje,
            'tipo'     => $tipo,
            'fecha'    => date('Y-m-d')
        ];

        try {
            $guardar = $this->Contacto_model->guardar_mensaje($data);

            if($guardar){
                echo json_encode(['status' => 'ok', 'msg' => 'Mensaje enviado correctamente']);
            } else {
                echo json_encode(['status' => 'error', 'msg' => 'Error al guardar en base de datos']);
            }

        } catch(Exception $e){
            echo json_encode(['status' => 'error', 'msg' => 'Error: ' . $e->getMessage()]);
        }

        exit;
    }
}