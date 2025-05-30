<?php
    /* require_once('../models/Propiedades.php');
    require_once('../models/admAgentes.php'); */
    require_once(__DIR__ . '/../models/Propiedades.php');
    require_once(__DIR__ . '/../models/admAgentes.php');
    $propiedad = new Propiedad();
    $agentes = new Agentes();
    
    //obtener lista de campos necesarios para el formulario de propiedad
    $lista_departamentos = $propiedad->departamentos();
    $estado_propiedad = $propiedad->estado_propiedad();
    $lista_ciudades = $propiedad->ciudades();
    $lista_agentes = $agentes->lista_agentes();
    $lista_categoria_propiedad = $propiedad->categoria_propiedad();
    $lista_carac_internas = $propiedad->caracteristicas_internas();
    $lista_carac_externas = $propiedad->caracteristicas_externas();
    // obtener una propiedad
    $lista_propiedades = $propiedad->listar_propiedades();


    // Definir registros por página (se ajusta dependiendo el numero de registros que queramos)
    $registros_por_pagina = 8;
    $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1; // Si no se pasa página, por defecto es la página 1

    if (isset($_GET['opc'])) {
        $opc = $_GET['opc'];
    
        
        switch ($opc) {
            case 'insert_propiedad':
                $nombre = $_POST['nombre'];
                $descripcion = $_POST['descripcion'];
                
                // TEMPORAL: no insertamos la imagen aún porque no existe el ID
                $img_principal = "";
                $precio = $_POST['precio'];
                $areaConstruida = $_POST['areaConstruida'];
                $añoConstruccion = $_POST['añoConstruccion'];
                $baños = $_POST['baños'];
                $habitaciones = $_POST['habitaciones'];
                $pisos = $_POST['pisos'];
                $garaje = $_POST['garaje'];
                $estrato = $_POST['estrato'];
                $id_estado = $_POST['estadoPropiedad'];
                $id_ciudad = $_POST['id_ciudad'];
                $id_categoria = $_POST['id_categoria'];
                $id_agente = $_POST['id_agente'];
                $id_departamento = $_POST['id_departamento']; 
                // 1. Insertamos la propiedad SIN la imagen aún
                $resultado = $propiedad->insert_propiedad($nombre, $descripcion, $img_principal, $precio, $areaConstruida, $añoConstruccion, $baños, $habitaciones, $pisos, $garaje, $estrato, $id_estado, $id_ciudad, $id_categoria, $id_agente, $id_departamento);

                if ($resultado) {
                    $id_propiedad = $resultado;

                    // 2. Crear carpeta con el ID de la propiedad
                    $directorio = "../public/img/casas/$id_propiedad/";
                    if (!file_exists($directorio)) {
                        mkdir($directorio, 0777, true);
                    }

                    // 3. Subir imagen a esa carpeta
                    $nombreArchivoOriginal = basename($_FILES["img_principal"]["name"]);
                    // Agregar prefijo "principal_" al nombre del archivo
                    $nombreArchivo = "principal_" . time() . "_" . $nombreArchivoOriginal;
                    $rutaFinal = $directorio . $nombreArchivo;
                    if (move_uploaded_file($_FILES["img_principal"]["tmp_name"], $rutaFinal)) {
                        $rutaRelativa = "casas/$id_propiedad/" . $nombreArchivo;
                        // 4. Actualizar la propiedad con la ruta de la imagen
                        $propiedad->update_img_principal($id_propiedad, $rutaRelativa);
                    } else {
                        echo json_encode(['success' => false, 'error' => 'Error al mover la imagen']);
                        break;
                    }

                    // Insertar fotos detalladas
                    if (is_array($_FILES['img_detalle']['name'])) {
                        foreach ($_FILES['img_detalle']['tmp_name'] as $key => $tmp_name) {
                            $prefijo = "detalle_";
                            $nombreOriginal = basename($_FILES['img_detalle']['name'][$key]);
                            $nombreConPrefijo = $prefijo . time() . "_" . $nombreOriginal;

                            $rutaFinalDetalle = $directorio . $nombreConPrefijo;

                            if (move_uploaded_file($tmp_name, $rutaFinalDetalle)) {
                                $rutaRelativaDetalle = "casas/$id_propiedad/" . $nombreConPrefijo;
                                $propiedad->insert_fotos_detalladas($id_propiedad, $rutaRelativaDetalle);
                            }
                        }
                    }

                    // 5. Insertar características internas
                    if (isset($_POST['caracteristicas_internas'])) {
                        foreach ($_POST['caracteristicas_internas'] as $id_caracteristica_interna) {
                            $propiedad->insert_caracteristicas_internas($id_propiedad, $id_caracteristica_interna);
                        }
                    }

                    // 6. Insertar características externas
                    if (isset($_POST['caracteristicas_externas'])) {
                        foreach ($_POST['caracteristicas_externas'] as $id_caracteristica_externa) {
                            $propiedad->insert_caracteristicas_externas($id_propiedad, $id_caracteristica_externa);
                        }
                    }

                    echo json_encode(['success' => true]);
                } else {
                    echo json_encode(['success' => false]);
                }

            break;

            case 'mostrar_propiedades':
                $datosPropiedades = $propiedad->mostrar_propiedades($pagina, $registros_por_pagina);
                $totalRegistros = $propiedad->contar_propiedades();
                $totalPaginas = ceil($totalRegistros / $registros_por_pagina);
                
                echo json_encode([
                    'propiedades' => $datosPropiedades,
                    'totalPaginas' => $totalPaginas,
                    'paginaActual' => $pagina
                ]);
            break;

            case 'total_casas_en_venta':
               $totalCasasEnVenta = $propiedad->total_casas_en_venta();
                echo json_encode(['total_casas_en_venta' => $totalCasasEnVenta['total_casas_en_venta']]);
            break;

            case 'total_casas_en_arriendo':
               $totalCasasEnArriendo = $propiedad->total_casas_en_arriendo();
                echo json_encode(['total_casas_en_arriendo' => $totalCasasEnArriendo['total_casas_en_arriendo']]);
            break;

            case 'total_apartamentos_en_venta':
               $totalApartamentosEnVenta = $propiedad->total_apartamentos_en_venta();
                echo json_encode(['total_apartamentos_en_venta' => $totalApartamentosEnVenta['total_apartamentos_en_venta']]);
            break;

            case 'total_apartamentos_en_arriendo':
               $totalApartamentosEnArriendo = $propiedad->total_apartamentos_en_arriendo();
                echo json_encode(['total_apartamentos_en_arriendo' => $totalApartamentosEnArriendo['total_apartamentos_en_arriendo']]);
            break;

            case 'propiedadXid':
                $id_propiedad = $_GET['id_propiedad'];
                $datosPropiedad = $propiedad->propiedadXid($id_propiedad);
                echo json_encode($datosPropiedad);
            break;

            case 'delete_propiedad':
                $id_propiedad = $_POST['id_propiedad'];
                $delete_propiedad = $propiedad->delete_propiedad($id_propiedad);
                echo json_encode($delete_propiedad);    
            break;

            case 'filtrar_x_estado_comercial':
                if (isset($_GET['id_estado']) && is_numeric($_GET['id_estado'])) {
                    $id_estado = intval($_GET['id_estado']);
                    $resultado = $propiedad->filtrar_x_estado_comercial($id_estado);
                    echo json_encode($resultado);
                } else {
                    http_response_code(400);
                    echo json_encode(['error' => 'Parámetro id_estado inválido o no proporcionado']);
                }
            break;
        }
    }
?>