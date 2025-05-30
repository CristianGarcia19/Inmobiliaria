<?php
    require_once(__DIR__.'/../config/Conexion.php');

    class Agentes extends Conectar{
        public function mostrarAgentes($pagina, $registros_por_pagina) {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            
            // Calcular el OFFSET para la paginación
            $offset = ($pagina - 1) * $registros_por_pagina;
            
            // Consulta SQL con LIMIT y OFFSET
            $sql = "SELECT * FROM agentes WHERE estado = 1 LIMIT ? OFFSET ?";
            $sql = $conexion->prepare($sql);
            $sql->bind_param("ii", $registros_por_pagina, $offset);
            $sql->execute();
            return $resultado = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        }
        //funcion para contar el total de agentes
        public function contarRegistros() {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT COUNT(*) AS total FROM agentes WHERE estado = 1";
            $resultado = $conexion->query($sql);
            $total = $resultado->fetch_assoc();
            return $total['total'];
        }
        //Muestra un agente
        public function agenteXid($id_agente) {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT * FROM agentes WHERE id_agente = ?";
            $sql = $conexion->prepare($sql);
            $sql->bind_param('i', $id_agente);
            $sql->execute();
            return $resultado = $sql->get_result()->fetch_assoc();
        }

        //funcion para actualizar los datos
        public function actualizarAgente($id_agente, $nombre, $apellidoP, $apellidoM, $sexo, $telefono, $contraseña, $correo) {
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "UPDATE agentes SET nombre=?, apellidoP=?, apellidoM=?, sexo=?, telefono=?, contraseña=?, correo=? WHERE id_agente=?";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("sssssssi", $nombre, $apellidoP, $apellidoM, $sexo, $telefono, $contraseña, $correo, $id_agente);
            return $stmt->execute();
        }

        //funcion para eliminar agentes, en este caso solamente se pasa el valor de eestado 1 a 0
        public function delete_agente($id_agente){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "UPDATE agentes SET estado = 0 WHERE id_agente=?";
            $sql = $conexion->prepare($sql);
            $sql->bind_param('i', $id_agente);
            $sql->execute();
            return true;
        }

        //Muestra el total de agentes que hay
        public function total_agentes(){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT COUNT(*) AS total_agentes FROM agentes WHERE estado = 1";
            $sql = $conexion->prepare($sql);
            $sql -> execute();
            return $resultado=$sql->get_result()->fetch_assoc();
        }

        //funcion para agregar un agente
        public function insert_agente($nombre, $apellidoP, $apellidoM, $sexo, $telefono, $contraseña, $correo){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "INSERT INTO agentes (id_agente, nombre, apellidoP, apellidoM, sexo, telefono, contraseña, correo, estado, id_rol)
            VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, 1, 2)";
            $sql = $conexion->prepare($sql);
            $sql->bind_param("sssssss", $nombre, $apellidoP, $apellidoM, $sexo, $telefono, $contraseña, $correo);
            return $resultado = $sql->execute();
        }

        //funcion para mostrar todos los agentes sin limite
        //funcion para obtener las ciudades
        public function lista_agentes() {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT * FROM agentes WHERE estado = 1";
            $sql = $conexion->prepare($sql);
            $sql->execute();
            return $resultado = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        }
    }
?>