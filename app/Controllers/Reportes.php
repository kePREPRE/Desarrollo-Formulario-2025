<?php

namespace App\Controllers;

use App\Models\modelCategorias;
use App\Models\modelEstados;
use App\Models\modelReportes;
use App\Models\modelUsuarios;



class Reportes extends BaseController
{
    public function login(): string
    {
        $login = new modelReportes();
        $resultadoLogin= $login->findAll();

        $data = [
            'index' => $resultadoLogin
        ];

        return view('login', $data);
    }


        public function index(): string
    {
        $index = new modelReportes();
        $resultadoIndex = $index->findAll();

        $data = [
            'index' => $resultadoIndex
        ];

        return view('index', $data);
    }

    
    public function insertarR(): string
    {
        $categorias = new modelCategorias();
        $resultadoCategorias = $categorias->findAll();

        $estados = new modelEstados();
        $resultadoEstados = $estados->findAll();

        $reportes = new modelReportes();
        $resultadoReportes = $reportes->findAll();

         $usuarios = new modelUsuarios();
        $resultadoUsuarios = $usuarios->findAll();

        $data = [
            'categorias' => $resultadoCategorias,
            'estados' => $resultadoEstados,
            'reportes' => $resultadoReportes,
            'usuarios' => $resultadoUsuarios
        ];

        return view('insertar_reporte', $data);
    }

     public function listaR(): string
    {
        $reportes = new modelReportes();
        $resultadoReportes = $reportes->findAll();

        $data = [
            'reportes' => $resultadoReportes
        ];

        return view('lista_reportes', $data);
    }

public function insertar_reporte()
{
    $usuario = $this->request->getPost('usuReporte');
    $categoria = $this->request->getPost('catReporte');
    $estado = $this->request->getPost('estaReporte');
    $nombre = $this->request->getPost('nomReporte');
    $descripcion = $this->request->getPost('desReporte');
    $fecha = $this->request->getPost('fechReporte');

 

    $reportes = new modelReportes();

    $reportes->insert([
        'id_Usuario' => $usuario,
        'id_Categoria' => $categoria,
        'id_Estado' => $estado,
        'titulo' => $nombre,
        'descripcion' => $descripcion,
        'fecha_creacion' => $fecha
    ]);

    $ultimoID = $reportes->insertID();

    return $this->response->setJSON([
        'success' => true,
        'id_Reporte' => $ultimoID
    ]);
}

 public function editar_reporte($id_Reporte): string
        {
            $categorias = new modelCategorias();
        $resultadoCategorias = $categorias->findAll();

        $estados = new modelEstados();
        $resultadoEstados = $estados->findAll();

    
         $usuarios = new modelUsuarios();
        $resultadoUsuarios = $usuarios->findAll();

       $reportes = new modelReportes();
        $resultadoReportes = $reportes->cargarReporteXID($id_Reporte
        );

        $data = [
            'categorias' => $resultadoCategorias,
            'estados' => $resultadoEstados,
            'reportes' => $resultadoReportes,
            'usuarios' => $resultadoUsuarios
        ];

            return view('editar_reporte', $data);
        }

        

        public function eliminar_producto($eliminarIDReporte)
        {

          
            $reportes = new modelReportes();
            $reportes->delete($eliminarIDReporte);

            return $this->response->setJSON(['success' => true]);
        }


//FUNCIONES DE CATEGORIAS

public function insertar_categoria(): string
    {
        $categorias = new modelCategorias();
        $resultadoCategorias = $categorias->findAll();

        $estados = new modelEstados();
        $resultadoEstados = $estados->findAll();

        $reportes = new modelReportes();
        $resultadoReportes = $reportes->findAll();

         $usuarios = new modelUsuarios();
        $resultadoUsuarios = $usuarios->findAll();

        $data = [
            'categorias' => $resultadoCategorias,
            'estados' => $resultadoEstados,
            'reportes' => $resultadoReportes,
            'usuarios' => $resultadoUsuarios
        ];

        return view('insertar_categoria', $data);
    }

     public function lista_categorias(): string
    {
        $categorias = new modelCategorias();
        $resultadoCategoria = $categorias->findAll();

        $data = [
            'categorias' => $resultadoCategoria
        ];

        return view('lista_categoria', $data);
    }

    public function insertar_categorias()
{
    $nombre = $this->request->getPost('txtNombreC');
    $descripcion = $this->request->getPost('txtDescripcionC');
    

 

    $categorias = new modelCategorias();

    $categorias->insert([
        'nombre' => $nombre,
        'descripcion' => $descripcion,
      
    ]);

    $ultimoID = $categorias->insertID();

    return $this->response->setJSON([
        'success' => true,
        'id_Categoria' => $ultimoID
    ]);
}

    public function eliminar_categoria($eliminarIDCategoria)
        {

          
            $categorias = new modelCategorias();
            $categorias->delete($eliminarIDCategoria);

            return $this->response->setJSON(['success' => true]);
        }

//FUNCIONES DE USUARIOS

