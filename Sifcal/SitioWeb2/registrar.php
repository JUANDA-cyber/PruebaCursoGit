<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }

    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $usuario = $_POST['usuario'];
        $passwd = $_POST['passwd'];
        $passwd2 = $_POST['passwd2'];
        $tipo_id = $_POST['tipo_id'];
        $correo = $_POST['correo'];
        $ciudad_id = $_POST['ciudad_id'];
        $telefono = $_POST['telefono'];
        
        $passwd = hash('sha512', $passwd);
        $passwd2 = hash('sha512', $passwd2);
        
        $error = '';
        
        if (empty($correo) or empty($usuario) or empty($passwd) or empty($passwd2) or empty($ciudad_id)  or empty($telefono)){
            
            $error .= '<p class="me"><i class="fas fa-exclamation-circle"></i> Por favor llenar los campos</p>';
        
        }else{
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=sifcalbd', 'root', '');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
            
            $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
            $statement->execute(array(':usuario' => $usuario));
            $resultado = $statement->fetch();
            
                        
            if ($resultado != false){
                $error .= '<p class="me"><i class="fas fa-exclamation-circle"></i> Este usuario ya existe</p>';
            }
            
            if ($passwd != $passwd2){
                $error .= '<p class="me"><i class="fas fa-exclamation-circle"></i> Las contraseñas no coinciden</p>';
            }
            
        }
        
        if ($error == ''){
            $statement = $conexion->prepare('INSERT INTO usuarios (usuario, passwd, correo,  telefono, ciudades_id, tipo_id ) VALUES (:usuario, :passwd, :correo, :telefono, :ciudades_id, :tipo_id )');
            $statement->execute(array(
                
                ':usuario' => $usuario,
                ':passwd' => $passwd,
                ':correo' => $correo,
                ':telefono' => $telefono,
                ':ciudades_id' => $ciudad_id,
                ':tipo_id' => $tipo_id,
                
            ));
            header('location: inicio.php');
        }
    }

    require 'vistas/registrar-vista.php';

?>