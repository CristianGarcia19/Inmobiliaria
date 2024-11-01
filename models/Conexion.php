<?php
    $host = 'localhost';
    $bdname = 'inmobiliaria';
    $username = 'root';
    $password = '';
    $port = '3308';

    $conexion = mysqli_connect($host, $username, $password, $bdname, $port);

    if(!$conexion){
        die("Error en la conexión: " . mysqli_connect_error());//valida si hay algo mal en la conexion
    }
    /*echo "Conexion exitosa";*/
?>