<?php
error_reporting (0);
session_start();


function showHistorial(){
    $usuario = $_SESSION['usuario'];

    $conexion=mysqli_connect('localhost','root','','sifcalbd');          
    $sql="SELECT * from calcular where usuario='$usuario'";
    $result=mysqli_query($conexion,$sql);
    while($row = $result->fetch_array(MYSQLI_ASSOC)){           
     
        echo '<tr align="">
        <td><b class="">'.$row[fregistro].'</b></td>  
        <td><b class="">'.$row[var_1].' '.$row[var_2].'</b></td>  
        <td>
        <a href="../historial/revision_vista.php?id='.$row[id_calcular].'">
        <button >
        <i class="far fa-eye"></i>
        </button>
        </a>
        </td>  
    
        </tr>';

    }


   



}


?>