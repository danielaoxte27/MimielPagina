<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recetas_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
    public function obtener_recetas($busqueda = null){

        $this->db->select('r.*, i.ruta AS imagen_ruta, i.nombre_archivo AS imagen_nombre, i.alt AS imagen_alt');
        $this->db->from('cat_recetas r');
        $this->db->join('cat_imagenes i', 'i.id = r.id_imagen', 'left');
        $this->db->where('r.status', 1);
        $this->db->order_by('r.registro', 'DESC');

        if($busqueda){
        $this->db->group_start();
        $this->db->like('r.nombre', $busqueda);
        $this->db->or_like('r.descripcion', $busqueda);
        $this->db->group_end();
    }

    $query = $this->db->get();

    return $query->num_rows() > 0 ? $query->result() : [];
        
    }

    public function obtener_recetas_por_id($id){

        $this->db->select('r.*, i.ruta AS imagen_ruta, i.nombre_archivo AS imagen_nombre, i.alt AS imagen_alt');
        $this->db->from('cat_recetas r');
        $this->db->join('cat_imagenes i', 'i.id = r.id_imagen', 'left');
        $this->db->where('r.id', (int)$id);
        $this->db->where('r.status', 1);

        $query = $this->db->get();

        return $query->num_rows() > 0 ? $query->row() : false;
    }
    
}