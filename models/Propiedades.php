<?php
    require_once('../config/Conexion.php');

    class Propiedad extends Conectar{
        //funcion para agregar una propiedad
        public function insert_propiedad($nombre, $descripcion, $img_principal, $precio, $areaConstruida, $añoConstruccion, $id_estado, $id_ciudad, $id_categoria, $id_agente, $id_departamento){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "INSERT INTO propiedades (id_propiedad, nombre, descripcion, estado, img_principal, precio, areaConstruida, añoConstruccion, id_estado, id_ciudad, id_categoria, id_agente, id_departamento)
            VALUES (NULL, ?, ?, 1, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $sql = $conexion->prepare($sql);
            $sql->bind_param('sssssss', $nombre, $descripcion, $img_principal, $precio, $areaConstruida, $añoConstruccion, $id_estado, $id_ciudad, $id_categoria, $id_agente, $id_departamento);
            return $resultado = $sql->execute();
        }

        public function propiedades_x_carac_internas (){
            $conexion=parent::obtenerConexion();
            parent::set_names();

        }

        public function propiedades_x_carac_externas (){

        }
        //funcion para agregar caracteristicas internas de la propiedad
        public function add_carac_internas ($nombre){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "INSERT INTO carac_internas (id_caracteristica_interna, nombre, estado) VALUES (NULL, ?, 1)";
            $sql = $conexion->prepare($sql);
            $sql->bind_param('s', $nombre);
        }
        //funcion para agregar caracteristicas externas de la propiedad
        public function add_carac_externas ($nombre){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "INSERT INTO carac_externas (id_caracteristica_externa, nombre, estado) VALUES (NULL, ?, 1)";
            $sql = $conexion->prepare($sql);
            $sql->bind_param('s', $nombre);
        }

        public function fotos (){
            $conexion=parent::obtenerConexion();
            parent::set_names();
            $sql = "INSERT INTO fotos (id_foto, ruta_imagen, id_propiedad) VALUES (NULL, ?, ?)";
            $sql = $conexion->prepare($sql);
            $sql->bind_param('s', $nombre);
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
    }
?>