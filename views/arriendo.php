<?php
    include('../views/modules/head.php');
?>
<body>
    <!-- Header -->
    <?php
        include('../views/modules/header.php');
    ?>

    <!-- Sección de Arriendo con texto e imagen -->
    <section class="fotografia-section container my-5">
        <div class="row align-items-center">
            <!-- Texto -->
            <div class="col-md-6">
                <h2 class="text-center fw-bold">Arriendo</h2>
                <p>En Inmoweb, ofrecemos un servicio integral de arriendo de propiedades, adaptado a las necesidades de nuestros clientes. Nuestro equipo de expertos se encarga de gestionar cada detalle del proceso, desde la búsqueda de inquilinos hasta la administración del contrato. Nos comprometemos a proporcionar opciones de arriendo que se ajusten a tu presupuesto y estilo de vida, garantizando una experiencia fluida y satisfactoria tanto para propietarios como para inquilinos.</p>
            </div>
            <!-- Imagen -->
            <div class="col-md-6">
                <img src="../public/img/arriendo.png" alt="Arriendo Inmobiliaria" class="img-fluid rounded">
            </div>
        </div>
    </section>

    <!-- Sección de Propiedades en Arriendo, Requisitos y Beneficios -->    
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4 p-5 align-items-stretch">
            <div class="col">
                <div class="card h-100 p-3 d-flex flex-column justify-content-start ">
                    <div class="title-container mb-3"> <!-- Contenedor para el título -->
                        <h3 class="fw-bold">Propiedades en arriendo</h3>
                    </div>
                    <ul>
                        <li>Apartamentos.</li>
                        <li>Casas.</li>
                        <li>Locales comerciales.</li>
                        <li>Oficinas.</li>
                        <li>Otros.</li>
                    </ul>
                    <div class="icon-container mt-auto text-center">
                        <i class="bi bi-house fs-1"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 p-3 d-flex flex-column justify-content-start">
                    <div class="title-container mb-3"> <!-- Contenedor para el título -->
                        <h3 class="fw-bold">Requisitos</h3>
                    </div>
                    <ul>
                        <li class="fw-bold">Documentación para inquilinos:
                            <p class="fw-normal">Identificación, comprobante de ingresos, referencias.</p>
                        </li>
                        <li class="fw-bold">Criterios de selección:
                            <p class="fw-normal">Estabilidad laboral, historial de arriendos.</p>
                        </li>
                    </ul>
                    <div class="icon-container mt-auto text-center">
                        <i class="bi bi-file-earmark-richtext fs-1"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 p-3 d-flex flex-column justify-content-start">
                    <div class="title-container mb-3"> <!-- Contenedor para el título -->
                        <h3 class="fw-bold">Beneficios del arriendo</h3>
                    </div>
                    <ul>
                        <li class="fw-bold">Flexibilidad:
                            <p class="fw-normal">Oportunidad de cambiar de residencia sin un compromiso a largo plazo.</p>
                        </li>
                        <li>Menos costos iniciales.</li>
                    </ul>
                    <div class="icon-container mt-auto text-center">
                        <i class="bi bi-emoji-smile fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>




    
    <?php
        include('../views/modules/footer.php');
        include('../views/modules/js.php');
    ?>

</body>
</html>
