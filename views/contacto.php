<?php
    include('../views/modules/head.php');
?>
<body>
    <!-- Header -->
    <?php
        include('../views/modules/header.php');
    ?>

    
<!--formulario de contacto-->
    <div class="container d-flex justify-content-between p-5">
        <div class="container">
        <form id="contacto_form" method="POST"> 
                <div class="card p-5">
                    <div class="container">
                        <h2 class="text-center mb-4 fw-bold">Formulario de contacto</h2>
                        <div class="row">
                            <!-- Campos del formulario -->
                            <div class="col-12 col-md-6 mb-3">
                                <label for="nombre" class="form-label fw-bold">Nombres:</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" required placeholder="Ingresa el nombre">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="apellidoP" class="form-label fw-bold">Apellido Paterno:</label>
                                <input type="text" class="form-control" id="apellidoP" name="apellidoP" required placeholder="Ingresa el apellido paterno">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="apellidoM" class="form-label fw-bold">Apellido Materno:</label>
                                <input type="text" class="form-control" id="apellidoM" name="apellidoM" required placeholder="Ingresa el apellido materno">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="fw-bold form-label">Sexo:</label>
                                <select class="form-select" name="sexo" id="sexo" required>
                                    <option value="" selected disabled>Seleccionar...</option>
                                    <option value="F">Femenino</option>
                                    <option value="M">Masculino</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-12 mb-3">
                                <label for="correo" class="form-label fw-bold">Correo:</label>
                                <input type="email" class="form-control" id="correo" name="correo" required placeholder="Ingresa el correo">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="telefono" class="form-label fw-bold">Teléfono:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" required placeholder="Ingresa el teléfono">
                            </div>  
                            <div class="col-12 col-md-12 mb-3 d-flex flex-column">
                                <label for="observaciones" class="form-label fw-bold">Observaciones:</label>
                                <textarea name="observaciones" id="observaciones" rows="4" required placeholder="Escribe aqui tus observaciones"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="container text-center">
                        <!-- Botones del formulario -->
                        <button type="submit" class="btn btn-success" id="btn-Formulariocontacto">Enviar</button>
                    </div>
                </div>
                
            </form>
        </div>
        <!-- Mapa en el lado derecho -->
        <div class="container p-5">
            <h2 class="text-center mb-4 fw-bold">Nuestra Ubicación</h2>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.6983297167824!2d-74.80368978466613!3d4.308402596239627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3e2d3e1d12345%3A0x123456789abcd!2sGirardot%2C%20Cundinamarca%2C%20Colombia!5e0!3m2!1sen!2s!4v1699355432100!5m2!1sen!2s" 
                width="100%" 
                height="500" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    <?php
        include('../views/modules/footer.php');
        include('../views/modules/js.php');
    ?>
    <script src="../views/js/clientes.js"></script>
</body>
</html>
