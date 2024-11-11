<?php
    require_once ('../models/PerfilUsuarios.php');

    if (isset($_GET['opc'])) {
        $opc = $_GET['opc'];
        $perfilUsuario = new PerfilUsuarios();
    
        switch ($opc) {
            case 'mostrarPerfil':
                $id_usuarios = $_POST['id_usuarios'];
                $datosUsuario = $perfilUsuario->mostrarPerfil($id_usuarios);
                echo json_encode($datosUsuario);
            break;

            case 'actualizarPerfil':
                $id_usuarios = $_POST['id_usuarios'];
                $nombre = $_POST['nombre'];
                $apellidoP = $_POST['apellidoP'];
                $apellidoM = $_POST['apellidoM'];
                $sexo = $_POST['sexo'];
                $correo = $_POST['correo'];
                $contraseña = $_POST['contraseña'];
                $telefono = $_POST['telefono'];
                $resultado = $perfilUsuario->actualizarPerfil($id_usuarios, $nombre, $apellidoP, $apellidoM, $sexo, $correo, $contraseña, $telefono);
                echo json_encode(['success' => $resultado]);
            break;
        }
    }
?>
