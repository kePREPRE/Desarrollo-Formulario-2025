<?php

namespace App\Models;

use CodeIgniter\Model;

class modelEstados extends Model
{
    protected $table      = 'estados';
    protected $primaryKey = 'id_Estado';

    protected $returnType     = 'array';

    protected $allowedFields = ['id_Estado', 'nombre', 'activo'];


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