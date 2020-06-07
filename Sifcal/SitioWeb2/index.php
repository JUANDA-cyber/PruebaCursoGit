<?php session_start();


    if(isset($_SESSION['usuario'])) {
        header('location: inicio.php');
    }else{
        require 'vistas/home-vista.php';
    }
    
?>