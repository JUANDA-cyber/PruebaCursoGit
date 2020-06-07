<?php 
session_start();

if(@is_null($_SESSION['usuario'])) {
    header('location: ../index.php');
    
}

////////////////// CONEXION A LA BASE DE DATOS //////////////////

 ///////////////////CONSULTA DE TABLAS///////////////////////
/////////// INSERTAR REGISTRO A AMBAS TABLAS ///////////////////////
if(isset($_POST['insertar']))// SI SE PRESIONA EL BOTÓN INSERTAR OCURRE LO SIGUIENTE:
    {
$lote=$_POST['lote'];

$prod_esperada=$_POST['prod_esperada'];
$fecha_i=$_POST['fecha_i'];
$fecha_f=$_POST['fecha_f'];
$variedad_semilla=$_POST['variedad_semilla'];
$textura_suelo=$_POST['textura_suelo'];
$densidad_aparente=$_POST['densidad_aparente'];
$ph=$_POST['ph'];
$cic=$_POST['cic'];
$materia_organica=$_POST["materia_organica"];
$p=$_POST["P"];
$k=$_POST["K"];
$ca=$_POST["Ca"];
$mg=$_POST["Mg"];
$s=$_POST["S"];
$na=$_POST["Na"];
$al=$_POST["Al"];
$fe=$_POST["Fe"];
$mn=$_POST["Mn"];
$zn=$_POST["Zn"];
$cu=$_POST["Cu"];
$b=$_POST["B"];

$error = '';

if ( empty($lote) or 
empty($variedad_semilla) or  
empty($textura_suelo) or 
empty($prod_esperada) or 
empty($fecha_i) or 
empty($fecha_f) or
empty($densidad_aparente) or
empty($ph) or
empty($cic) or
empty($materia_organica) or
empty($p) or
empty($k) or
empty($ca) or
empty($mg) or
empty($s) or
empty($na) or
empty($al) or
empty($fe) or
empty($mn) or
empty($zn) or
empty($cu) or
empty($b) )  {
            
    $error .= '<p class="me"><i class="fas fa-exclamation-circle"></i> Por favor llenar los campos</p>';

}
else{
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=sifcalbd', 'root', '');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }

}
// SE EJECUTA LA PRIMER INSERCIÓN A LA TABLA NO. 1


if ($error == ''){
    $statement = $conexion->prepare('INSERT INTO siembra (
	id, 
	prod_esperada, 
	fecha_i, 
	fecha_f, 
	variedad_semilla_id
	) 
	VALUES (
	null, 
	:prod_esperada, 
	:fecha_i, 
	:fecha_f, 
	:variedad_semilla_id, 
)
');



$statement->execute(array(         
    ':prod_esperada' => $prod_esperada,
    ':fecha_i' => $fecha_i,
    ':fecha_f' => $fecha_f,
    ':variedad_semilla_id' => $variedad_semilla,
));

if($statement=true)// MENSAJE DE CONFIRMACIÓN DE INSERCIÓN
{
	echo "<center><strong><h4>¡INSERCIÓN EXITOSA!<BR><a href=''>CLICK PARA VERIFICAR</a></strong></h4></center>";
}

    }


    $query=mysql_query("SELECT * FROM resultados WHERE densidad_aparente='".$densidad_aparente."'");


    $sql= "INSERT INTO resultados (
    id, 
    densidad_aparente, 
    ph, 
    cic, 
    materia_organica,
    fosforo,
    potasio,
    calcio,
    magnesio,
    azufre,
    sodio,
    aluminio,
    hierro,
    manganeso,
    zinc,
    cobre,
    boro,
    textura_suelo_id
    )

    VALUES (
    null, 
    '$densidad_aparente', 
    '$ph', 
    '$cic, 
    '$materia_organica',
    '$p',
    '$k',
    '$ca',
    '$mg',
    '$s',
    ':$na',
    '$al',
    '$fe',
    '$mn',
    '$zn',
    '$cu',
    '$b',
    '$textura_suelo'
)";

$result= mysql_query($sql);

    }

require 'registro_analisis_vista.php';

?>
