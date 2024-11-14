<?php
    require_once('../config/Conexion.php');

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
    }
?>