<?php
    require_once('../config/Conexion.php');

    class PerfilUsuarios extends Conectar{
        //Funcion para mostrar la informacion del usuario
        public function mostrarPerfil($id_usuarios){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT * FROM usuarios WHERE estado = 1 AND id_usuarios = ?";
            $sql=$conexion->prepare($sql);
            $sql->bind_param('i',$id_usuarios);
            $sql->execute();
            return $resultado=$sql->get_result()->fetch_assoc();
        }

        //funcion para actualizar los datos
        public function actualizarPerfil($id_usuarios, $nombre, $apellidoP, $apellidoM, $sexo, $correo, $contraseña, $telefono) {
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "UPDATE usuarios SET nombre=?, apellidoP=?, apellidoM=?, sexo=?, correo=?, contraseña=?, telefono=? WHERE id_usuarios=?";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("sssssssi", $nombre, $apellidoP, $apellidoM, $sexo, $correo, $contraseña, $telefono, $id_usuarios);
            return $stmt->execute();
        }
    }
?>