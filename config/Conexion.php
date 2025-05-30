<?php
    session_start();
    //Clase conectar
    class Conectar {
        private $host = "localhost";
        private $usuario = "root";
        private $contraseña = "";
        private $base_datos = "inmobiliaria";
        private $port = "3309";
        private $conexion;
    
        public function __construct() {
            // Crear la conexión
            $this->conexion = new mysqli($this->host, $this->usuario, $this->contraseña, $this->base_datos, $this->port);
    
            // Verificar si hay errores en la conexión
            if ($this->conexion->connect_error) {
                die("Error de conexión: " . $this->conexion->connect_error);
            }
        }
    
        // Método para obtener la conexión y utilizarla en otras clases
        public function obtenerConexion() {
            return $this->conexion;
        }
    
        // Cerrar la conexión (opcional)
        public function cerrarConexion() {
            $this->conexion->close();
        }
        
        public function set_names() {
            // Configurar el conjunto de caracteres a utf8
            $this->conexion->set_charset("utf8");
        }
    }

    
?>


    