<?php
include 'assets/includes/header.php';

?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const formulario = document.getElementById('formUsuarios');
    const mensajeError = document.getElementById('mensajeError');

    formulario.addEventListener('submit', function (evento) {
        // Siempre detenemos el envío primero
        evento.preventDefault(); 

        let nombre = document.getElementById('txtNomUsuario').value.trim();
        let correo = document.getElementById('txtCorrUsuario').value.trim();
        let errores = [];
        let regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Limpiar errores anteriores
        mensajeError.innerHTML = '';

        // Validaciones
        if (nombre === '') {
            errores.push('✨ Por favor, escribe tu nombre.');
        }
        if (correo === '') {
            errores.push('📧 Por favor, escribe tu correo.');
        } else if (!regexCorreo.test(correo)) {
            errores.push('⚠️ El correo electrónico no es válido.');
        }

        if (errores.length > 0) {
            // Si hay errores, los mostramos
            mensajeError.innerHTML = errores.map(error => `<p style="color: red;">${error}</p>`).join('');
        } else {
            // Si NO hay errores, entonces enviamos el formulario manualmente
            mensajeError.innerHTML = '<p style="color: green;">✅ ¡Formulario enviado correctamente!</p>';
            formulario.submit(); // <<< FORZAMOS ENVÍO
        }
    });
});
</script>


<script>
// Variables para controlar la lectura
let vozFormulario = null;

// Función para leer el formulario
function leerFormulario() {
    if (vozFormulario) {
        window.speechSynthesis.cancel();
    }

    let texto = '';

    texto += document.querySelector('h4.card-title').innerText + '. ';
    texto += 'Nombre del usuario: ' + document.getElementById('txtNomUsuario').placeholder + '. ';
    texto += 'Correo del usuario: ' + document.getElementById('txtCorrUsuario').placeholder + '. ';
    texto += 'Contraseña: ' + document.getElementById('txtConUsuarios').placeholder + '. ';
    texto += 'Fecha de registro: ' + document.getElementById('txtFechUsuarios').placeholder + '. ';

    if ('speechSynthesis' in window) {
        vozFormulario = new SpeechSynthesisUtterance(texto);
        vozFormulario.lang = 'es-ES';
        vozFormulario.rate = 0.9;
        vozFormulario.pitch = 1;
        window.speechSynthesis.speak(vozFormulario);
    } else {
        alert("❌ Tu navegador no soporta la lectura de voz.");
    }
}

// Función para detener la lectura
function detenerLecturaFormulario() {
    if ('speechSynthesis' in window) {
        window.speechSynthesis.cancel();
        vozFormulario = null;
    }
}
</script>

<div class="main-content">
    <form id="formUsuarios" action="/usuarios/crear" method="POST">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="tituloFormulario">
                                <h4 class="card-title text-center estilo">Formulario Crear Usuario</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-body">

                            <div class="mb-3">
                                <label class="form-label" for="txtNomUsuario">Nombre Del Usuario</label>
                                <input type="text" class="form-control form-control-lg validacion" tabindex="0" id="txtNomUsuario" name="txtNomUsuario" value="" placeholder="Digite El Nombre Del Usuario" required title="Nombre Del Usuario"> 
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="txtCorrUsuario">Correo Del Usuario</label>
                                <input type="text" class="form-control form-control-lg validacion" tabindex="0"  id="txtCorrUsuario" name="txtCorrUsuario" value="" placeholder="Digite El Correo Del Usuario" required title="Correo Del Usuario">
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-body">

                            <div class="mb-3">
                                <label class="form-label" for="txtConUsuarios">Contraseña</label>
                                <input type="text" class="form-control form-control-lg validacion"tabindex="0"  id="txtConUsuarios" name="txtConUsuarios" placeholder="Digite La Contraseña Del Usuario" required title="Contraseña Del Usuario">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="txtFechUsuarios">Fecha De Registro</label>
                                <input type="date" class="form-control form-control-lg validacion" tabindex="0" id="txtFechUsuarios" name="txtFechUsuarios" required title="Fecha De Registro" value="<?= date('Y-m-d') ?>">
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
                                    <button tabindex="0" id="btnCrearUsuario" class="btn btn-lg waves-effect waves-light" type="submit" style="background: linear-gradient(to right, #4B8B3B, #6DBE45); color: white;"  title=" Guardar Usuario">
                                        Guardar Usuario
                                    </button>
                                </div>

                                <br><br><br>

                                <button tabindex="0" type="button" onclick="leerFormulario()" class="btn btn-success btn-lg"  title="Detener lectura">
                                    🔊 Escuchar contenido
                                </button>
                                <button tabindex="0" type="button" onclick="detenerLecturaFormulario()" class="btn btn-danger btn-lg" title="Detener lectura">
                                    🛑 Detener lectura
                                </button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                      

        
                        
                
                
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


        

    </body>
</html>
