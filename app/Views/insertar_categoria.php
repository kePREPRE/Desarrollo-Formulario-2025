<?php
session_start();
ini_set('error_reporting',0);
include 'includes/conexion.php';
include 'assets/includes/header.php';

?>
<script>
// Variables para controlar la lectura
let vozFormularioCategoria = null;

// Función para leer el formulario de crear categoría
function leerFormulario() {
    if (vozFormularioCategoria) {
        window.speechSynthesis.cancel();
    }

    let texto = '';

    texto += document.querySelector('h4.card-title').innerText + '. ';
    texto += 'Nombre de la categoría: ' + document.getElementById('txtNombreC').placeholder + '. ';
    texto += 'Descripción de la categoría: ' + document.getElementById('txtDescripcionC').placeholder + '. ';

    if ('speechSynthesis' in window) {
        vozFormularioCategoria = new SpeechSynthesisUtterance(texto);
        vozFormularioCategoria.lang = 'es-ES';
        vozFormularioCategoria.rate = 0.9;
        vozFormularioCategoria.pitch = 1;
        window.speechSynthesis.speak(vozFormularioCategoria);
    } else {
        alert("❌ Tu navegador no soporta la lectura de voz.");
    }
}
x
// Función para detener la lectura
function detenerLecturaFormulario() {
    if ('speechSynthesis' in window) {
        window.speechSynthesis.cancel();
        vozFormularioCategoria = null;
    }
}
</script>

<div class="main-content">
    <form id="formCategorias" aria-label="Formulario para crear una nueva categoría">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="miElemento">
                                <h4 class="card-title text-center" style="color: #2C3E50;" tabindex="0" title="Formulario para crear una categoría">
                                    Formulario Crear Categoría
                                </h4>   
                            </div> 
                        </div>
                    </div> 

                    <div class="col-md-6">
                        <div class="card card-body">

                            <div class="mb-3">
                                <label class="form-label" for="txtNombreC" tabindex="0" title="Campo para escribir el nombre de la categoría">
                                    Nombre De La Categoría
                                </label>
                                <input type="text" class="form-control form-control-lg validacion campoInicial" tabindex="0" id="txtNombreC" name="txtNombreC" value="" placeholder="Digite el nombre de la categoría" title="Ingrese el nombre de la categoría" aria-required="true">
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-body">
                            <div class="mb-3">
                                <label class="form-label" for="txtDescripcionC" tabindex="0" title="Campo para escribir la descripción de la categoría">
                                    Descripción De La Categoría
                                </label>
                                <input type="text" class="form-control form-control-lg validacion campoInicial" tabindex="0" id="txtDescripcionC" name="txtDescripcionC" value="" placeholder="Digite la descripción de la categoría" title="Ingrese la descripción de la categoría" aria-required="true">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center">

                                <div style="display: none;width:350px;margin:auto;" id="mensaje" class="alert alert-info" role="alert" tabindex="0" title="Mensaje de confirmación: información almacenada">
                                    <strong>Información</strong> almacenada satisfactoriamente.
                                </div>

                                <div style="display: none;width:350px;margin:auto;" id="mensaje2" class="alert alert-danger" role="alert" tabindex="0" title="Mensaje de error: campos vacíos requeridos">
                                    <strong>Campos Vacíos</strong> requeridos.
                                </div>

                                <br>

                                <div class="trasparente">
                                    <button tabindex="0" id="btnCrearCategoria" class="btn btn-lg waves-effect waves-light" type="submit" style="background: linear-gradient(to right, #4B8B3B, #6DBE45); color: white;" title="Botón para guardar la nueva categoría">
                                        Guardar Categoría
                                    </button>
                                </div>

                                <br><br>

                                <button tabindex="0" type="button" onclick="leerFormulario()" class="btn btn-success btn-lg" style="background-color: #28a745; color: white; border-radius: 5px;" title="Botón para activar lectura del contenido del formulario">
                                    🔊 Escuchar contenido
                                </button>
                                <button tabindex="0" type="button" onclick="detenerLecturaFormulario()" class="btn btn-danger btn-lg" style="background-color: #dc3545; color: white; border-radius: 5px;" title="Botón para detener la lectura del formulario">
                                    🛑 Detener lectura
                                </button>

                            </div> 
                        </div>
                    </div> 

                </div> <!-- row -->
            </div> <!-- container-fluid -->
        </div> <!-- page-content -->
    </form>
</div> <!-- main-content -->


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
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch">
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox"  id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
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


        

    </body>
</html>
