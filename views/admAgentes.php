
<?php
    
    //head
    require('../views/modules/head.php');
    //conexion
    require('../config/Conexion.php');
?>
<body>

    <div class="d-flex">
        <!-- Sidebar -->
        <?php
            include('../views/modules/menuDash.php');
        ?>
        <!-- Sidebar Ends -->
        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand">
                <button class="toggler-btn" type="button">
                    <i class="bi bi-list"></i>
                </button>
                
            </nav>
            <main class="p-3">
                <!--Contenido de la pagina-->
                <div class="text-center bg-primary rounded-3">
                    <h4 class="text-white p-2">Crear agente</h4>
                </div>
                <div class="card p-4 shadow-lg rounded-3">
                    <form id="agente_form" method="POST">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <!-- Campos del formulario -->
                                    <div class="col-12 col-md-3 mb-3">
                                        <label for="add-nombre" class="form-label fw-bold">Nombre</label>
                                        <input type="text" class="form-control" id="add_nombre" name="nombre" required placeholder="Ingresa el nombre">
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                        <label for="add-apellidoP" class="form-label fw-bold">Apellido Paterno</label>
                                        <input type="text" class="form-control" id="add_apellidoP" name="apellidoP" required placeholder="Ingresa el apellido paterno">
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                        <label for="add-apellidoM" class="form-label fw-bold">Apellido Materno</label>
                                        <input type="text" class="form-control" id="add_apellidoM" name="apellidoM" required placeholder="Ingresa el apellido materno">
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                        <label class="fw-bold form-label">Sexo</label>
                                        <select class="form-select" name="sexo" id="add_sexo" required>
                                            <option value="" selected disabled>Seleccionar...</option>
                                            <option value="F">Femenino</option>
                                            <option value="M">Masculino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="add-telefono" class="form-label fw-bold">Teléfono</label>
                                        <input type="text" class="form-control" id="add_telefono" name="telefono" required placeholder="Ingresa el teléfono">
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="add-contraseña" class="form-label fw-bold">Contraseña</label>
                                        <input type="password" class="form-control" id="add_contraseña" name="contraseña" required placeholder="Ingresa la contraseña">
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="add-correo" class="form-label fw-bold">Correo</label>
                                        <input type="email" class="form-control" id="add_correo" name="correo" required placeholder="Ingresa el correo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- Botones del formulario -->
                            <button type="submit" class="btn btn-success mx-3">Crear</button>
                        </div>
                    </form>
                </div>



            </main>
        </div>
    </div>
    <!--javascript-->
   
    <?php
        include('../views/modules/js.php');
        include('../views/modals/modalAddAgente.php');
    ?>
     <!--js de agentes-->
     <script src="../views/js/agentes.js"></script>
</body>
</html>