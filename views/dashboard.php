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
                                                
                    </div>
                    <div class="row">
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
            </main>
        </div>
    </div>
    <?php
        include('../views/modules/js.php');
    ?>
    <script src="../views/js/inicio.js"></script>
</body>
</html>