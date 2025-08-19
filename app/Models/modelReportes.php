<?php

namespace App\Models;

use CodeIgniter\Model;

class modelReportes extends Model
{
    protected $table      = 'reportes';
    protected $primaryKey = 'id_Reporte';

    protected $returnType     = 'array';

    protected $allowedFields = ['id_Reporte', 'id_Usuario', 'id_Categoria', 'id_Estado' , 'titulo', 'descripcion', 'fecha_creacion', 'activo'];


       public function obtenerTour(){
        // Llamada al procedimiento almacenado
        $query = $this->db->query("CALL cargarTour()");
        return $query->getResultArray();
    }

    public function cargarReporteXID($id_Reporte){
        // Llamada al procedimiento almacenado
        $query = $this->db->query("CALL cargarReporteXID($id_Reporte)");
        return $query->getResultArray();
    }
}