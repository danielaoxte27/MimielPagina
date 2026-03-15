<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pagina_model extends CI_Model {
 
    public function __construct(){
        parent::__construct();
    }
 
    // CONSULTAR IMAGENES
    function consultar_imagenes(){
 
        $sql = "SELECT id, nombre_archivo, ruta, alt
                FROM cat_imagenes
                WHERE estatus = 1";
 
        $query = $this->db->query($sql);
 
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
 
    }
 
}