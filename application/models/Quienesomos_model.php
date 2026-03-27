<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quienesomos_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        
    }

   
    public function obtener_historia(){
        $this->db->where('tipo', 'historia');
        $this->db->where('estatus', 1);
        $query = $this->db->get('cat_nosotros');

        return $query->row();
    }

    
    public function obtener_valores(){
        $this->db->where('tipo', 'valor');
        $this->db->where('estatus', 1);
        $this->db->order_by('orden', 'ASC');
        $query = $this->db->get('cat_nosotros');

        return $query->result();
    }

  
    public function obtener_info(){
        $this->db->where('tipo', 'informacion');
        $this->db->where('estatus', 1);
        $this->db->order_by('orden', 'ASC');
        $query = $this->db->get('cat_nosotros');

        return $query->result();
    }
    public function obtener_politica()
    {
        $this->db->where('tipo', 'información');
        $this->db->where('estatus', 1);
        $this->db->where('orden', 8);
        $query = $this->db->get('cat_nosotros');
        return $query->row();
    }

    public function obtener_filosofia()
    {
        $this->db->where('tipo', 'información');
        $this->db->where('estatus', 1);
        $this->db->where('orden', 9);
        $query = $this->db->get('cat_nosotros');
        return $query->row();
    }
}