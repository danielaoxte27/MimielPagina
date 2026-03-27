<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function obtenerProductosPorCategoria($id_categoria)
{
    $sql = "SELECT 
                p.id,
                p.nombre,
                p.descripcion,
                p.precio,
                c.nombre as categoria,
                i.ruta,
                i.nombre_archivo
            FROM cat_productos p
            INNER JOIN cat_categorias c ON c.id = p.id_categoria
            INNER JOIN cat_imagenes i ON i.id = p.id_imagen
            WHERE p.estatus = 1
            AND c.estatus = 1
            AND i.estatus = 1
            AND p.id_categoria = ?";

    $query = $this->db->query($sql, array($id_categoria));

    return $query->num_rows() > 0 ? $query->result() : false;
}
public function obtenerTodos()
{
    $this->db->select('p.*, i.ruta, i.nombre_archivo, c.nombre as categoria');
    $this->db->from('cat_productos p');
    $this->db->join('cat_imagenes i', 'i.id = p.id_imagen');
    $this->db->join('cat_categorias c', 'c.id = p.id_categoria');

    return $this->db->get()->result();
}
}