<?php
session_start();
ini_set('error_reporting',0);
include 'includes/conexion.php';
include 'assets/includes/header.php';

?>             </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
             
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Data Tables</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="#">Foxia</a></li>
                                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                           
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<div class="row" id="tablePC">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title text-center" id="tituloLectura" style="color: #2C3E50;">Ingreso de Categorías</h4>
                <p class="card-title-desc text-center" id="descripcionLectura" style="color: #7F8C8D;">
                    Aquí encontrarás todas las categorías de productos disponibles en tu catálogo. Gestiona la organización de tu inventario, edita nombres o elimina categorías fácilmente.
                </p>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; border: 1px solid #ddd;">
                    <thead>
                        <tr style="background-color: #34495E; color: white;">
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody id="contenidoTabla">
                        <?php foreach ($categorias as $categoria) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($categoria["nombre"]); ?></td>
                                <td><?php echo htmlspecialchars($categoria["descripcion"]); ?></td>

                                <td>
                                    <a href="<?= base_url('editarReporte/' . $categoria['id_Categoria']) ?> "tabindex="0"  class="btn btn-outline-primary btn-sm editar" title="Editar" style="background-color: #007bff; color: white; border-radius: 5px;">
                                        <i class="fas fa-file-alt"></i> Editar
                                    </a>
                                </td>

                                <td>
                                    <a class="btn btn-outline-danger btn-sm sa-warning eliminarIDCategoria"tabindex="0"  data-id="<?php echo $categoria['id_Categoria'] ?>" title="Eliminar" style="background-color: #dc3545; color: white; border-radius: 5px;">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <br>

                <div class="text-center">
                     <button tabindex="0" onclick="leerContenidoReportes()" class="btn btn-success btn-lg" title="Escuchar los datos de la tabla">
                        🔊 Escuchar contenido de la tabla
                    </button>
                    <button tabindex="0" onclick="detenerLectura()" class="btn btn-danger btn-lg" title="Detener lectura">
                        🛑 Detener lectura
                    </button>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!-- SCRIPT PARA EL LECTOR DE VOZ -->
<script>
let vozCategorias = null;

function leerContenidoCategorias() {
    if (vozCategorias) {
        window.speechSynthesis.cancel();
    }

    let titulo = document.getElementById('tituloLectura').innerText;
    let descripcion = document.getElementById('descripcionLectura').innerText;
    let contenidoTabla = "";

    const filas = document.querySelectorAll('#contenidoTabla tr');
    filas.forEach(fila => {
        const columnas = fila.querySelectorAll('td');
        contenidoTabla += 'Nombre: ' + columnas[0].innerText + '. ';
        contenidoTabla += 'Descripción: ' + columnas[1].innerText + '. ';
    });

    let textoFinal = titulo + ". " + descripcion + ". " + contenidoTabla;

    if ('speechSynthesis' in window) {
        vozCategorias = new SpeechSynthesisUtterance(textoFinal);
        vozCategorias.lang = 'es-ES';
        vozCategorias.rate = 0.9;
        vozCategorias.pitch = 1;
        window.speechSynthesis.speak(vozCategorias);
    } else {
        alert("❌ Tu navegador no soporta la lectura de voz.");
    }
}

function detenerLecturaCategorias() {
    if ('speechSynthesis' in window) {
        window.speechSynthesis.cancel();
        vozCategorias = null;
    }
}
</script>


                
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
<script src="<?php echo base_url('assets/libs/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/metismenu/metisMenu.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/simplebar/simplebar.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/node-waves/waves.min.js') ?>"></script>

<!-- Required datatable js -->
<script src="<?php echo base_url('assets/libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>

<!-- Buttons examples -->
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/jszip/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/pdfmake/build/pdfmake.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/pdfmake/build/vfs_fonts.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') ?>"></script>

<!-- Responsive examples -->
<script src="<?php echo base_url('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') ?>"></script>

<!-- Datatable init js -->
<script src="<?php echo base_url('assets/js/pages/datatables.init.js') ?>"></script> 

<script src="<?php echo base_url('assets/js/app.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-3.7.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/basico.js') ?>"></script>

    </body>
</html>
