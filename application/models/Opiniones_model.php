<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opiniones_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function obtener_opiniones(){
        $query = $this->db->query("CALL ObtenerOpiniones()");
        $result = $query->result();
        $this->db->close();
        $this->db->initialize();
        return count($result) > 0 ? $result : [];
    }
}