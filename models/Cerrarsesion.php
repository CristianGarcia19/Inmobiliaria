<?php
    //lamado a la conexion de la bd
    require_once('../config/Conexion.php');

    class CerrarSesion extends Conectar{
        //funcion para cerrar sesion
        public function cerrarSesion (){
            // Iniciar sesión
            session_start();
            // borra todas las variables activas
            session_unset();
            // Destruir la sesión
            session_destroy();

            // Redirigir al login o página inicial
            header("Location: ../index.php");
            exit();
        }
    }
?>