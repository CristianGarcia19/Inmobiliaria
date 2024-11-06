<?php
    session_start();  // Inicia la sesión para manejar las variables de sesión

    require_once ('../models/Autenticacion.php');

    $autenticacion = new Autenticacion();
    $autenticacion->login();  // Ejecuta el método login() del modelo
?>
