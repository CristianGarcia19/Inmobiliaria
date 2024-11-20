<?php
    require_once('../models/admAgentes.php');

    if (isset($_GET['opc'])) {
        $opc = $_GET['opc'];
        $agentes = new Agentes();
    
         // Definir registros por página (se ajusta dependiendo el numero de registros que queramos)
        $registros_por_pagina = 8;
        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1; // Si no se pasa página, por defecto es la página 1

        switch ($opc) {
            case 'mostrarAgentes':
                $datosAgente = $agentes->mostrarAgentes($pagina, $registros_por_pagina);
                $totalRegistros = $agentes->contarRegistros();
                $totalPaginas = ceil($totalRegistros / $registros_por_pagina);
                
                echo json_encode([
                    'agentes' => $datosAgente,
                    'totalPaginas' => $totalPaginas,
                    'paginaActual' => $pagina
                ]);
            break;

            case 'agenteXid':
                $id_agente = $_GET['id_agente'];
                $datosAgente = $agentes->agenteXid($id_agente);
                echo json_encode($datosAgente);
            break;

            case 'actualizarAgente':
                $id_agente = $_POST['id_agente'];
                $nombre = $_POST['nombre'];
                $apellidoP = $_POST['apellidoP'];
                $apellidoM = $_POST['apellidoM'];
                $sexo = $_POST['sexo'];
                $telefono = $_POST['telefono'];
                $contraseña = $_POST['contraseña'];
                $correo = $_POST['correo'];
                $resultado = $agentes->actualizarAgente($id_agente, $nombre, $apellidoP, $apellidoM, $sexo, $telefono, $contraseña, $correo );
                echo json_encode(['success' => $resultado]);
            break;

            case 'delete_agente':
                $id_agente = $_POST['id_agente'];
                $delete_agente = $agentes->delete_agente($id_agente);
                echo json_encode($delete_agente);    
            break;

            case 'total_agentes':
                $totalAgentes = $agentes->total_agentes();
                echo json_encode(['total_agentes' => $totalAgentes['total_agentes']]);
            break;

            case 'insert_agente':
                $nombre = $_POST['nombre'];
                $apellidoP = $_POST['apellidoP'];
                $apellidoM = $_POST['apellidoM'];
                $sexo = $_POST['sexo'];
                $telefono = $_POST['telefono'];
                $contraseña = $_POST['contraseña'];
                $correo = $_POST['correo'];
                $resultado = $agentes->insert_agente($nombre, $apellidoP, $apellidoM, $sexo, $telefono, $contraseña, $correo );
                echo json_encode(['success' => $resultado]);
            break;
        }
    }
?>