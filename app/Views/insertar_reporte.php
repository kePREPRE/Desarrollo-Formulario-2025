<?php
session_start();
ini_set('error_reporting',0);
include 'includes/conexion.php';
include 'assets/includes/header.php';

?>







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
                                <input type="text" tabindex="0" class="form-control form-control-lg validacion" id="nomReporte" name="nomReporte" value="" placeholder="Digite El Nombre Del Reporte" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="desReporte">Descripción Del Reporte</label>
                                <input type="text" tabindex="0" class="form-control form-control-lg validacion" id="desReporte" name="desReporte" value="" placeholder="Digite La Descripción del Reporte" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="fechReporte">Fecha Del Reporte</label>
                                <input type="date" tabindex="0"  class="form-control form-control-lg validacion" id="fechReporte" name="fechReporte" required>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-body">
                            
                            <div class="mb-3">
                                <label for="usuReporte" class="form-label">Usuarios</label>
                                <select class="form-select validacion" id="usuReporte" name="usuReporte" required tabindex="0">
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
                                <select class="form-select validacion" id="catReporte" name="catReporte" required tabindex="0">
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
                                <select class="form-select validacion" id="estaReporte" name="estaReporte" required tabindex="0">
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
                                    <button tabindex="0" id="btnCrearReporte" class="btn btn-lg waves-effect waves-light" type="submit" style="background: linear-gradient(to right, #4B8B3B, #6DBE45); color: white;">
                                        Guardar Reporte
                                    </button>
                                </div>
                                
                                <br><br>

                                <button  tabindex="0" type="button" onclick="leerFormularioReporte()" class="btn btn-success btn-lg" style="background-color: #28a745; color: white; border-radius: 5px;">
                                    🔊 Escuchar contenido
                                </button>
                                <button  tabindex="0" type="button" onclick="detenerLecturaFormularioReporte()" class="btn btn-danger btn-lg" style="background-color: #dc3545; color: white; border-radius: 5px;">
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

<script src="<?= base_url('assets/js/validacion.js') ?>"></script>


        

    </body>
</html>
