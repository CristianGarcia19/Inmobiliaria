<?php
    require_once(__DIR__.'/../config/Conexion.php');

    class Propiedad extends Conectar{
        //funcion para agregar una propiedad
        public function insert_propiedad($nombre, $descripcion, $img_principal, $precio, $areaConstruida, $añoConstruccion, $baños, $habitaciones, $pisos, $garaje, $estrato, $id_estado, $id_ciudad, $id_categoria, $id_agente, $id_departamento){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "INSERT INTO propiedades (id_propiedad, nombre, descripcion, estado, img_principal, precio, 
            areaConstruida, añoConstruccion, baños, habitaciones, pisos, garaje, estrato, id_estado, id_ciudad, id_categoria, id_agente, id_departamento)
            VALUES (NULL, ?, ?, 1, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $sql = $conexion->prepare($sql);
            $sql->bind_param('sssiiiiiiiiiiiii', $nombre, $descripcion, $img_principal, $precio, $areaConstruida, $añoConstruccion, $baños, $habitaciones, $pisos, $garaje, $estrato, $id_estado, $id_ciudad, $id_categoria, $id_agente, $id_departamento);
            /* return $resultado = $sql->execute(); */
            $sql->execute();
            return $conexion->insert_id;
        }

        // Funcion para añadir caracteristicas internas a una propiedad
        public function insert_caracteristicas_internas ($id_propiedad, $id_caracteristica_interna){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "INSERT INTO propiedades_x_carac_internas (id, id_propiedad, id_caracteristica_interna)
            VALUES (NULL, ?, ?)";
            $sql = $conexion->prepare($sql);
            $sql->bind_param('ii', $id_propiedad, $id_caracteristica_interna);
            return $resultado = $sql->execute();
        }

        // Funcion para añadir caracteristicas externas de una propiedad
        public function insert_caracteristicas_externas($id_propiedad, $id_caracteristica_externa){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "INSERT INTO propiedades_x_carac_externas (id, id_propiedad, id_caracteristica_externa)
            VALUES (NULL, ?, ?)";
            $sql = $conexion->prepare($sql);
            $sql->bind_param('ii', $id_propiedad, $id_caracteristica_externa);
            return $resultado = $sql->execute();
        }

        // funcion para actualizar la imagen principal de una propiedad
        public function update_img_principal($id_propiedad, $img_principal){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "UPDATE propiedades SET img_principal = ? WHERE id_propiedad = ?";
            $sql = $conexion->prepare($sql);
            $sql->bind_param('si', $img_principal, $id_propiedad);
            return $resultado = $sql->execute();
        }

        // Funcion para insertar fotos detalladas de una propiedad
        public function insert_fotos_detalladas($id_propiedad, $ruta_imagen){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "INSERT INTO fotos (id_foto, ruta_imagen, id_propiedad) VALUES (NULL, ?, ?)";
            $sql = $conexion->prepare($sql);
            $sql->bind_param('si', $ruta_imagen, $id_propiedad);
            return $resultado = $sql->execute();
        }

        //obtener las caracteristicas internas activas
        public function caracteristicas_internas() {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT * FROM carac_internas WHERE estado = 1";
            $sql = $conexion->prepare($sql);
            $sql->execute();
            return $resultado = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        }

        //obtener las caracteristicas externas activas
        public function caracteristicas_externas() {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT * FROM carac_externas WHERE estado = 1";
            $sql = $conexion->prepare($sql);
            $sql->execute();
            return $resultado = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        }

        //funcion para obtener los estados de la propiedad
        public function estado_propiedad() {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT * FROM estado";
            $sql = $conexion->prepare($sql);
            $sql->execute();
            return $resultado = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        }


        //funcion para obtener los departamentos
        public function departamentos() {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT * FROM departamentos";
            $sql = $conexion->prepare($sql);
            $sql->execute();
            return $resultado = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        }

        //funcion para obtener las ciudades
        public function ciudades() {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT * FROM ciudades";
            $sql = $conexion->prepare($sql);
            $sql->execute();
            return $resultado = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        }

        //funcion para obtener las categorias de las propiedades
        public function categoria_propiedad() {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT * FROM categoria_propiedad";
            $sql = $conexion->prepare($sql);
            $sql->execute();
            return $resultado = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        }

        public function mostrar_propiedades($pagina, $registros_por_pagina) {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            // Calcular el OFFSET para la paginación
            $offset = ($pagina - 1) * $registros_por_pagina;
            // Consulta SQL con LIMIT y OFFSET
            $sql = "SELECT 
                        t_propiedades.id_propiedad,
                        t_propiedades.nombre,
                        t_propiedades.descripcion,
                        t_propiedades.estado,
                        t_propiedades.img_principal,
                        t_propiedades.precio,
                        t_propiedades.areaConstruida,
                        t_propiedades.añoConstruccion,
                        t_propiedades.baños,
                        t_propiedades.habitaciones,
                        t_propiedades.pisos,
                        t_propiedades.garaje,
                        t_propiedades.estrato,
                        t_estado.nombreEstado AS estado_comercial,
                        t_ciudades.nombreCiudad AS ciudad,
                        t_categoria_propiedad.nombreCategoria AS categoria,
                        t_departamentos.nombreDepartamento AS departamento
                    FROM propiedades AS t_propiedades
                    INNER JOIN 
                        estado AS t_estado ON t_propiedades.id_estado = t_estado.id_estado
                    INNER JOIN 
                        ciudades AS t_ciudades ON t_ciudades.id_ciudad = t_propiedades.id_ciudad
                    INNER JOIN 
                        categoria_propiedad AS t_categoria_propiedad ON t_categoria_propiedad.id_categoria = t_propiedades.id_categoria
                    INNER JOIN 
                        departamentos AS t_departamentos ON t_departamentos.id_departamento = t_propiedades.id_departamento
                    WHERE estado = 1 LIMIT ? OFFSET ?";
            $sql = $conexion->prepare($sql);
            $sql->bind_param("ii", $registros_por_pagina, $offset);
            $sql->execute();
            return $resultado = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        }

        // funcion para mostrar una propiedad determinada por su id
        public function propiedadXid($id_propiedad) {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT
                        t_propiedades.id_propiedad,
                        t_propiedades.nombre,
                        t_propiedades.descripcion,
                        t_propiedades.estado,
                        t_propiedades.img_principal,
                        t_propiedades.precio,
                        t_propiedades.areaConstruida,
                        t_propiedades.añoConstruccion,
                        t_propiedades.baños,
                        t_propiedades.habitaciones,
                        t_propiedades.pisos,
                        t_propiedades.garaje,
                        t_propiedades.estrato,
                        t_propiedades.id_estado,
                        t_estado.nombreEstado AS estado_comercial,
                        t_propiedades.id_ciudad,
                        t_ciudades.nombreCiudad AS ciudad,
                        t_propiedades.id_categoria,
                        t_categoria_propiedad.nombreCategoria AS categoria,
                        t_propiedades.id_departamento,
                        t_departamentos.nombreDepartamento AS departamento,
                        t_agentes.id_agente,

                        -- Características Externas como subconsulta (SOLUCIÓN REVISADA)
                        (
                            SELECT GROUP_CONCAT(ce.nombre SEPARATOR ', ')
                            FROM propiedades_x_carac_externas pce
                            INNER JOIN carac_externas ce ON ce.id_caracteristica_externa = pce.id_caracteristica_externa
                            WHERE pce.id_propiedad = t_propiedades.id_propiedad
                        ) AS caracteristicas_externas, -- Mantiene el alias original

                        -- Características Internas como subconsulta (SOLUCIÓN REVISADA)
                        (
                            SELECT GROUP_CONCAT(ci.nombre SEPARATOR ', ')
                            FROM propiedades_x_carac_internas pci
                            INNER JOIN carac_internas ci ON ci.id_caracteristica_interna = pci.id_caracteristica_interna
                            WHERE pci.id_propiedad = t_propiedades.id_propiedad
                        ) AS caracteristicas_internas

                    FROM propiedades AS t_propiedades
                    INNER JOIN agentes AS t_agentes ON t_agentes.id_agente = t_propiedades.id_agente
                    INNER JOIN estado AS t_estado ON t_propiedades.id_estado = t_estado.id_estado
                    INNER JOIN ciudades AS t_ciudades ON t_ciudades.id_ciudad = t_propiedades.id_ciudad
                    INNER JOIN categoria_propiedad AS t_categoria_propiedad ON t_categoria_propiedad.id_categoria = t_propiedades.id_categoria
                    INNER JOIN departamentos AS t_departamentos ON t_departamentos.id_departamento = t_propiedades.id_departamento
                    WHERE t_propiedades.id_propiedad = ?";
            $sql = $conexion->prepare($sql);
            $sql->bind_param('i', $id_propiedad);
            $sql->execute();
            return $resultado = $sql->get_result()->fetch_assoc();
        }

        //funcion para contar el total d_propiedades
        public function contar_propiedades() {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT COUNT(*) AS total FROM propiedades WHERE estado = 1";
            $resultado = $conexion->query($sql);
            $total = $resultado->fetch_assoc();
            return $total['total'];
        }


        //funcion para contar el total de casas en venta
        public function total_casas_en_venta() {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT COUNT(*) AS total_casas_en_venta
                    FROM propiedades
                    WHERE id_estado = 1
                    AND id_categoria = 1;"; 
            $sql = $conexion->prepare($sql);
            $sql -> execute();
            return $resultado=$sql->get_result()->fetch_assoc();
        }

        // funcion para contar el total de casas en arriendo
        public function total_casas_en_arriendo() {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT COUNT(*) AS total_casas_en_arriendo
                    FROM propiedades
                    WHERE id_estado = 2
                    AND id_categoria = 1"; 
            $sql = $conexion->prepare($sql);
            $sql -> execute();
            return $resultado=$sql->get_result()->fetch_assoc();
        }

        // funcion para contar el total de apartamentos en venta
        public function total_apartamentos_en_venta() {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT COUNT(*) AS total_apartamentos_en_venta
                    FROM propiedades
                    WHERE id_estado = 1
                    AND id_categoria = 2"; 
            $sql = $conexion->prepare($sql);
            $sql -> execute();
            return $resultado=$sql->get_result()->fetch_assoc();
        }

        // funcion para contar el total de apartamentos en arriendo
        public function total_apartamentos_en_arriendo() {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT COUNT(*) AS total_apartamentos_en_arriendo
                    FROM propiedades
                    WHERE id_estado = 2
                    AND id_categoria = 2"; 
            $sql = $conexion->prepare($sql);
            $sql -> execute();
            return $resultado=$sql->get_result()->fetch_assoc();
        }

        // funcion para listar propiedades sin limite
        public function listar_propiedades() {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT
                        t_propiedades.id_propiedad,
                        t_propiedades.nombre,
                        t_propiedades.descripcion,
                        t_propiedades.estado,
                        t_propiedades.img_principal,
                        t_propiedades.precio,
                        t_propiedades.areaConstruida,
                        t_propiedades.añoConstruccion,
                        t_propiedades.baños,
                        t_propiedades.habitaciones,
                        t_propiedades.pisos,
                        t_propiedades.garaje,
                        t_propiedades.estrato,
                        t_propiedades.id_estado,
                        t_estado.nombreEstado AS estado_comercial,
                        t_propiedades.id_ciudad,
                        t_ciudades.nombreCiudad AS ciudad,
                        t_propiedades.id_categoria,
                        t_categoria_propiedad.nombreCategoria AS categoria,
                        t_propiedades.id_departamento,
                        t_departamentos.nombreDepartamento AS departamento,
                        t_agentes.id_agente,

                        -- Características Externas como subconsulta (SOLUCIÓN REVISADA)
                        (
                            SELECT GROUP_CONCAT(ce.nombre SEPARATOR ', ')
                            FROM propiedades_x_carac_externas pce
                            INNER JOIN carac_externas ce ON ce.id_caracteristica_externa = pce.id_caracteristica_externa
                            WHERE pce.id_propiedad = t_propiedades.id_propiedad
                        ) AS caracteristicas_externas, -- Mantiene el alias original

                        -- Características Internas como subconsulta (SOLUCIÓN REVISADA)
                        (
                            SELECT GROUP_CONCAT(ci.nombre SEPARATOR ', ')
                            FROM propiedades_x_carac_internas pci
                            INNER JOIN carac_internas ci ON ci.id_caracteristica_interna = pci.id_caracteristica_interna
                            WHERE pci.id_propiedad = t_propiedades.id_propiedad
                        ) AS caracteristicas_internas

                    FROM propiedades AS t_propiedades
                    INNER JOIN agentes AS t_agentes ON t_agentes.id_agente = t_propiedades.id_agente
                    INNER JOIN estado AS t_estado ON t_propiedades.id_estado = t_estado.id_estado
                    INNER JOIN ciudades AS t_ciudades ON t_ciudades.id_ciudad = t_propiedades.id_ciudad
                    INNER JOIN categoria_propiedad AS t_categoria_propiedad ON t_categoria_propiedad.id_categoria = t_propiedades.id_categoria
                    INNER JOIN departamentos AS t_departamentos ON t_departamentos.id_departamento = t_propiedades.id_departamento
                    WHERE t_propiedades.estado = 1";
            $sql = $conexion->prepare($sql);
            $sql->execute();
            return $resultado = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        }
      
        // funcion para eliminar una propiedad, en este caso solamente se pasa el valor de eestado 1 a 0
        public function delete_propiedad($id_propiedad){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "UPDATE propiedades SET estado = 0 WHERE id_propiedad=?";
            $sql = $conexion->prepare($sql);
            $sql->bind_param('i', $id_propiedad);
            $sql->execute();
            return true;
        }

        // funcion para agregar el filtro de busqueda por estado comercial
        public function filtrar_x_estado_comercial($id_estado) {
            $conexion = parent::obtenerConexion();
            parent::set_names();
            $sql = "SELECT
                        t_propiedades.id_propiedad,
                        t_propiedades.nombre,
                        t_propiedades.descripcion,
                        t_propiedades.estado,
                        t_propiedades.img_principal,
                        t_propiedades.precio,
                        t_propiedades.areaConstruida,
                        t_propiedades.añoConstruccion,
                        t_propiedades.baños,
                        t_propiedades.habitaciones,
                        t_propiedades.pisos,
                        t_propiedades.garaje,
                        t_propiedades.estrato,
                        t_propiedades.id_estado,
                        t_estado.nombreEstado AS estado_comercial,
                        t_propiedades.id_ciudad,
                        t_ciudades.nombreCiudad AS ciudad,
                        t_propiedades.id_categoria,
                        t_categoria_propiedad.nombreCategoria AS categoria,
                        t_propiedades.id_departamento,
                        t_departamentos.nombreDepartamento AS departamento,
                        t_agentes.id_agente,

                        -- Características Externas como subconsulta (SOLUCIÓN REVISADA)
                        (
                            SELECT GROUP_CONCAT(ce.nombre SEPARATOR ', ')
                            FROM propiedades_x_carac_externas pce
                            INNER JOIN carac_externas ce ON ce.id_caracteristica_externa = pce.id_caracteristica_externa
                            WHERE pce.id_propiedad = t_propiedades.id_propiedad
                        ) AS caracteristicas_externas, -- Mantiene el alias original

                        -- Características Internas como subconsulta (SOLUCIÓN REVISADA)
                        (
                            SELECT GROUP_CONCAT(ci.nombre SEPARATOR ', ')
                            FROM propiedades_x_carac_internas pci
                            INNER JOIN carac_internas ci ON ci.id_caracteristica_interna = pci.id_caracteristica_interna
                            WHERE pci.id_propiedad = t_propiedades.id_propiedad
                        ) AS caracteristicas_internas

                    FROM propiedades AS t_propiedades
                    INNER JOIN agentes AS t_agentes ON t_agentes.id_agente = t_propiedades.id_agente
                    INNER JOIN estado AS t_estado ON t_propiedades.id_estado = t_estado.id_estado
                    INNER JOIN ciudades AS t_ciudades ON t_ciudades.id_ciudad = t_propiedades.id_ciudad
                    INNER JOIN categoria_propiedad AS t_categoria_propiedad ON t_categoria_propiedad.id_categoria = t_propiedades.id_categoria
                    INNER JOIN departamentos AS t_departamentos ON t_departamentos.id_departamento = t_propiedades.id_departamento
                    WHERE t_propiedades.estado = 1 AND t_propiedades.id_estado = ?";
            $sql = $conexion->prepare($sql);
            $sql->bind_param('i', $id_estado);
            $sql->execute();
            return $resultado = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        }
    }
?>