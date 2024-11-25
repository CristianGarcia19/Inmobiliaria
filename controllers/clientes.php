<?php
    require_once('../models/Clientes.php');

    if (isset($_GET['opc'])) {
        $opc = $_GET['opc'];
        $clientes = new Clientes();
    
         // Definir registros por página (se ajusta dependiendo el numero de registros que queramos)
        $registros_por_pagina = 8;
        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1; // Si no se pasa página, por defecto es la página 1

        switch ($opc) {
            case 'mostrarClientes':
                $datosCliente = $clientes->mostrarClientes($pagina, $registros_por_pagina);
                $totalRegistros = $clientes->contarRegistros();
                $totalPaginas = ceil($totalRegistros / $registros_por_pagina);
                
                echo json_encode([
                    'clientes' => $datosCliente,
                    'totalPaginas' => $totalPaginas,
                    'paginaActual' => $pagina
                ]);
            break;

            case 'insert_cliente':
                $nombres = $_POST['nombres'];
                $apellidoP = $_POST['apellidoP'];
                $apellidoM = $_POST['apellidoM'];
                $sexo = $_POST['sexo'];
                $correo = $_POST['correo'];
                $telefono = $_POST['telefono'];
                $observaciones = $_POST['observaciones'];
                $resultado = $clientes->insert_cliente($nombres, $apellidoP, $apellidoM, $sexo, $correo, $telefono, $observaciones);
                echo json_encode(['success' => $resultado]);
            break;

            case 'total_clientes':
                $totalClientes = $clientes->total_clientes();
                echo json_encode(['total_clientes' => $totalClientes['total_clientes']]);
            break;

        }
    }
?>