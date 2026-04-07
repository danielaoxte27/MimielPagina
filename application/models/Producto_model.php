<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    //  OBTENER CATEGORÍAS
    public function obtener_categorias(){
        $query = $this->db->query("
            SELECT id, nombre 
            FROM cat_categorias 
            WHERE estatus = 1
        ");
        return $query->result();
    }

    // OBTENER PRODUCTOS 
public function obtener_productos($categoria = 0, $busqueda = null){

    $query = $this->db->query("CALL ObtenerProductos(?, ?)", [
        $categoria,
        $busqueda
    ]);

    return $query->result();
}

}