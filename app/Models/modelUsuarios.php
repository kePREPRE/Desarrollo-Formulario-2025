<?php

namespace App\Models;

use CodeIgniter\Model;

class modelUsuarios extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id_Usuario';

    protected $returnType     = 'array';

    protected $allowedFields = ['id_Usuario', 'nombre', 'correo', 'contraseña' , 'fecha_registro', 'activo'];


       public function obtenerUsuarios()
       {
        // Llamada al procedimiento almacenado
        $query = $this->db->query("CALL loginUsuarios()");
        return $query->getResultArray();
        }

        public function validarLogin($usuario, $contrasena)
    {
        $query = $this->db->query("CALL validar_login(?, ?)", [$usuario, $contrasena]);
        return $query->getRow(); // Trae una fila
    }

     public function cargarUsuarioXID($id_Usuario){
        // Llamada al procedimiento almacenado
        $query = $this->db->query("CALL cargarUsuarioXID($id_Usuario)");
        return $query->getResultArray();
    }

    }

    
