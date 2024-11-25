<header class="bg-primary py-3 text-white">
        <div class="container d-flex justify-content-between align-items-center">
        
            <!-- Logo y Nombre -->
            <div class="d-flex align-items-center">
                <a href="../index.php" class=""><img src="../public/img/logodash.png" alt="logo-dashboard" class="me-2 logo-dashboard"></a>
                <a href="../index.php" class="nav-linkk text-white tittle-header">Inmoweb</a>
            </div>
            
            <!-- Menú de Navegación -->
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle" href="#servicios" id="dropdownServicios" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu bg-primary border-0" aria-labelledby="dropdownServicios">
                            <li><a class="dropdown-item text-white" href="../views/venta.php">Venta</a></li>
                            <li><a class="dropdown-item text-white" href="../views/arriendo.php">Arriendo</a></li>
                            <li><a class="dropdown-item text-white" href="../views/fotografia.php">Fotografía</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Inmuebles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white me-2" href="../views/contacto.php">Contacto</a>
                    </li>
                    <a href="./login.php"><button class="btn btn-info text-white btn-ingresar">Ingresar</button></a>
                </ul>
            </nav>        
        </div>
    </header>