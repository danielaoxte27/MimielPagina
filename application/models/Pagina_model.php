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
    // CONSULTAR SECCIONES ACTIVAS
    function consultar_secciones_activas(){
 
        $sql = "SELECT id, nombre_seccion, href, activo, registro
                FROM cat_secciones
                WHERE activo = 1";
 
        $query = $this->db->query($sql);
 
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // CONSULTAR MISION DE LA EMPRESA
    function consultar_mision(){
        $query = $this->db->query("CALL ObtenerMision()");
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
 
}