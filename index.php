<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmoweb</title>
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--custom-->
    <link rel="stylesheet" href="./public/css/bootstrap-custom.css">
    <!--css-->
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/cards.css">
    <!--favicon-->
    <link rel="shortcut icon" href="./public/img/logodash.png" type="image/x-icon">
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="bg-primary py-3 text-white">
        <div class="container d-flex justify-content-between align-items-center">
        
            <!-- Logo y Nombre -->
            <div class="d-flex align-items-center">
                <a href="./public/html/index.html" class=""><img src="./public/img/logodash.png" alt="logo-dashboard" class="me-2 logo-dashboard"></a>
                <a href="./public/html/index.html" class="nav-linkk text-white tittle-header">Inmoweb</a>
            </div>
            
            <!-- Menú de Navegación -->
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./public/html/index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Inmuebles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white me-2" href="./public/html/contacto.html">Contacto</a>
                    </li>
                    <a href="./views/login.php"><button class="btn btn-info text-white btn-ingresar">Ingresar</button></a>
                </ul>
            </nav>        
        </div>
    </header>

    <!--banner-->
    <div id="carouselExample" class="carousel slide position-relative" data-bs-ride="carousel">
        <!-- Barra de búsqueda en el centro -->
        <div class="search-bar-container py-5">
            <h1 class="text-white text-center mb-5">Conéctate con tu nuevo espacio, encuentra tu hogar ideal</h1>
            <form class="row g-2 d-flex justify-content-center align-items-center">
                <div class="col-md-3">
                    <select class="form-select" aria-label="Tipo de Inmueble">
                        <option selected>Tipo de Inmueble</option>
                        <option value="1">Casa</option>
                        <option value="2">Apartamento</option>
                        <option value="3">Oficina</option>
                        <!-- Añadir más opciones según sea necesario -->
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" aria-label="Tipo de Negocio">
                        <option selected>Tipo de Negocio</option>
                        <option value="1">Venta</option>
                        <option value="2">Arriendo</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" aria-label="Ciudad">
                        <option selected>Ciudad</option>
                        <option value="1">Girardot</option>
                        <option value="2">Bogotá</option>
                        <option value="3">Medellín</option>
                        
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-info w-100 text-white" type="submit">Buscar <i class="bi bi-search"></i></button>
                    
                </div>
            </form>
        </div>
    
        <div class="carousel-inner">
            <!-- Imagen única del carrusel con superposición oscura -->
            <div class="carousel-item active img-banner" style="background-image: url('./public/img/banner1.jpg');"></div>
        </div>
    </div>
    
    
    <!--carousel inmuebles-->
    <div class="container">
        <div class="text-center my-5 text-primary">
            <h2 class="fw-bold">Inmuebles</h2>
        </div>
        <div id="propertyCarousel" class="carousel slide  px-5" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner d-flex py-3">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-4">
                            <a href="#" class="card">
                                <img src="./public/img/casas/casa1.jpg" class="card-img-top img-fluid" alt="Propiedad 1">
                                <div class="card-body">
                                    <p class="text-muted">En venta</p>
                                    <h5 class="card-title">Rosa blanca</h5>
                                    <p class="card-precio m-0">$245.000.000</p>
                                    <span class="d-flex align-items-center"><i class="bi bi-geo-alt fs-3 me-1"></i>Ubicación: Medellín</span>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-bed fs-3 me-1'></i> 4</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-car fs-3 me-1'></i> 3</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-bath fs-3 me-1'></i> 3</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-shape-triangle fs-3 me-1'></i> 200 m²</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#" class="card">
                                <img src="./public/img/casas/casa2.jpg" class="card-img-top img-fluid" alt="Propiedad 2">
                                <div class="card-body">
                                    <p class="text-muted">En venta</p>
                                    <h5 class="card-title">Casa Amarilla</h5>
                                    <p class="card-precio m-0">$300.000.000</p>
                                    <span class="d-flex align-items-center"><i class="bi bi-geo-alt fs-3 me-1"></i>Ubicación: Bogotá</span>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-bed fs-3 me-1'></i> 5</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-car fs-3 me-1'></i> 2</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-bath fs-3 me-1'></i> 4</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-shape-triangle fs-3 me-1'></i> 250 m²</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#" class="card">
                                <img src="./public/img/casas/casa3.jpg" class="card-img-top img-fluid" alt="Propiedad 3">
                                <div class="card-body">
                                    <p class="text-muted">En venta</p>
                                    <h5 class="card-title">Casa Verde</h5>
                                    <p class="card-precio m-0">$175.000.000</p>
                                    <span class="d-flex align-items-center"><i class="bi bi-geo-alt fs-3 me-1"></i>Ubicación: Cali</span>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-bed fs-3 me-1'></i> 3</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-car fs-3 me-1'></i> 1</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-bath fs-3 me-1'></i> 2</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-shape-triangle fs-3 me-1'></i> 150 m²</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4">
                            <a href="#" class="card">
                                <img src="./public/img/casas/casa1.jpg" class="card-img-top img-fluid" alt="Propiedad 4">
                                <div class="card-body">
                                    <p class="text-muted">En venta</p>
                                    <h5 class="card-title">Casa Azul</h5>
                                    <p class="card-precio m-0">$200.000.000</p>
                                    <span class="d-flex align-items-center"><i class="bi bi-geo-alt fs-3 me-1"></i>Ubicación: Barranquilla</span>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-bed fs-3 me-1'></i> 4</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-car fs-3 me-1'></i> 2</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-bath fs-3 me-1'></i> 3</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-shape-triangle fs-3 me-1'></i> 180 m²</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#" class="card">
                                <img src="./public/img/casas/casa2.jpg" class="card-img-top img-fluid" alt="Propiedad 5">
                                <div class="card-body">
                                    <p class="text-muted">En venta</p>
                                    <h5 class="card-title">Casa Naranja</h5>
                                    <p class="card-precio m-0">$260.000.000</p>
                                    <span class="d-flex align-items-center"><i class="bi bi-geo-alt fs-3 me-1"></i>Ubicación: Cartagena</span>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-bed fs-3 me-1'></i> 5</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-car fs-3 me-1'></i> 2</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-bath fs-3 me-1'></i> 4</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-shape-triangle fs-3 me-1'></i> 200 m²</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#" class="card">
                                <img src="./public/img/casas/casa4.jpeg" class="card-img-top img-fluid" alt="Propiedad 6">
                                <div class="card-body">
                                    <p class="text-muted">En venta</p>
                                    <h5 class="card-title">Casa Lila</h5>
                                    <p class="card-precio m-0">$150.000.000</p>
                                    <span class="d-flex align-items-center"><i class="bi bi-geo-alt fs-3 me-1"></i>Ubicación: Bucaramanga</span>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-bed fs-3 me-1'></i> 3</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-car fs-3 me-1'></i> 1</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-bath fs-3 me-1'></i> 2</span>
                                        <span class="d-flex align-items-center gap-1"><i class='bx bx-shape-triangle fs-3 me-1'></i> 120 m²</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <button class="carousel-control-prev align-items-center" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
                <i class="bi bi-chevron-left icon-flecha d-flex align-items-center" aria-hidden="true"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
                <i class="bi bi-chevron-right icon-flecha d-flex align-items-center"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="text-center mt-3">
            <button class="btn btn-info text-white">Ver todas las propiedades</button>
        </div>
    </div>
    <!--fin carousel inmueble-->

    

    <!--seccion de servicios-->
    <div class="container-fluid " id="servicios">
        <h2 class="text-primary text-center fw-bold py-5">Servicios</h2>
        <div class="container d-flex justify-content-center align-items-center">
            <!--primer servicio-->
            <div class="card px-3 py-3 mx-3 card-servicios">
                <div class="container text-center pt-5">
                    <i class="bi bi-shop icon-servicios"></i>
                </div>
                <div class="card-body text-center">
                    <h3 class="text-primary pt-3">Venta</h3>
                    <p class="text-start">Gestión integral para vender tu propiedad con asesoría experta.</p>
                    <a href="./public/html/venta.html"><button class="btn btn-info text-white ">Ver más</button></a>
                </div>
            </div>
            <!--fin primer servicio-->
            <!--segundo servicio-->
            <div class="card px-3 py-3 mx-3">
                <div class="container text-center pt-5">
                    <i class="bi bi-truck icon-servicios"></i>
                </div>
                <div class="card-body text-center">
                    <h3 class="text-primary pt-3">Arriendo</h3>
                    <p class="text-start">Encontramos inquilinos y gestionamos el arriendo sin complicaciones.</p>
                    <a href="./public/html/arriendo.html"><button class="btn btn-info text-white ">Ver más</button></a>
                </div>
            </div>
            <!--fin de segundo servicio-->
            <!--tercer servicio-->
            <div class="card px-3 py-3 mx-3">
                <div class="container text-center pt-5">
                    <i class="bi bi-camera icon-servicios"></i>
                </div>
                <div class="card-body text-center">
                    <h3 class="text-primary pt-3">Fotografía</h3>
                    <p class="text-start">Fotos profesionales para destacar tu propiedad en todas las plataformas.</p>
                    <a href="./public/html/fotografia.html"><button class="btn btn-info text-white ">Ver más</button></a>
                </div>
            </div>
            <!--tercer servicio-->
            <hr>
        </div>
        <div class="container py-5 w-50 text-center">
            <hr>
            <p class="text-center">Explora todo lo que hacemos por ti.</p>
            <button class="btn btn-info text-white">Ver todos los servicios</button>
        </div>
    </div>
  
    <!--footer-->
    <footer class="bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex flex-column align-items-start px-5 py-5">
                    <p class="fw-bold">Redes sociales</p>
                    <span class="d-flex align-items-center"><i class="bi bi-facebook me-2"></i>Facebookfalso.com</span>
                    <span class="d-flex align-items-center"><i class="bi bi-instagram me-2"></i>Instagram falso</span>
                    <span class="d-flex align-items-center"><i class="bi bi-twitter-x me-2"></i>Twitter falso</span>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-start px-5 py-5">
                    <p class="fw-bold">Contacto</p>
                    <span class="d-flex align-items-center"><i class="bi bi-envelope me-2"></i>inmoweb123@gmail.com</span>
                    <span class="d-flex align-items-center"><i class="bi bi-phone me-2"></i>+57 3182348970</span>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-start px-5 py-5">
                    <p class="fw-bold">Dirección</p>
                    <span class="d-flex align-items-center"><i class="bi bi-geo-alt me-2"></i>Manzana 15 Casa 9 Barrio la esperanza, Girardot - Cundinamarca</span>
                </div>
                
            </div>
            <div class="row text-center">
                <p>&copy; 2024 Inmoweb. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!--js-->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./public/js/dashboard.js"></script>
    
</body>
</html>