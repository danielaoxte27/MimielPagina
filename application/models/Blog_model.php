<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
    public function obtener_blog_activos(){

        $this->db->select('b.*, i.ruta AS imagen_ruta, i.nombre_archivo AS imagen_nombre, i.alt AS imagen_alt');
        $this->db->from('cat_blog b');
        $this->db->join('cat_imagenes i', 'i.id = b.id_imagen', 'left');
        $this->db->where('b.status', 1);
        $this->db->order_by('b.registro', 'DESC');

        $query = $this->db->get();

        return $query->num_rows() > 0 ? $query->result() : [];
    }
    public function obtener_blog_por_id($id){

        $this->db->select('b.*, i.ruta AS imagen_ruta, i.nombre_archivo AS imagen_nombre, i.alt AS imagen_alt');
        $this->db->from('cat_blog b');
        $this->db->join('cat_imagenes i', 'i.id = b.id_imagen', 'left');
        $this->db->where('b.id', (int)$id);
        $this->db->where('b.status', 1);

        $query = $this->db->get();

        return $query->num_rows() > 0 ? $query->row() : false;
    }
}