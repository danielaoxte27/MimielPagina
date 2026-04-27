<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function obtener_hero(){
        return $this->db
            ->where('estatus', 1)
            ->order_by('orden', 'ASC')
            ->get('cat_contacto_hero')
            ->row();
    }

    public function obtener_canales(){
        return $this->db
            ->where('estatus', 1)
            ->order_by('orden', 'ASC')
            ->get('cat_contacto_canales')
            ->result();
    }

    public function obtener_sucursales(){
        return $this->db
            ->where('estatus', 1)
            ->order_by('orden', 'ASC')
            ->get('cat_contacto_sucursales')
            ->result();
    }

    public function guardar_mensaje($data){
        return $this->db->insert('cat_contacto_mensajes', $data);
    }
}