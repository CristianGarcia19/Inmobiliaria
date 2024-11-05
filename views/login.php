<?php
    //auntenticar el usuario
    require('../config/Conexion.php');
    require('../controllers/autenticacion.php');

    // Crear una instancia de la clase Conectar
    $conectar = new Conectar();
    $conexion = $conectar->obtenerConexion();

    

   
    include('modules/head.php');
?>

<body class="bg-primary">
    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100 container-form">
        <!----------------------- Login Container -------------------------->
        <div class="row border rounded-3 p-3 bg-white shadow box-area d-flex justify-content-center align-items-center container container-form">
            <img src="../public/img/logodash.png" alt="logo" class="logo-form">
            <h1 class="text-center tittle-form">Bienvenido</h1>
            <!--Inicio de formulario-->
            <form action="../controllers/autenticacion.php" method="POST">
                <div class="mb-3">
                  <label for="correo" class="form-label">Correo:</label>
                  <input type="email" class="form-control" id="correo" name="correo" required>
                </div>
                <div class="mb-3">
                  <label for="contraseña" class="form-label">Contraseña</label>
                  <input type="password" class="form-control input-focus-primary" id="contraseña" name="contraseña" required>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-info text-white" name="enviar">Iniciar sesión</button>
                </div>
                <div class="container d-flex justify-content-center mt-3 container-pie-login">
                    <div>
                        <p>¿No tienes una cuenta?</p>
                    </div>
                    <div>
                        <a href="../html/registro.html" class="mx-3 text-account">Registrate aqui</a>
                    </div>
                </div>
            </form>
        </div>
          
    </div>
    
</body>
</html>