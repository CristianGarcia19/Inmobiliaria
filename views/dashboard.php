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
                
            </main>
        </div>
    </div>
    <?php
        include('../views/modules/js.php');
    ?>
</body>
</html>