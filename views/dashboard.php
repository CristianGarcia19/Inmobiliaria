<?php

    require('../config/Conexion.php');

    include('modules/head.php');

?>
<body>
    <!--js-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php        
        
        
        if (isset($_SESSION['bienvenida'])) {
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: '" . $_SESSION['bienvenida'] . "',
                        confirmButtonText: 'Aceptar'
                    });
                </script>";
            unset($_SESSION['bienvenida']); // Elimina el mensaje después de mostrarlo
        }
    ?>
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
                <div class="container">
                    <div class="row">
                        <!-- Tarjeta 1 -->
                        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                            <div class="card bg-card-1 text-white">
                                <div class="card-body d-flex align-items-center">
                                    <div>
                                        <h2 class="card-tittle" id="total_agentes">#</h2>
                                        <p class="card-text">N° de agentes</p>
                                    </div>
                                    <div class="ms-auto">
                                        <i class="bi bi-person-video3 fs-1"></i>
                                    </div>
                                </div>
                                <div class="card-footer text-center m-0 p-0 ">
                                    <a href="./agentes.php" class="btn btn-1 btn-sm w-100 text-white">Ver mas <i class="bi bi-arrow-right-circle-fill"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Tarjeta -->
                        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                            <div class="card bg-card-4 text-white">
                                <div class="card-body d-flex align-items-center">
                                    <div>
                                        <h2 class="card-tittle" id="total_clientes">#</h2>
                                        <p class="card-text">N° de clientes</p>
                                    </div>
                                    <div class="ms-auto">
                                        <i class="bi bi-person-video3 fs-1"></i>
                                    </div>
                                </div>
                                <div class="card-footer text-center m-0 p-0 ">
                                    <a href="./clientes.php" class="btn btn-4 btn-sm w-100 text-white">Ver mas <i class="bi bi-arrow-right-circle-fill"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Tarjeta 2 -->
                        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                            <div class="card bg-card-2 text-white">
                                <div class="card-body d-flex align-items-center">
                                    <div>
                                        <h2 class="card-tittle">#</h2>
                                        <p class="card-text">Casas en venta</p>
                                    </div>
                                    <div class="ms-auto">
                                        <i class="bi bi-house fs-1"></i>
                                    </div>
                                </div>
                                <div class="card-footer text-center m-0 p-0 ">
                                    <a href="" class="btn btn-2 btn-sm w-100 text-white">Ver mas <i class="bi bi-arrow-right-circle-fill"></i></a>
                                </div>
                            </div>
                        </div> 
                        <!-- Tarjeta 3 -->
                        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                            <div class="card text-white bg-card-2">
                                <div class="card-body d-flex align-items-center">
                                    <div>
                                        <h2 class="card-tittle">#</h2>
                                        <p class="card-text">Casas en arriendo</p>
                                    </div>
                                    <div class="ms-auto">
                                        <i class="bi bi-house fs-1"></i>
                                    </div>
                                </div>
                                <div class="card-footer text-center m-0 p-0 ">
                                    <a href="" class="btn btn-2 btn-sm w-100 text-white">Ver mas <i class="bi bi-arrow-right-circle-fill"></i></a>
                                </div>
                            </div>
                        </div>  
                        <!-- Tarjeta 4 -->
                        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                            <div class="card bg-card-3">
                                <div class="card-body d-flex align-items-center">
                                    <div>
                                        <h2 class="card-tittle">#</h2>
                                        <p class="card-text">Apartamentos en venta</p>
                                    </div>
                                    <div class="ms-auto">
                                        <i class="bi bi-building fs-1"></i>
                                    </div>
                                </div>
                                <div class="card-footer text-center m-0 p-0 ">
                                    <a href="" class="btn btn-3 btn-sm w-100">Ver mas <i class="bi bi-arrow-right-circle-fill"></i></a>
                                </div>
                            </div>
                        </div> 
                        <!-- Tarjeta 5 -->
                        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                            <div class="card bg-card-3">
                                <div class="card-body d-flex align-items-center">
                                    <div>
                                        <h2 class="card-tittle">#</h2>
                                        <p class="card-text">Apartamentos en arriendo</p>
                                    </div>
                                    <div class="ms-auto">
                                        <i class="bi bi-building fs-1"></i>
                                    </div>
                                </div>
                                <div class="card-footer text-center m-0 p-0 ">
                                    <a href="" class="btn btn-3 btn-sm w-100">Ver mas <i class="bi bi-arrow-right-circle-fill"></i></a>
                                </div>
                            </div>
                        </div>                         
                    </div>
                    
                </div>

                <div class="container d-flex">
                    <div class="container">
                        <h2>Contenido para clientes interesados en las casas</h2>
                    </div>
                    <div class="container bg-body-secondary rounded">
                        <h2 class="text-center">Contenido para posibles clientes</h2>
                        <table class="table table-striped table-hover table-sm" id="tablaAgentesDash">
                            <thead class="table-dark rounded-top">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col" class="">Nombre</th>
                                    <th scope="col" class="">Apellido Paterno</th>                        
                                    <th scope="col" class="">Telefono</th>            
                                    <th scope="col" class="">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Datos dinámicos -->
                                <tr>
                                    <td>1</td>
                                    <td>Crisdtian</td>
                                    <td>Garcia</td>
                                    <td>3104061452</td>
                                    <td>
                                        <button class="btn btn-info text-white"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-danger"><i class="bi bi-x-circle"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>




            </main>
        </div>
    </div>
    <?php
        include('../views/modules/js.php');
    ?>
    <script src="../views/js/inicio.js"></script>
    <script src="../views/js/clientes.js"></script>
</body>
</html>