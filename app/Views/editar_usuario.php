<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

foreach($usuarios as $usuario){
    $id_Usuario = $usuario['id_Usuario'];
    $nombre = $usuario['nombre'];
    $correo = $usuario['correo'];
    $contra = $usuario['contraseña'];
    $fecha = $usuario['fecha_registro'];
   

}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- jQuery desde CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS desde CDN -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<!-- DataTables JS desde CDN -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script src="assets/js/pages/datatables.init.js"></script>

    <meta charset="utf-8">
    <title>Dashboard | Foxia - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>">

    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/css/app.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
<link rel="stylesheet" href="<?= base_url('assets/datatables/css/jquery.dataTables.min.css') ?>">
</head>

<body data-sidebar="colored" class="body_style">
    <div id="preloader"><div id="status"><div class="spinner"></div></div></div>
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="d-flex">
                <div class="navbar-brand-box text-center">
                    <a href="<?= base_url('/') ?>" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="<?= base_url('assets/images/logo-sm.png') ?>" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?= base_url('assets/images/logo.png') ?>" alt="" height="20">
                        </span>
                    </a>
                    <a href="<?= base_url('index.html') ?>" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="<?= base_url('assets/images/logo-sm.png') ?>" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?= base_url('assets/images/logo_dark.png') ?>" alt="" height="20">
                        </span>
                    </a>
                </div>

                <div class="navbar-header">
                    <button type="button" class="button-menu-mobile waves-effect" id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <div class="d-flex ms-auto">
                        <div class="search-wrap" id="search-wrap">
                            <div class="search-bar">
                                <input class="search-input form-control" placeholder="Search">
                                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                    <i class="mdi mdi-close-circle"></i>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-md-block">
                            <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="flag-img me-2" src="<?= base_url('assets/images/flags/us_flag.jpg') ?>" alt="Header Language" height="16"> English <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url('assets/images/flags/germany_flag.jpg') ?>" alt="user-image" height="12"> <span class="align-middle"> German </span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url('assets/images/flags/italy_flag.jpg') ?>" alt="user-image" height="12"> <span class="align-middle"> Italian </span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url('assets/images/flags/french_flag.jpg') ?>" alt="user-image" height="12"> <span class="align-middle"> French </span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url('assets/images/flags/spain_flag.jpg') ?>" alt="user-image" height="12"> <span class="align-middle"> Spanish </span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url('assets/images/flags/russia_flag.jpg') ?>" alt="user-image" height="12"> <span class="align-middle"> Russian </span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button type="button" class="btn header-item toggle-search noti-icon waves-effect" data-target="#search-wrap">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </button>

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="m-0 font-size-16"> Notification (3) </h5>
                                </div>
                            </div>
                        </div>

                        <div data-simplebar style="max-height: 230px;">
                            <a href="" class="text-reset notification-item d-block active">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-success rounded-circle font-size-16">
                                            <i class="mdi mdi-cart-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="text-reset notification-item d-block">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-danger rounded-circle font-size-16">
                                            <i class="mdi mdi-message-text-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">New Message received</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">You have 87 unread messages</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="text-reset notification-item d-block">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-info rounded-circle font-size-16">
                                            <i class="mdi mdi-glass-cocktail"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">Your item is shipped</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">It is a long established fact that a reader will</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="text-reset notification-item d-block">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-success rounded-circle font-size-16">
                                            <i class="mdi mdi-message-text-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">New Message received</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">You have 87 unread messages</p>
                                        </div>
                                    </div>
                                </div>
                            </a>



    
                            <a href="" class="text-reset notification-item d-block">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-warning rounded-circle font-size-16">
                                            <i class="mdi mdi-cart-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                        
                        <div class="p-2 border-top">
                            <div class="d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-start" href="javascript:void(0)">
                                    View all
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <img class="rounded-circle header-profile-user me-2" src="<?= base_url('assets/images/users/avatar-1.jpg') ?>" alt="Header Avatar">
                        <span class="d-none d-md-inline-block ms-1">Donald T. <i class="mdi mdi-chevron-down"></i> </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="dripicons-user font-size-16 align-middle d-inline-block me-1"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-wallet font-size-16 align-middle d-inline-block me-1"></i> My Wallet</a>
                        <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="dripicons-gear font-size-16 align-middle me-1"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-lock-open font-size-16 align-middle d-inline-block me-1"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#"><i class="dripicons-power-off font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="mdi mdi-spin mdi-cog"></i>
                    </button>
                </div>

            </div>
        </div>    
    </div>    
