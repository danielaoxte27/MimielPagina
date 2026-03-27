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
        $result = $query->result();
        $this->db->close();
        $this->db->initialize();
        return count($result) > 0 ? $result : false;
    }
    // CONSULTAR BENEFICIOS
    function consultar_beneficios(){
        $query = $this->db->query("CALL ObtenerBeneficios()");
        $result = $query->result();
        $this->db->close(); 
        $this->db->initialize(); 
        return count($result) > 0 ? $result : false;
    }
    // CONSULTAR ELEGIRNOS
    function consultar_elegirnos(){
        $query = $this->db->query("CALL ObtenerElegirnos()");
        $result = $query->result();
        $this->db->close();
        $this->db->initialize();
        return count($result) > 0 ? $result : false;
    }
    // CONSULTAR TITULOS
    function consultar_titulos(){
        $query = $this->db->query("CALL ObtenerTitulos()");
        $result = $query->result();
        $this->db->close();
        $this->db->initialize();
        return count($result) > 0 ? $result : false;
    }
    // CONSULTAR TARJETAS
    function consultar_tarjetas(){
        $query = $this->db->query("CALL ObtenerTarjetas()");
        $result = $query->result();
        $this->db->close();
        $this->db->initialize();
        return count($result) > 0 ? $result : false;
    }
    public function obtener_footer($tipo){
    return $this->db->get_where('cat_footer', [
        'tipo' => $tipo,
        'estatus' => 1])->result();
	}

}