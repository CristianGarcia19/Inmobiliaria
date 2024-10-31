<?php
    $host = 'localhost';
    $bdname = 'inmobiliaria';
    $username = 'root';
    $password = 'cristian1904';

    $conexion = mysqli_connect($host, $username, $password, $bdname);

    if(!$conexion){
        die("Error en la conexión: " . mysqli_connect_error());
    }
    echo "Conexion exitosa";
?>