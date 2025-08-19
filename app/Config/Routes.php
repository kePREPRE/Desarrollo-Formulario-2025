<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Reportes::login');
//INDEX
$routes->POST('index', 'Reportes::index');

//FUNCIONES DE REPORTES
$routes->get('/listaR', 'Reportes::listaR');
$routes->get('/insertarR', 'Reportes::insertarR');
$routes->post('/agregarReporte', 'Reportes::insertar_reporte');
$routes->post('eliminar/(:num)', 'Reportes::eliminar_producto/$1');

$routes->get('editarReporte/(:num)', 'Reportes::editar_reporte/$1');

$routes->post('actualizarProducto', 'pc::actualizar_producto');



//FUNCIONES DE CATEGORIAS
$routes->get('/listaCategorias', 'Reportes::lista_categorias');
$routes->get('/insertarCategoria', 'Reportes::insertar_categoria');

$routes->post('/agregarCategoria', 'Reportes::insertar_categorias');
$routes->post('eliminarCategoria/(:num)', 'Reportes::eliminar_categoria/$1');


//FUNCIONES DE USUARIOS
$routes->get('/listaUsuarios', 'Reportes::lista_usuarios');
$routes->get('/insertarUsuario', 'Reportes::insertar_usuario');

$routes->post('/agregarUsuario', 'Reportes::insertar_usuarios');
$routes->post('eliminarUsuario/(:num)', 'Reportes::eliminar_usuario/$1');

$routes->get('editarUsuario/(:num)', 'Reportes::editar_usuario/$1');





//FUNCIONES DE REPORTES
$routes->get('/reporteLista', 'Reportes::reporte_lista');
$routes->get('/reporteInventario', 'Reportes::reporte_inventario');


//LOGIN
$routes->post('/login', 'Reportes::autenticar');






