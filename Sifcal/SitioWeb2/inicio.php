<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'vistas/inicio-vista.php';
    }else{
        header ('location: login.php');
    }
        
?>