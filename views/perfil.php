
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
                <div class="container">

                    <!-- Campo oculto para el ID del usuario -->
                    <input type="hidden" id="id_usuarios" value="<?php echo $_SESSION['id_usuarios']; ?>" />

                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="form-group">
                            <label for="nombre" class="fw-bold">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="form-group">
                            <label for="apellidoP" class="fw-bold">Apellido Paterno</label>
                            <input type="text" class="form-control" name="apellidoP" id="apellidoP" placeholder="Ingrese su nombre">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="form-group">
                            <label for="apellidoM" class="fw-bold">Apellido Materno</label>
                            <input type="text" class="form-control" name="apellidoM" id="apellidoM" placeholder="Ingrese su nombre">
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
                          <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo">
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="form-group">
                          <label for="contraseña" class="fw-bold">Contraseña</label>
                          <input type="text" class="form-control" name="contraseña" id="contraseña" placeholder="Admin">
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
                        <div class="form-group">
                          <label for="telefono" class="fw-bold">Telefono</label>
                          <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Ingrese su telefono">
                        </div>
                      </div>
                    </div>
                  
                    <div class="text-center d-grid gap-2 col-2 mx-auto">
                      <button class="btn btn-primary my-3" id="btnactualizar">Editar</button>
                    </div>
                  </div>
            </main>
        </div>
    </div>
    <!--javascript-->
    <?php
        include('../views/modules/js.php');
        include('././');
    ?>
</body>
</html>