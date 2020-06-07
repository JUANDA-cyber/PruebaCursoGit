<?php 
$conexion=mysqli_connect('localhost','root','','sifcalbd');

$ciudad = $_POST["ciudad"];
	$sql="SELECT id,
	finca,
	ciudades_id
from fincas 
where ciudades_id='$ciudad'";

$result=mysqli_query($conexion,$sql);

$cadena="
        <select id='lista3' class='form-control error' name='finca'>
        <option value='0'>Selecciona una finca</option>";    
        
        

while ($ver=mysqli_fetch_row($result)) {
	$cadena=$cadena.'<option value='.$ver[0].'-'.utf8_encode($ver[1]) .'>' .utf8_encode($ver[1]). '</option>';
}

echo  $cadena."</select>";


?>