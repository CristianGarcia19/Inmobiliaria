
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
                    <h4 class="text-white p-2">Listado de propiedades</h4>
                </div>
                <!--diseño personalizado-->
                <div class="table-responsive">
    <div class="d-flex mb-2">
        <a href="./admPropiedades.php" class="btn btn-success d-flex justify-content-center align-items-center px-3 py-1">Crear propiedad<i class="bi bi-building-add fs-4"></i></a>
    </div>
    <table class="table table-striped table-hover table-sm" id="tablaPropiedades">
        <thead class="table-dark rounded-top">
            <tr>
                <th scope="col">Id</th>
                <th scope="col" class="">Foto principal</th>
                <th scope="col" class="">Nombre</th>
                <th scope="col" class="">Categoria</th>
                <th scope="col" class="">Estado comercial</th>
                <th scope="col" class="">Precio</th>
                <th scope="col" class="">Area construida</th>
                <th scope="col" class="">Ubicación</th>
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
        include('../views/modals/modalPropiedades.php');
        include('../views/modals/modalAddAgente.php');
    ?>
     <!--js de propiedades-->
     <script src="../views/js/propiedades.js"></script>
</body>
</html>