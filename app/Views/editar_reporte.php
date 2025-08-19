<?php
session_start();
ini_set('error_reporting',0);
include 'includes/conexion.php';

?>

<!doctype html >
<html lang="en" >

    <head"
    
        <meta charset="utf-8">
        <title>Dashboard | Foxia - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
<link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico'); ?>">

<!-- Bootstrap CSS -->
<<link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" id="bootstrap-style" rel="stylesheet" type="text/css">


<!-- App CSS -->
<link href="<?= base_url('public/assets/css/app.min.css'); ?>" id="app-style" r el="stylesheet" type="text/css">

<!-- Icons CSS -->
<link href="<?= base_url('assets/css/icons.min.css'); ?>" rel="stylesheet" type="text/css">

<!-- Custom Style CSS -->
<link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css">



    </head>

    <style>

body {
	
	font-family: 'Montserrat', sans-serif;
	
	
}
.navbar-header{
	 background-image: url("<?= base_url('assets/images/IMG/fondo4.png') ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 60px;
            margin: 0;
            font-family: Arial, sans-serif;
}

       
    </style>

    <body data-sidebar="colored" class="body_style fondo" >


        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
    <div class="d-flex">
        
        <div class="navbar-header "  >        
            <button type="button" class="button-menu-mobile waves-effect" id="vertical-menu-btn" style="color: black; background-color:  white;">
                <i class="mdi mdi-menu"></i>
            </button> 
            <div class="d-flex ms-auto" >
                <!-- Search input -->
                <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input form-control" placeholder="Search">
                        <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>


                <div class="dropdown d-none d-md-block" style="color: black; background-color:  white;">
                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="flag-img me-2" src="<?= base_url('assets/images/flags/us_flag.jpg') ?>" alt="Header Language" height="16"> English <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                       <a href="javascript:void(0);" class="dropdown-item notify-item">
    <img src="<?= base_url('assets/images/flags/germany_flag.jpg') ?>" alt="user-image" height="12"> 
    <span class="align-middle"> German </span>
</a>

<!-- item-->
<a href="javascript:void(0);" class="dropdown-item notify-item">
    <img src="<?= base_url('assets/images/flags/italy_flag.jpg') ?>" alt="user-image" height="12"> 
    <span class="align-middle"> Italian </span>
</a>

<!-- item-->
<a href="javascript:void(0);" class="dropdown-item notify-item">
    <img src="<?= base_url('assets/images/flags/french_flag.jpg') ?>" alt="user-image" height="12"> 
    <span class="align-middle"> French </span>
</a>

<!-- item-->
<a href="javascript:void(0);" class="dropdown-item notify-item">
    <img src="<?= base_url('assets/images/flags/spain_flag.jpg') ?>" alt="user-image" height="12"> 
    <span class="align-middle"> Spanish </span>
</a>

<!-- item-->
<a href="javascript:void(0);" class="dropdown-item notify-item">
    <img src="<?= base_url('assets/images/flags/russia_flag.jpg') ?>" alt="user-image" height="12"> 
    <span class="align-middle"> Russian </span>
</a>


                    </div>
                </div>

                <div class="dropdown" style="color: black; background-color:  white;">
                    <button type="button" class="btn header-item toggle-search noti-icon waves-effect" data-target="#search-wrap">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block" style="color: black; background-color:  white;">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge bg-danger rounded-pill">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown" style="color: black; background-color:  white;">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="m-0 font-size-16"> Notification (3) </h5>
                                </div>
                            </div>
                        </div>

                        <div data-simplebar style="max-height: 230px;" style="color: black; background-color:  white;">
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

                <div class="dropdown d-inline-block" style="color: black; background-color:  white; ">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user me-2" <img src="<?= base_url('assets/images/users/avatar-1.jpg') ?>" alt="Header Avatar"> 
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
                    
                </div>

            </div>
        </div>    
    </div>    
</header>

           
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu" style="margin-top: 50p;">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu" >
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title text-uppercase">Bienvenidos</li>

                
              
            <li class="menu-title">Reportes</li>  

<li>  
    <a href="javascript: void(0);" class="has-arrow waves-effect">  
        <i class="dripicons-document"></i>  
        <span style="font-size: 95%;">Reportes Ciudadanos</span>  
    </a>  
    <ul class="sub-menu" aria-expanded="false" style="background-color:#50C878;">
        <li>
            <a href="<?php echo base_url('/insertarR') ?>" style="background: linear-gradient(to right, #4B8B3B, #A3D9FF);">
                Añadir Reporte
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('/listaR') ?>" style="background: linear-gradient(to right, #4B8B3B, #A3D9FF); ">
                Lista de Reportes
            </a>
        </li>
    </ul>  
</li>

<li class="menu-title">Categorías</li>  

<li>  
    <a href="javascript: void(0);" class="has-arrow waves-effect">  
        <i class="dripicons-tags"></i>  
        <span style="font-size: 90%;">Gestión de Categorías</span>  
    </a>  
    <ul class="sub-menu" aria-expanded="false" style="background-color:#50C878;">
        <li>
            <a href="<?php echo base_url('/insertarCategoria') ?>" style="background: linear-gradient(to right, #4B8B3B, #A3D9FF);">
                Añadir Categoría
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('/listaCategorias') ?>" style="background: linear-gradient(to right, #4B8B3B, #A3D9FF); ">
                Lista de Categorías
            </a>
        </li>
    </ul>  
</li>

<li class="menu-title">Usuarios</li>  

<li>  
    <a href="javascript: void(0);" class="has-arrow waves-effect">  
        <i class="dripicons-user-group"></i>  
        <span style="font-size: 99%;">Gestión de Usuarios</span>  
    </a>  
    <ul class="sub-menu" aria-expanded="false" style="background-color:#50C878;">
        <li>
            <a href="<?php echo base_url('/insertarUsuario') ?>" style="background: linear-gradient(to right, #4B8B3B, #A3D9FF);">
                Añadir Usuario
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('/listaUsuarios') ?>" style="background: linear-gradient(to right, #4B8B3B, #A3D9FF);">
                Lista de Usuarios
            </a>
        </li>
    </ul>  
</li>

<li class="menu-title">Reportes</li>  

<li>  
    <a href="javascript: void(0);" class="has-arrow waves-effect">  
        <i class="dripicons-document"></i>  
        <span>Generar Reportes</span>  
    </a>  
    <ul class="sub-menu" aria-expanded="false" style="background-color:#50C878;">
        <li>
            <a href="<?php echo base_url("/reporteLista") ?>" style="background: linear-gradient(to right, #4B8B3B, #A3D9FF); ">
                Reporte de Ciudadanos
            </a>
        </li>
        
    </ul>  
</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="dripicons-box"></i>
        <span>Authentication</span>
    </a>
    <ul class="sub-menu" aria-expanded="false" style="background-color:#50C878;">
        <li>
            <a href="<?php echo base_url('/') ?>" style="background: linear-gradient(to right, #4B8B3B, #A3D9FF); ">
                Login
            </a>
        </li>
        <li>
            <a href="pages-register.html" style="background: linear-gradient(to right, #4B8B3B, #A3D9FF); ">
                Register
            </a>
        </li>
        <li>
            <a href="pages-recoverpw.html" style="background: linear-gradient(to right, #4B8B3B, #A3D9FF);">
                Recover Password
            </a>
        </li>
        <li>
            <a href="pages-lock-screen.html" style="background: linear-gradient(to right, #4B8B3B, #A3D9FF);">
                Lock Screen
            </a>
        </li>
    </ul>
</li>


                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->







        <script>
// Variables para controlar la lectura
let vozFormularioReporte = null;

// Función para leer el formulario de crear reporte
function leerFormularioReporte() {
    if (vozFormularioReporte) {
        window.speechSynthesis.cancel();
    }

    let texto = '';

    texto += document.querySelector('h4.card-title').innerText + '. ';
    texto += 'Nombre del reporte: ' + document.getElementById('nomReporte').placeholder + '. ';
    texto += 'Descripción del reporte: ' + document.getElementById('desReporte').placeholder + '. ';
    texto += 'Fecha del reporte: ' + document.getElementById('fechReporte').value + '. ';

    if ('speechSynthesis' in window) {
        vozFormularioReporte = new SpeechSynthesisUtterance(texto);
        vozFormularioReporte.lang = 'es-ES';
        vozFormularioReporte.rate = 0.9;
        vozFormularioReporte.pitch = 1;
        window.speechSynthesis.speak(vozFormularioReporte);
    } else {
        alert("❌ Tu navegador no soporta la lectura de voz.");
    }
}

// Función para detener la lectura
function detenerLecturaFormularioReporte() {
    if ('speechSynthesis' in window) {
        window.speechSynthesis.cancel();
        vozFormularioReporte = null;
    }
}
</script>

<div class="main-content">
    <form id="formReportes">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="miElemento">
                                <h4 class="card-title text-center" style="color: #2C3E50;">Formulario Crear Reporte</h4>
                            </div> 
                        </div>
                    </div> 
                    
                    <div class="col-md-6">
                        <div class="card card-body">

                            <div class="mb-3">
                                <label class="form-label" for="nomReporte">Nombre Del Reporte</label>
                                <input type="text" class="form-control form-control-lg validacion" id="nomReporte" name="nomReporte" value="" placeholder="Digite El Nombre Del Reporte" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="desReporte">Descripción Del Reporte</label>
                                <input type="text" class="form-control form-control-lg validacion" id="desReporte" name="desReporte" value="" placeholder="Digite La Descripción del Reporte" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="fechReporte">Fecha Del Reporte</label>
                                <input type="date" class="form-control form-control-lg validacion" id="fechReporte" name="fechReporte" required>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-body">
                            
                            <div class="mb-3">
                                <label for="usuReporte" class="form-label">Usuarios</label>
                                <select class="form-select validacion" id="usuReporte" name="usuReporte" required>
                                    <option value="">Seleccione Un Usuario</option>
                                    <?php foreach ($usuarios as $usuario): ?>
                                        <option value="<?php echo $usuario['id_Usuario']; ?>">
                                            <?php echo $usuario['nombre']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="catReporte" class="form-label">Categorías</label>
                                <select class="form-select validacion" id="catReporte" name="catReporte" required>
                                    <option value="">Seleccione Una Categoría</option>
                                    <?php foreach ($categorias as $categoria): ?>
                                        <option value="<?php echo $categoria['id_categoria']; ?>">
                                            <?php echo $categoria['nombre']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="estaReporte" class="form-label">Estado</label>
                                <select class="form-select validacion" id="estaReporte" name="estaReporte" required>
                                    <option value="">Seleccione Un Estado</option>
                                    <?php foreach ($estados as $estado): ?>
                                        <option value="<?php echo $estado['id_Estado']; ?>">
                                            <?php echo $estado['nombre']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                
                                <div style="display: none;width:350px;margin:auto;" id="mensaje" class="alert alert-info" role="alert">
                                    <strong>Información</strong> almacenada satisfactoriamente.
                                </div>
                                
                                <div style="display: none;width:350px;margin:auto;" id="mensaje2" class="alert alert-danger" role="alert">
                                    <strong>Campos Vacíos</strong> requeridos.
                                </div>

                                <br>
                                
                                <div class="trasparente">
                                    <button id="btnCrearReporte" class="btn btn-lg waves-effect waves-light" type="submit" style="background: linear-gradient(to right, #4B8B3B, #6DBE45); color: white;">
                                        Guardar Reporte
                                    </button>
                                </div>
                                
                                <br><br>

                                <button type="button" onclick="leerFormularioReporte()" class="btn btn-success btn-lg" style="background-color: #28a745; color: white; border-radius: 5px;">
                                    🔊 Escuchar contenido
                                </button>
                                <button type="button" onclick="detenerLecturaFormularioReporte()" class="btn btn-danger btn-lg" style="background-color: #dc3545; color: white; border-radius: 5px;">
                                    🛑 Detener lectura
                                </button>

                            </div> 
                        </div>
                    </div> 
                    
                </div> 
                
            </div> 
        </div>
        <!-- End Page-content -->
    </form>
</div>

                
                
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

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

                             
  <!-- JAVASCRIPT -->
<script src="<?= base_url('assets/libs/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/libs/metismenu/metisMenu.min.js') ?>"></script>
<script src="<?= base_url('assets/libs/simplebar/simplebar.min.js') ?>"></script>
<script src="<?= base_url('assets/libs/node-waves/waves.min.js') ?>"></script>

<script src="<?= base_url('assets/libs/morris.js/morris.min.js') ?>"></script>
<script src="<?= base_url('assets/libs/raphael/raphael.min.js') ?>"></script>
<script src="<?= base_url('assets/libs/peity/jquery.peity.min.js') ?>"></script>

<script src="<?= base_url('assets/js/pages/dashboard.init.js') ?>"></script>
<script src="<?= base_url('assets/js/app.js') ?>"></script>
<script src="<?= base_url('assets/js/basico.js') ?>"></script>

<script src="<?= base_url('assets/js/validacion.js') ?>"></script>


        

    </body>
</html>