        public function insertar_usuario(): string
    {
        $categorias = new modelCategorias();
        $resultadoCategorias = $categorias->findAll();

        $estados = new modelEstados();
        $resultadoEstados = $estados->findAll();

        $reportes = new modelReportes();
        $resultadoReportes = $reportes->findAll();

         $usuarios = new modelUsuarios();
        $resultadoUsuarios = $usuarios->findAll();

        $data = [
            'categorias' => $resultadoCategorias,
            'estados' => $resultadoEstados,
            'reportes' => $resultadoReportes,
            'usuarios' => $resultadoUsuarios
        ];

        return view('insertar_usuario', $data);
    }

     public function lista_usuarios(): string
    {
        $usuarios = new modelUsuarios();
        $resultadoUsuarios = $usuarios->findAll();

        $categorias = new modelCategorias();
        $resultadoCategoria = $categorias->findAll();

        $data = [
            'categorias' => $resultadoCategoria,
            'usuarios' => $resultadoUsuarios
        ];

        return view('lista_usuario', $data);
    }


        public function insertar_usuarios()
{
    $nombre = $this->request->getPost('txtNomUsuario');
    $correo = $this->request->getPost('txtCorrUsuario'); 
    $contraseña = $this->request->getPost('txtConUsuarios');    
    $fecha = $this->request->getPost('txtFechUsuarios');

    

 

    $usuarios = new modelUsuarios();

    $usuarios->insert([
        'nombre' => $nombre,
        'correo' => $correo,
        'contraseña' => $contraseña,
        'fecha_registro' => $fecha,
      
    ]);

    $ultimoID = $usuarios->insertID();

    return $this->response->setJSON([
        'success' => true,
        'id_Usuario' => $ultimoID
    ]);
}

public function editar_usuario($id_Usuario): string
        {
        $categorias = new modelCategorias();
        $resultadoCategorias = $categorias->findAll();

        $estados = new modelEstados();
        $resultadoEstados = $estados->findAll();

    
       $reportes = new modelReportes();
        $resultadoReportes = $reportes->findAll();

        $usuarios = new modelUsuarios();
        $resultadoUsuarios = $usuarios->cargarUsuarioXID($id_Usuario
        );
        

        $data = [
            'categorias' => $resultadoCategorias,
            'estados' => $resultadoEstados,
            'reportes' => $resultadoReportes,
            'usuarios' => $resultadoUsuarios
        ];

            return view('editar_usuario', $data);
        }


  public function eliminar_usuario($eliminarIDUsuario)
        {

            $usuarios = new modelUsuarios();
            $usuarios->delete($eliminarIDUsuario);

            return $this->response->setJSON(['success' => true]);
        }



            public function reporte_lista(): string
    {
        $categorias = new modelCategorias();
        $resultadoCategorias = $categorias->findAll();

        $estados = new modelEstados();
        $resultadoEstados = $estados->findAll();

        $reportes = new modelReportes();
        $resultadoReportes = $reportes->findAll();

         $usuarios = new modelUsuarios();
        $resultadoUsuarios = $usuarios->findAll();

        $data = [
            'categorias' => $resultadoCategorias,
            'estados' => $resultadoEstados,
            'reportes' => $resultadoReportes,
            'usuarios' => $resultadoUsuarios
        ];

        return view('reporte_inventario', $data);
    }

               public function reporte_inventario(): string
    {
        $categorias = new modelCategorias();
        $resultadoCategorias = $categorias->findAll();

        $estados = new modelEstados();
        $resultadoEstados = $estados->findAll();

        $reportes = new modelReportes();
        $resultadoReportes = $reportes->findAll();

         $usuarios = new modelUsuarios();
        $resultadoUsuarios = $usuarios->findAll();

        $data = [
            'categorias' => $resultadoCategorias,
            'estados' => $resultadoEstados,
            'reportes' => $resultadoReportes,
            'usuarios' => $resultadoUsuarios
        ];

        return view('reporte_ventas', $data);
    }

// LOGIN
public function autenticar()
{
    // Recibe los datos del formulario
    $nombre = $this->request->getPost('nombre');
    $contrasena = $this->request->getPost('contrasena');

    $usuarios = new modelUsuarios();

    // Busca el usuario
    $usuarioData = $usuarios
                    ->where('nombre', $nombre)
                    ->where('contraseña', $contrasena)
                    ->where('activo', 1)
                    ->first();

    if ($usuarioData) {
        // OJO: aquí usamos corchetes porque es un array, no objeto
        session()->set([
            'id_Usuario' => $usuarioData['id_Usuario'],
            'nombre' => $usuarioData['nombre'],
            'isLoggedIn' => true
        ]);

        // Pasar el mensaje de éxito
        session()->set('jsSuccess', "¡Bienvenido de nuevo, " . $usuarioData['nombre'] . "! Has iniciado sesión con éxito.");

        return view('index');
    } else {
        // Pasar el mensaje de error
        session()->set('jsError', 'Usuario o contraseña incorrectos.');
        return redirect()->back();
    }
 
}

}






















