
<?php
    
    //head
    require('../views/modules/head.php');
    //conexion
    require('../config/Conexion.php');
    require_once('../controllers/propiedades.php');
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
                    <h4 class="text-white p-2">Crear propiedad</h4>
                </div>
                <div class="card p-4 shadow-lg rounded-3">
                    <form id="propiedad_form" method="POST">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <!-- Nombre de la propiedad -->
                                    <div class="col-12 col-md-8 col-sm-6 mb-3">
                                        <label for="nombre" class="form-label fw-bold">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Nombre de la propiedad">
                                    </div>

                                    

                                    <!-- Descripción de la propiedad -->
                                    <div class="col-12 col-md-12  mb-3">
                                        <label for="descripcion" class="form-label fw-bold">Descripción</label>
                                        <textarea class="form-control" id="descripcion" name="descripcion" required placeholder="Descripción de la propiedad"></textarea>
                                    </div>

                                    <!-- Imagen principal -->
                                    <div class="col-12 col-md-12 mb-3">
                                        <label for="img_principal" class="form-label fw-bold">Imagen principal</label>
                                        <input type="file" class="form-control" id="img_principal" name="img_principal" required>
                                    </div>

                                    

                                    <!-- Precio -->
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="precio" class="form-label fw-bold">Precio</label>
                                        <input type="number" class="form-control" id="precio" name="precio" required placeholder="Precio de la propiedad">
                                    </div>

                                    <!-- Área construida -->
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="areaConstruida" class="form-label fw-bold">Área construida</label>
                                        <input type="number" class="form-control" id="areaConstruida" name="areaConstruida" required placeholder="...m²">
                                    </div>

                                    <!-- Año de construcción -->
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="añoConstruccion" class="form-label fw-bold">Año de construcción</label>
                                        <input type="number" class="form-control" id="añoConstruccion" name="añoConstruccion" required placeholder="1902...">
                                    </div>

                                    <!-- baños -->
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="baños" class="form-label fw-bold">N° de baños:</label>
                                        <input type="number" class="form-control" id="baños" name="baños" required placeholder="Baños">
                                    </div>

                                    <!-- habitaciones -->
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="habitaciones" class="form-label fw-bold">N° de habitaciones:</label>
                                        <input type="number" class="form-control" id="habitaciones" name="habitaciones" required placeholder="Habitaciones">
                                    </div>

                                    <!-- pisos -->
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="habitaciones" class="form-label fw-bold">N° de pisos:</label>
                                        <input type="number" class="form-control" id="pisos" name="pisos" required placeholder="Pisos">
                                    </div>

                                    <!-- garaje -->
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="habitaciones" class="form-label fw-bold">Garajes:</label>
                                        <input type="number" class="form-control" id="garaje" name="garaje" required placeholder="Garajes">
                                    </div>

                                    <!-- estrato -->
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="habitaciones" class="form-label fw-bold">Estrato:</label>
                                        <input type="number" class="form-control" id="estrato" name="estrato" required placeholder="Estrato">
                                    </div>

                                    <!-- Estado de la propiedad -->
                                    <div class="col-12 col-md-4 col-sm-6 mb-3">
                                        <label for="estadoPropiedad" class="form-label fw-bold">Estado de la propiedad</label>
                                        <select class="form-select" id="estadoPropiedad" name="estadoPropiedad" required>
                                            <?php foreach ($estado_propiedad as $estado): ?>
                                                <option value="<?= $estado['id_estado'] ?>"><?= $estado['nombreEstado'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <!-- Ciudad -->
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="id_ciudad" class="form-label fw-bold">Ciudad</label>
                                        <select class="form-select" id="id_ciudad" name="id_ciudad" required>
                                            <?php foreach ($lista_ciudades as $ciudades): ?>
                                                <option value="<?= $ciudades['id_ciudad'] ?>"><?= $ciudades['nombreCiudad'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <!-- Departamento -->
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="id_departamento" class="form-label fw-bold">Departamento</label>
                                        <select class="form-select" id="id_departamento" name="id_departamento" required>
                                            <?php foreach ($lista_departamentos as $departamento): ?>
                                                <option value="<?= $departamento['id_departamento'] ?>"><?= $departamento['nombreDepartamento'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <!-- Categoría -->
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="id_categoria" class="form-label fw-bold">Categoría</label>
                                        <select class="form-select" id="id_categoria" name="id_categoria" required>
                                            <!-- Llenar con las categorías disponibles -->
                                            <?php foreach ($lista_categoria_propiedad as $categoria_propiedad): ?>
                                                <option value="<?= $categoria_propiedad['id_categoria'] ?>"><?= $categoria_propiedad['nombreCategoria'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <!-- Agente -->
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="id_agente" class="form-label fw-bold">Agente</label>
                                        <select class="form-select" id="id_agente" name="id_agente" required>
                                            <!-- Llenar con los agentes disponibles -->
                                            <?php foreach ($lista_agentes as $agentes): ?>
                                                <option value="<?= $agentes['id_agente'] ?>"><?= $agentes['nombre'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <!-- Características Internas -->
                                    <div class="col-12 col-md-12 mb-3">
                                        <label for="caracteristicas_internas" class="form-label fw-bold">Características Internas:</label>
                                        <select id="caracteristicas_internas" name="caracteristicas_internas[]" class="form-select" multiple="multiple">
                                            <!-- Opciones cargadas dinámicamente -->
                                            <?php foreach ($lista_carac_internas as $caracteristicas_internas): ?>
                                                <option value="<?= $caracteristicas_internas['id_caracteristica_interna'] ?>"><?= $caracteristicas_internas['nombre'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <!-- Características externas -->
                                    <div class="col-12 col-md-12 mb-3">
                                        <label for="caracteristicas_externas" class="form-label fw-bold">Características externas:</label>
                                        <select id="caracteristicas_externas" name="caracteristicas_externas[]" class="form-select" multiple="multiple">
                                            <!-- Opciones cargadas dinámicamente -->
                                            <?php foreach ($lista_carac_externas as $caracteristicas_externas): ?>
                                                <option value="<?= $caracteristicas_externas['id_caracteristica_externa'] ?>"><?= $caracteristicas_externas['nombre'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
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
     <script src="../views/js/propiedades.js"></script>
</body>
</html>