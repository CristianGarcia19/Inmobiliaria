<?php
    require_once('../config/Conexion.php');

    class Clientes extends Conectar{
        public function mostrarClientes($pagina, $registros_por_pagina) {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            
            // Calcular el OFFSET para la paginación
            $offset = ($pagina - 1) * $registros_por_pagina;
            
            // Consulta SQL con LIMIT y OFFSET
            $sql = "SELECT * FROM clientes LIMIT ? OFFSET ?";
            $sql = $conexion->prepare($sql);
            $sql->bind_param("ii", $registros_por_pagina, $offset);
            $sql->execute();
            return $resultado = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        }

        //funcion para contar el total de agentes
        public function contarRegistros() {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT COUNT(*) AS total FROM clientes";
            $resultado = $conexion->query($sql);
            $total = $resultado->fetch_assoc();
            return $total['total'];
        }


        //Muestra el total de agentes que hay
        public function total_clientes(){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT COUNT(*) AS total_clientes FROM clientes";
            $sql = $conexion->prepare($sql);
            $sql -> execute();
            return $resultado=$sql->get_result()->fetch_assoc();
        }

        //funcion para agregar un agente
        public function insert_cliente($nombres, $apellidoP, $apellidoM, $sexo, $correo, $telefono, $observaciones){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "INSERT INTO clientes (id_cliente, nombres, apellidoP, apellidoM, sexo, correo, telefono, observaciones, id_propiedad)
            VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, NULL)";
            $sql = $conexion->prepare($sql);
            $sql->bind_param("sssssss", $nombres, $apellidoP, $apellidoM, $sexo, $correo, $telefono, $observaciones);
            return $resultado = $sql->execute();
        }
    }
?>