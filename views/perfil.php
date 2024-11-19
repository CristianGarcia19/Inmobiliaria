
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
                <div class="text-center">
                    <h2 class="text-primary">Perfil</h2>
                </div>
                <!--diseño personalizado-->
                <div class="card p-4">
                    <!-- Campo oculto para el ID del usuario -->
                    <input type="hidden" id="id_usuarios" value="<?php echo $_SESSION['id_usuarios']; ?>" />

                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="form-group">
                            <label for="nombre" class="fw-bold">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="form-group">
                            <label for="apellidoP" class="fw-bold">Apellido Paterno</label>
                            <input type="text" class="form-control" name="apellidoP" id="apellidoP">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="form-group">
                            <label for="apellidoM" class="fw-bold">Apellido Materno</label>
                            <input type="text" class="form-control" name="apellidoM" id="apellidoM">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                        <label class="fw-bold">Sexo</label>
                        <select class="form-select" name="sexo" id="sexo">
                            <option class="dropdown-toggle"></option>
                            <option value="F">Femenino</option>
                            <option value="M">Masculino</option>
                        </select>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-5 mb-3">
                        <div class="form-group">
                            <label for="correo " class="fw-bold">Correo Electronico</label>
                            <input type="email" class="form-control" name="correo" id="correo">
                        </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="form-group">
                            <label for="contraseña" class="fw-bold">Contraseña</label>
                            <input type="text" class="form-control" name="contraseña" id="contraseña">
                        </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
                        <div class="form-group">
                            <label for="telefono" class="fw-bold">Telefono</label>
                            <input type="number" class="form-control" name="telefono" id="telefono">
                        </div>
                        </div>
                    </div>
                
                    <div class="text-center d-grid gap-2 col-5 col-sm-4 col-md-2 mx-auto" name="#btn">
                        <button class="btn btn-primary mt-3" id="btnactualizar">Actualizar</button>
                    </div>
                    </div>
            </main>
        </div>
    </div>
    <!--javascript-->
    <?php
        include('../views/modules/js.php');
    ?>
    <script src="../views/js/usuarios.js"></script>
</body>
</html>