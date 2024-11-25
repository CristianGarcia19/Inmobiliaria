<?php
    include('../views/modules/head.php');
?>
<body>
    <!-- Header -->
    <?php
        include('../views/modules/header.php');
    ?>

    
    <section class="fotografia-section container my-5">
        <div class="row align-items-center">
            <!-- Imagen -->
            <div class="col-md-6">
                    <img src="../public/img/fotografia.jpg" alt="Fotografía Inmobiliaria" class="img-fluid rounded">
                </div>    
            <!-- Texto -->
            <div class="col-md-6">
                <h2 class="fw-bold text-center">Fotografía</h2>
                <p>Ofrecemos un servicio profesional de fotografía inmobiliaria diseñado para resaltar las mejores características de cada propiedad. Nuestro equipo captura imágenes de alta calidad, que muestran tanto los interiores como los exteriores, asegurando que cada espacio sea presentado de manera atractiva y realista"</p>
            </div>
            
        </div>
    </section>

    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4 p-5 align-items-stretch">
            <div class="col">
                <div class="card h-100 p-3 d-flex justify-content-start ">
                    <div class="title-container mb-3"> <!-- Contenedor para el título -->
                        <h3 class="fw-bold">Variedad de fotografías</h3>
                    </div>
                    <ul>
                        <li class="fw-bold d-flex list-group-item">Interiores: <p class="fw-normal"> Salones, cocinas y dormitorios.</p></li>
                        <li class="fw-bold d-flex list-group-item">Exteriores: <p class="fw-normal"> Fachadas y jardines.</p></li>
                        <li class="fw-bold d-flex list-group-item">Interiores: <p class="fw-normal"> Acabados y caracteristicas especiales.</p></li>
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
                    <ol class="list-group-numbered">
                        <li class="list-group-item">Despejar espacios de objetos innecesarios.
                        </li>
                        <li class="list-group-item">Decorar con elementos que añadan calidez, como plantas o cojines.</li>
                        <li class="list-group-item">Asegurarse de que todas las luces estén encendidas para mejorar la luminosidad.</li>
                    </ol>
                    <div class="icon-container mt-auto text-center">
                        <i class="bi bi-lightbulb fs-1"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 p-3 d-flex flex-column justify-content-start">
                    <div class="title-container mb-3"> <!-- Contenedor para el título -->
                        <h3 class="fw-bold">Tecnología</h3>
                    </div>
                    <ul>
                        <li>Utilizamos equipos de última generación, incluyendo cámaras profesionales y drones, para ofrecer vistas aéreas impresionantes de propiedades, especialmente útiles para grandes terrenos o complejos residenciales.</li>
                    </ul>
                    <div class="icon-container mt-auto text-center">
                        <i class="bi bi-fan fs-1"></i>
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
