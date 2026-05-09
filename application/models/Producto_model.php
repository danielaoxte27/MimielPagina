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

    $result = $query->result();
    
    // Limpiar el buffer de resultados del CALL para evitar "Commands out of sync"
    while($this->db->conn_id->more_results() && $this->db->conn_id->next_result()) {}
    
    return $result;
}

// CONTAR PRODUCTOS POR CATEGORÍA
public function contar_productos_por_categoria(){
    $query = $this->db->query("
        SELECT 
            0 as id,
            COUNT(*) as total
        FROM cat_productos
        WHERE estatus = 1
        
        UNION ALL
        
        SELECT 
            id,
            (SELECT COUNT(*) FROM cat_productos WHERE id_categoria = cat_categorias.id AND estatus = 1) as total
        FROM cat_categorias
        WHERE estatus = 1
    ");
    
    $result = $query->result();
    $counts = [];
    
    foreach($result as $row){
        $counts[$row->id] = $row->total;
    }
    
    return $counts;
}

public function obtener_producto_por_id($id)
{
    $query = $this->db->query(
        "SELECT p.*, c.nombre AS categoria_nombre, i.ruta AS imagen_ruta, i.nombre_archivo AS imagen_nombre, i.alt AS imagen_alt
         FROM cat_productos p
         LEFT JOIN cat_categorias c ON c.id = p.id_categoria
         LEFT JOIN cat_imagenes i ON i.id = p.id_imagen
         WHERE p.id = ? AND p.estatus = 1",
        [(int)$id]
    );

    return $query->row();
}

}