</header>


            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title text-uppercase">Bienvenidos</li>

                
              
                <li class="menu-title">Productos</li>  

                <li>  
                    <a href="javascript: void(0);" class="has-arrow waves-effect">  
                        <i class="dripicons-box"></i>  
                        <span>Gestión de Productos</span>  
                    </a>  
                    <ul class="sub-menu" aria-expanded="false">  
                         <li><a href="<?php echo base_url("/insertarP") ?>">Añadir Producto</a></li>  
                        <li><a href="<?php echo base_url("/listaP") ?>">Lista de Productos</a></li>  
                       
                    </ul>  
                </li>  

                <li class="menu-title">Categorias</li>  
                    <li>  
                    <a href="javascript: void(0);" class="has-arrow waves-effect">  
                        <i class="dripicons-box"></i>  
                        <span>Gestión de Categorias</span>  
                    </a>  
                    <ul class="sub-menu" aria-expanded="false">  
                        <li><a href="<?php echo base_url("/insertarC") ?>">Añadir Categoria</a></li>  
                        <li><a href="<?php echo base_url("/listaC") ?>">Lista de Categorias</a></li>  
                    </ul>  
                </li>  

                <li class="menu-title">Clientes</li>  

                <li>  
                    <a href="javascript: void(0);" class="has-arrow waves-effect">  
                        <i class="dripicons-user-group"></i>  
                        <span>Gestión de Clientes</span>  
                    </a>  
                    <ul class="sub-menu" aria-expanded="false">  
                           <li><a href="<?php echo base_url("/insertarCli") ?>">Registrar Cliente</a></li>  
                        <li><a href="<?php echo base_url("/listaCli") ?>">Lista de Clientes</a></li>  
                    </ul>  
                </li>  

                      <li class="menu-title">Proveedores</li>  
                   <li>  
                    <a href="javascript: void(0);" class="has-arrow waves-effect">  
                        <i class="dripicons-user-group"></i>  
                        <span>Gestión de Proveedores</span>  
                    </a>  
                    <ul class="sub-menu" aria-expanded="false">  
                        <li><a href="<?php echo base_url("/insertarPro") ?>">Registrar Proveedor</a></li>  
                        <li><a href="<?php echo base_url("/listaPro") ?>">Lista de Proveedores</a></li>  
                        
                    </ul>  
                </li>  

                <li class="menu-title">Reportes</li>  

                <li>  
                    <a href="javascript: void(0);" class="has-arrow waves-effect">  
                        <i class="dripicons-document"></i>  
                        <span>Generar Reportes</span>  
                    </a>  
                    <ul class="sub-menu" aria-expanded="false">  
                        <li><a href="<?php echo base_url("/reporteLista") ?>">Reporte de Ventas</a></li>  
                        <li><a href="<?php echo base_url("/reporteInventario") ?>" >Reporte de Inventario</a></li>    
                    </ul>  
                </li>  

               


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-box"></i>
                                    <span>Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                </ul>
                            </li>
                

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

                     <div class="main-content">
                <form id="formEditarCliente">

                     <input type="hidden" id="id_cliente" name="id_cliente" value="<?php echo $id_Usuario ?>">

                    <div class="page-content">
                        <div class="container-fluid">

                            <dv class="row">

                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title text-center estilo" >Formulario Editar Cliente</h4>
                                        </div> <!-- end card-body -->
                                    </div>
                                </div> <!-- end col -->
                                
                                <div class="col-md-6">
                                    <div class="card card-body">

                                         <div class="mb-3">
                                            <label class="form-label" for="txtNombre">Nombre Del Cliente</label>
                                            <input type="text" class="form-control form-control-lg validacion campoInicial" id="txtNombreCli"  value="<?php echo $nombre ?>" name="txtNombreCli" placeholder="Digite El Nombre Del Cliente">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="slcUsuario">Email Del Cliente</label>
                                            <input type="text" class="form-control form-control-lg validacion" id="txtEmail"  value="<?php echo $correo ?>" name="txtEmail" placeholder="Didite El Email Del Cliente">
                                        </div>      
                                        
                                       
                                    </div>
                                </div>
                                    
                                
                                <div class="col-md-6">
                                    <div class="card card-body">
                                         <div class="mb-3">  
                                            <label class="form-label" for="txtNombre">Numero De Telefono</label>
                                            <input type="text" class="form-control form-control-lg validacion disabled"  id="txtTelefono" name="txtTelefono" value="<?php echo $contra ?>" placeholder="Digite El Telefono Del Cliente">
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label" for="txtBoti">Direccion Del Cliente</label>
                                            <input type="text" class="form-control form-control-lg validacion disabled"  id="txtDireccion" name="txtDireccion"  value="<?php echo $fecha ?>" placeholder="Digite La Direccion Del Cliente">
                                        </div>
                                       
                                             
                                    </div>

                                </div
                                                        
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            
                                            <div style="display: none;width:350px;margin:auto;" id="mensaje" class="alert alert-info" role="alert">
                                                <strong>Información</strong> almacenada satisfactoriamente.
                                            </div>
                                            
                                            <div style="display: none;width:350px;margin:auto;" id="mensaje2" class="alert alert-danger" role="alert">
                                                <strong>Campos Vacios</strong> requeridos.
                                            </div>

                                        <br>
                                            
                                            <div style="width: 100%;text-align:center">
                                                <button id="btnEditCliente" class="btn btn-primary w-md waves-effect waves-light" type="submit">Editar Cliente</button>
                                            </div>
                                            
                                        </div> <!-- end card-body -->
                                    </div>
                                </div> <!-- end col -->
                                    
                            </div> <!-- end row -->
                            
                        </div> <!-- container-fluid -->
                    </div>
                    <!-- End Page-content -->
                </form>
                        
                
                
                <footer class="footer text-center">
                    © <script>document.write(new Date().getFullYear())</script> Foxia <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                </footer>
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0">
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
    <div class="mb-2">
        <img src="<?= base_url('assets/images/layouts/layout-1.jpg') ?>" class="img-fluid img-thumbnail" alt="">
    </div>
    <div class="form-check form-switch mb-3">
        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch">
        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
    </div>

    <div class="mb-2">
        <img src="<?= base_url('assets/images/layouts/layout-2.jpg') ?>" class="img-fluid img-thumbnail" alt="">
    </div>

    <div class="form-check form-switch mb-3">
        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="<?= base_url('assets/css/bootstrap-dark.min.css') ?>" data-appStyle="<?= base_url('assets/css/app-dark.min.css') ?>">
        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
    </div>

    <div class="mb-2">
        <img src="<?= base_url('assets/images/layouts/layout-3.jpg') ?>" class="img-fluid img-thumbnail" alt="">
    </div>

    <div class="form-check form-switch mb-3">
        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="<?= base_url('assets/css/app-rtl.min.css') ?>">
        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
    </div>
</div>

            
            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

                             
<!-- JAVASCRIPT -->
 <script src="<?php echo base_url("assets/libs/jquery/jquery.min.js")?>"></script>
 <script src="<?php echo base_url("assets/libs/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
<script src="<?php echo base_url("assets/libs/metismenu/metisMenu.min.js")?>"></script>
 <script src="<?php echo base_url("assets/libs/simplebar/simplebar.min.js")?>"></script>
<script src="<?php echo base_url("assets/libs/node-waves/waves.min.js")?>"></script>
<script src="<?php echo base_url('assets/libs/morris.js/morris.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/raphael/raphael.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/peity/jquery.peity.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/pages/dashboard.init.js')?>"></script>
<script src="<?php echo base_url("assets/js/app.js")?>"></script>
<script src="<?php echo base_url('assets/js/jquery-3.7.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/basico.js')?>"></script>


<!-- jQuery -->
<script src="<?= base_url('https://code.jquery.com/jquery-3.6.0.min.js') ?>"></script>

<!-- DataTables JS -->
<script src="<?= base_url('https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js') ?>"></script>

<!-- Tu propio script para inicializar DataTable -->
<script src="<?= base_url('path/a/tu/datatables.init.js') ?>"></script>


       




    </body>
</html>
