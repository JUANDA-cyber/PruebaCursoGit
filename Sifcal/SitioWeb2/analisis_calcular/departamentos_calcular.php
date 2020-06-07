<?php 
$conexion=mysqli_connect('localhost','root','','sifcalbd');

$departamento = $_POST["departamento"];
		
	$sql="SELECT id,
	ciudad,
	departamentos_id
from ciudades
where departamentos_id='$departamento'";



	$result=mysqli_query($conexion,$sql);

	$cadena="
			<select name='ciudad'  id='lista2' class='form-control error' name='lista2'>
			<option value='0'>Selecciona una ciudad</option>";

			while ($ver=mysqli_fetch_row($result)) {
			
				$cadena=$cadena.'<option value='.$ver[0].'-'.utf8_encode($ver[1]) .'>' .utf8_encode($ver[1]). '</option>';
			}
		
			echo  $cadena."</select>";
		

?>	