<?php 
$conexion=mysqli_connect('localhost','root','','sifcalbd');
$departamento = $_POST["departamento"];

	$sql="SELECT id,
			 ciudad,
			 departamentos_id
		from ciudades 
		where departamentos_id='$departamento'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<span class='label-input100'>Ingrese ciudad</span>
			<select name='ciudad_id' id='lista' class='form-control error' name='lista'>
			<option value='0'>Selecciona una ciudad</option>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
	}

	echo  $cadena."</select>";

?>