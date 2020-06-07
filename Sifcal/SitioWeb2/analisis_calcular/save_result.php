<?php
require '../conexion1.php';
session_start();

$lista1 = $_POST["lista1"];
$lista2 = $_POST["lista2"];
$lista3 = $_POST["lista3"];
$lista4 = $_POST["lista4"];
$variedad_semilla = $_POST["variedad_semilla"];
$prod_esperada = $_POST["prod_esperada"];
$fecha_i = $_POST["fecha_i"];
$fecha_f = $_POST["fecha_f"];
$textura_suelo = $_POST["textura_suelo"];
$densidad_aparente = $_POST["densidad_aparente"];
$ph = $_POST["ph"];
$cic = $_POST["cic"];
$materia_organica = $_POST["materia_organica"];
$p = $_POST["p"];
$k = $_POST["k"];
$ca = $_POST["ca"];
$mg = $_POST["mg"];
$s = $_POST["s"];
$na = $_POST["na"];
$al = $_POST["al"];
$fe = $_POST["fe"];
$mn = $_POST["mn"];
$zn = $_POST["zn"];
$cu = $_POST["cu"];
$b = $_POST["b"];
$usuario =  $_SESSION['usuario'];



		try
		{
			$stmt=$DB_con->prepare("INSERT INTO calcular(usuario,var_1,var_2,var_3,var_4,var_5,var_6,var_7,var_8,var_9,var_10,var_11,
			var_12,var_13,var_14,var_15,var_16,var_17,var_18,
			var_19,var_20,var_21,var_22,var_23,var_24,var_25,fregistro) VALUES
			 (:usuario,:var_1,:var_2,:var_3,:var_4,:var_5,:var_6,:var_7,:var_8,:var_9,:var_10,:var_11,:var_12,:var_13,:var_14,:var_15,
			 :var_16,:var_17,:var_18,:var_19,:var_20,:var_21,:var_22,:var_23,:var_24,:var_25,curdate())");
			$stmt ->bindparam(":usuario", $usuario);
			$stmt ->bindparam(":var_1", $lista1);
			$stmt ->bindparam(":var_2", $lista2);
			$stmt ->bindparam(":var_3", $lista3);
			$stmt ->bindparam(":var_4", $lista4);
			$stmt ->bindparam(":var_5", $variedad_semilla);
			$stmt ->bindparam(":var_6", $prod_esperada);
			$stmt ->bindparam(":var_7", $fecha_i);
			$stmt ->bindparam(":var_8", $fecha_f);
			$stmt ->bindparam(":var_9", $textura_suelo);
			$stmt ->bindparam(":var_10", $densidad_aparente);
			$stmt ->bindparam(":var_11", $ph);
			$stmt ->bindparam(":var_12", $cic);
			$stmt ->bindparam(":var_13", $materia_organica);
			$stmt ->bindparam(":var_14", $p);
			$stmt ->bindparam(":var_15", $k);
			$stmt ->bindparam(":var_16", $ca);
			$stmt ->bindparam(":var_17", $mg);
			$stmt ->bindparam(":var_18", $s);
			$stmt ->bindparam(":var_19", $na);
			$stmt ->bindparam(":var_20", $al);
			$stmt ->bindparam(":var_21", $fe);
			$stmt ->bindparam(":var_22", $mn);
			$stmt ->bindparam(":var_23", $zn);
			$stmt ->bindparam(":var_24", $cu);
			$stmt ->bindparam(":var_25", $b);
			$stmt->execute();
		}
		catch(Exception $e)
		{
			echo $e->getMessage();			
		}





?>