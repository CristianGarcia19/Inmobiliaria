<?php

    require_once ('../models/Autenticacion.php');

    $autenticacion = new Autenticacion();
    $autenticacion->login();  // Ejecuta el método login() del modelo
?>
