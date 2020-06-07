<?php session_start();

    if(isset($_SESSION['usuario'] )) {
        header('location: index.php');
    }

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        
        $usuario = $_POST['usuario'];
        $passwd = $_POST['passwd'];
        $passwd = hash('sha512', $passwd);
        
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=sifcalbd', 'root', '');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
        
        $statement = $conexion->prepare('
        SELECT * FROM usuarios WHERE usuario = :usuario AND passwd = :passwd'
        );
      
        $statement->execute(array(
            ':usuario' => $usuario,
            ':passwd' => $passwd
        ));
            
        $resultado = $statement->fetch();
   
        if ($resultado !== false){
            $_SESSION['usuario'] = $usuario;
            header('location: inicio.php');
        }else{
            $error .= '<p class="me"><i class="fas fa-exclamation-circle"></i> Este usuario no existe</p>';
        }
    }
    
require 'vistas/login-vista.php';


?>