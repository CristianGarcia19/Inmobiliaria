<?php
    include('../views/modules/head.php');
    require_once('../controllers/propiedades.php'); // o el path correcto
?>
<body>
    <!-- Header -->
    <?php
        include('../views/modules/header.php');
    ?>
    <!-- Main Content -->

    <section class="container-fluid my-5">
        <div class="container-fluid">
            <h2 class="text-center mb-5">Propiedades</h2>
            <div class="d-flex align-items-center gap-2 mb-3 d-flex justify-content-end">
                <label for="filtro_estado_comercial" class=" me-2">Filtrar por estado comercial:</label>
                <select id="filtro_estado_comercial" class="form-control w-auto">
                    <option value="1">Venta</option>
                    <option value="2">Arriendo</option>
                </select>
                <button id="btnAplicarFiltro" class="btn btn-primary">Aplicar</button>
            </div>
        </div>

        <div class="row g-4 mx-2" id="contenedor_propiedades">
            <?php
                

                // Asegúrate de que `$lista_propiedades` tenga los datos
                foreach ($lista_propiedades as $propiedad) {
                    $id_propiedad = $propiedad['id_propiedad']; // o el campo correcto
                    $estado_comercial = $propiedad['estado_comercial']; // o el campo correcto
                    $img = '../public/img/' . $propiedad['img_principal'];
                    $nombre = $propiedad['nombre'];
                    $precio = $propiedad['precio'];
                    $ubicacion = $propiedad['ciudad']; // o el campo correcto
                    $id = $propiedad['id_propiedad'];
            ?>
            <!--card para mostrar propiedades-->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card-custom p-0">
                    <figure>
                        <img src="<?= $img ?>" alt="" class="img-card w-100">
                    </figure>
                    <p class="text-secondary mx-2 my-0">Casa en <?= htmlspecialchars($propiedad['estado_comercial']) ?></p>
                    <p class="fw-bold mx-2 my-0"><?= htmlspecialchars($propiedad['nombre']) ?></p>
                    <p class="fw-bold mx-2 my-0">$<?= number_format($propiedad['precio'], 0, ',', '.') ?></p>
                    <p class="mx-2 my-0"><?= htmlspecialchars($propiedad['ciudad']) ?></p>
                    <div class="text-center mb-2">
                        <a href="detalle_propiedad.php?id_propiedad=<?= $id_propiedad ?>" class="btn btn-info text-white fw-bold">Ver detalle</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    
    
    <?php
        include('../views/modules/footer.php');
        include('../views/modules/js.php');
        
    ?>
    <script src="../views/js/propiedades.js"></script>
</body>
</html>
