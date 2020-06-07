<?php 
$conexion=mysqli_connect('localhost','root','','sifcalbd');

$finca = $_POST["finca"];
	$sql="SELECT id,
	lote,
	fincas_id
from lotes 
where fincas_id='$finca'";

$result=mysqli_query($conexion,$sql);

$cadena=" 
        <select id='lista4'  class='form-control error' name='lote'>
        <option value='0'>Selecciona una lote</option>";    
        
        

while ($ver=mysqli_fetch_row($result)) {
    $cadena=$cadena.'<option value='.$ver[0].'-'.utf8_encode($ver[1]) .'>' .utf8_encode($ver[1]). '</option>';
}

echo  $cadena."</select>";

?>