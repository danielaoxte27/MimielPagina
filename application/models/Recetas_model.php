<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recetas_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
    public function obtener_recetas(){

        $this->db->select('r.*, i.ruta AS imagen_ruta, i.nombre_archivo AS imagen_nombre, i.alt AS imagen_alt');
        $this->db->from('cat_recetas r');
        $this->db->join('cat_imagenes i', 'i.id = r.id_imagen', 'left');
        $this->db->where('r.status', 1);
        $this->db->order_by('r.registro', 'DESC');

        $query = $this->db->get();

        return $query->num_rows() > 0 ? $query->result() : [];
    }
}