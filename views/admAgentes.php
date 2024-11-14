
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
                    <h2 class="text-primary py-2">Listado de agentes</h2>
                </div>
                <!--diseño personalizado-->
                <div class="container">
                    <table class="table table-striped table-hover " id="tablaAgentes">                        
                        <thead class="table table-info">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido Paterno</th>
                                <th scope="col">Apellido Materno</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Contraseña</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--Datos dinamicos-->
                        </tbody>
                    </table>
                    <div id="paginacion" class="text-center mt-3">
                        <!-- Los enlaces de paginación se mostrarán aquí -->
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!--javascript-->
   
    <?php
        include('../views/modules/js.php');
        include('../views/modals/modalAgentes.php');
    ?>
     <!--js de agentes-->
     <script src="../views/js/agentes.js"></script>
</body>
</html>