<?php
    require_once('../controllers/propiedades.php'); // o tu controlador correcto

    if (isset($_GET['id_propiedad'])) {
        $id_propiedad = $_GET['id_propiedad'];
        $propiedad = $propiedad->propiedadXid($id_propiedad); // Asumiendo que tienes esta función
        if (!$propiedad) {
            echo "Propiedad no encontrada";
            exit;
        }
        // BLOQUE PARA CARGAR LAS IMÁGENES DETALLE
        $ruta = "../public/img/casas/{$propiedad['id_propiedad']}/";
        $imagenes = glob($ruta . "detalle_*.{jpg,jpeg,png}", GLOB_BRACE);
    } else {
        echo "ID no proporcionado";
        exit;
    }
    include('../views/modules/head.php');
?>
<body>
    <!-- Header -->
    <?php
        include('../views/modules/header.php');
    ?>
    <!-- Main Content -->

    <section class="container justify-content-center py-5" >
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <figure class="container-imagen-detallePropiedad">
                    <div id="carouselPropiedad" class="carousel slide" >
                        <div class="carousel-inner">
                        <!-- Imagen principal (activa) -->
                        <div class="carousel-item active">
                            <img src="../public/img/<?= $propiedad['img_principal'] ?>" class="imagen-muestra" alt="Imagen principal propiedad">
                        </div>

                        <!-- Imágenes detalle dinámicas -->
                        <?php
                            $id_propiedad = $propiedad['id_propiedad']; // tu variable existente
                            $ruta_detalles = "../public/img/casas/$id_propiedad/";
                            if (is_dir($ruta_detalles)) {
                            $detalles = glob($ruta_detalles . "detalle_*.{jpg,jpeg,png}", GLOB_BRACE);
                            foreach ($detalles as $img): ?>
                                <div class="carousel-item">
                                <img src="<?= $img ?>" class="imagen-muestra" alt="Imagen detalle">
                                </div>
                        <?php endforeach; } ?>
                        </div>

                        <!-- Controles sin modificar -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPropiedad" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselPropiedad" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column ">
                <p >Casa en <?= htmlspecialchars($propiedad['estado_comercial']) ?></p>
                <h2><?= htmlspecialchars($propiedad['nombre']) ?></h2>
                <h3>$<?= number_format($propiedad['precio'], 0, ',', '.') ?></h3>
                <p class="d-flex align-items-center gap-1"><i class='bx bx-shape-triangle fs-3 me-1'></i><?= htmlspecialchars($propiedad['areaConstruida']) ?> m²</p>
                <p class="d-flex align-items-center gap-1"><i class='bx bx-bed fs-3 me-1'></i><?= htmlspecialchars($propiedad['habitaciones']) ?> Habitaciones</p>
                <p class="d-flex align-items-center gap-1"><i class='bx bx-bath fs-3 me-1'></i><?= htmlspecialchars($propiedad['baños']) ?> Baños</p>
                <div class="row">
                    <a href="../views/contacto.php" class="col-5 btn-contacto d-flex align-items-center gap-1 justify-content-center mx-1"><i class="bi bi-person"></i></i>Contacto</a>
                    <a href="https://wa.link/qwtc3z" class="col-5 btn-ws d-flex align-items-center gap-1 justify-content-center mx-1"><i class="bi bi-whatsapp"></i>WhatsApp</a>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <h4>Descripcion del inmueble</h4>
        <p><?= htmlspecialchars($propiedad['descripcion']) ?></p>
        <h4 class="pt-2">Caracteristicas principales</h4>
        <table class="table table-striped">
            
            <tbody>
                <tr>
                    <th scope="row">Habitaciones</th>
                    <td><?= htmlspecialchars($propiedad['habitaciones']) ?></td>
                </tr>
                <tr>
                    <th scope="row">Área construida</th>
                    <td><?= htmlspecialchars($propiedad['areaConstruida']) ?> m²</td>
                </tr>
                <tr>
                    <th scope="row">Baños</th>
                    <td><?= htmlspecialchars($propiedad['baños']) ?></td>
                </tr>
                <tr>
                    <th scope="row">Garaje</th>
                    <td><?= htmlspecialchars($propiedad['garaje']) ?></td>
                </tr>
                <tr>
                    <th scope="row">Estrato</th>
                    <td><?= htmlspecialchars($propiedad['estrato']) ?></td>
                </tr>
                <tr>
                    <th scope="row">Ubicacion</th>
                    <td><?= htmlspecialchars($propiedad['ciudad'] .' - '. $propiedad['departamento']) ?></td>
                </tr>
                <tr>
                    <th scope="row">Tipo de vivienda</th>
                    <td><?= htmlspecialchars($propiedad['categoria']) ?></td>
                </tr>
                <tr>
                    <th scope="row">Estado comercial</th>
                    <td><?= htmlspecialchars($propiedad['estado_comercial']) ?></td>
                </tr>
            </tbody>
        </table>
        <h4 class="pt-2">Caracteristicas internas</h4>
        <p><?= htmlspecialchars($propiedad['caracteristicas_internas']) ?></p>
        <h4 class="pt-2">Caracteristicas externas</h4>
        <p class="pb-4"><?= htmlspecialchars($propiedad['caracteristicas_externas']) ?></p>
    </section>

    
    


    
    <?php
        include('../views/modules/footer.php');
        include('../views/modules/js.php');

    ?>

</body>
</html>
