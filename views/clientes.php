
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
                    <h4 class="text-white p-2">Listado de clientes</h4>
                </div>
                <!--diseño personalizado-->
                <div class="table-responsive">
    <div class="d-flex mb-2">
        <button id="btncrearCliente" data-bs-toggle="modal" data-bs-target="#ClienteModal" class="btn btn-success d-flex justify-content-center align-items-center px-3 py-1">Crear cliente<i class="bi bi-person-add fs-4 mx-1"></i></button>
    </div>
    <table class="table table-striped table-hover table-sm" id="tablaAgentes">
        <thead class="table-dark rounded-top">
            <tr>
                <th scope="col">Id</th>
                <th scope="col" class="">Nombre</th>
                <th scope="col" class="">Apellido Paterno</th>
                <th scope="col" class="">Apellido Materno</th>
                <th scope="col" class="">Sexo</th>
                <th scope="col" class="">Telefono</th>
                <th scope="col" class="">Contraseña</th>
                <th scope="col" class="">Correo</th>
                <th scope="col" class="">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Datos dinámicos -->
            
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
        include('../views/modals/modalAddCliente.php');
    ?>
     <!--js de agentes-->
     <script src="../views/js/clientes.js"></script>
</body>
</html>