<?php
    require_once('../config/Conexion.php');
    //creo la clase autenticacion
    class Autenticacion extends Conectar{
        public function login(){
            //llamo la variable conexion de la clase autenticacion y uso el metoo obtenerConexion 
            //para tener la conexion con la bd
            $conexion=parent::obtenerConexion();
            parent::set_names();
            //valido si se presiono el boton enviar
            if(isset($_POST["enviar"])){
                //declaro en una variable los valores que fueron asignados en los campos del formulario
                $correo = $_POST["correo"];
                $contraseña = $_POST["contraseña"];
                //si el correo y la contraseña estan vacios se muestra el mensaje
                if(empty($correo) and empty($contraseña)){
                    $_SESSION['error'] = 'Los campos están vacíos';
                    header("Location: ../views/login.php");
                    exit();
                }else{
                    $sql = "SELECT * FROM usuarios WHERE correo=? AND contraseña=? AND estado=1"; //consulta a la tabla de la bd para validad el correo y la contraseña
                    $stmt=$conexion->prepare($sql);
                    $stmt->bind_param('ss', $correo, $contraseña);  
                    $stmt->execute();
                    $resultado = $stmt->get_result()->fetch_assoc();
                    if (is_array($resultado) and count($resultado)>0){
                        $_SESSION["id_usuarios"]=$resultado["id_usuarios"];
                        $_SESSION["nombre"]=$resultado["nombre"];
                        $_SESSION["apellidoP"]=$resultado["apellidoP"];
                        $_SESSION["apellidoM"]=$resultado["apellidoM"];
                        $_SESSION["sexo"]=$resultado["sexo"];
                        $_SESSION["correo"]=$resultado["correo"];
                        $_SESSION["contraseña"]=$resultado["contraseña"];                        
                        $_SESSION["telefono"]=$resultado["telefono"];
                        $_SESSION["estado"]=$resultado["estado"];
                        $_SESSION["id_rol"]=$resultado["id_rol"];
                        /*TODO: Si todo esta correcto indexar en home */
                        $_SESSION['bienvenida'] = '¡Hola, ' . $_SESSION["nombre"] . ' nos alegra tenerte aquí nuevamente';
                        header("Location: ../views/dashboard.php");
                        
                        exit();
                    }else{
                        /*TODO: En caso no coincidan el usuario o la contraseña */
                        $_SESSION['error'] = 'Usuario o contraseña incorrectos';
                        header("Location: ../views/login.php");
                        exit();
                    }
                }

            }
        }

        
    }
    
?>