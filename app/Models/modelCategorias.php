<?php

namespace App\Models;

use CodeIgniter\Model;

class modelCategorias extends Model
{
    protected $table      = 'categorias';
    protected $primaryKey = 'id_Categoria';

    protected $returnType     = 'array';

    protected $allowedFields = ['id_Categoria', 'nombre', 'descripcion', 'activo'];


       public function obtenerTour(){
        // Llamada al procedimiento almacenado
        $query = $this->db->query("CALL cargarTour()");
        return $query->getResultArray();
    }

    public function obtenerCategoriasXID($id_categoria){
        // Llamada al procedimiento almacenado
        $query = $this->db->query("CALL cargarCategoriasXID($id_categoria)");
        return $query->getResultArray();
    }
}