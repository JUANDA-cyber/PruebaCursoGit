<?php

session_start();
$nt;
$cice; 
$id_calcular = $_GET['id'];
$usuariosh = "";
$var_1 ="";
$var_2 ="";
$var_3 ="";
$var_4 ="";
$var_5 ="";
$var_6 ="";
$var_7 ="";
$var_8 ="";
$var_9 ="";
$var_10 ="";
$var_11 ="";
$var_12 ="";
$var_13 ="";
$var_14 ="";
$var_15 ="";
$var_16 ="";
$var_17 ="";
$var_18 ="";
$var_19 ="";
$var_20 ="";
$var_21 ="";
$var_22 ="";
$var_23 ="";
$var_24 ="";
$var_25 ="";


$conexion=mysqli_connect('localhost','root','','sifcalbd');          
$sql="SELECT * from calcular where id_calcular='$id_calcular'";
$result=mysqli_query($conexion,$sql);
while($row = $result->fetch_array(MYSQLI_ASSOC)){           
   $usuariosh .= "$row[usuario]";
   $var_1 .= "$row[var_1]";
   $var_2 .= "$row[var_2]";
   $var_3 .= "$row[var_3]";
   $var_4 .= "$row[var_4]";
   $var_5 .= "$row[var_5]";
   $var_6 .= "$row[var_6]";
   $var_7 .= "$row[var_7]";
   $var_8 .= "$row[var_8]";
   $var_9 .= "$row[var_9]";
   $var_10 .= "$row[var_10]";
   $var_11 .= "$row[var_11]";
   $var_12 .= "$row[var_12]";
   $var_13 .= "$row[var_13]";
   $var_14 .= "$row[var_14]";
   $var_15 .= "$row[var_15]";
   $var_16 .= "$row[var_16]";
   $var_17 .= "$row[var_17]";
   $var_18 .= "$row[var_18]";
   $var_19 .= "$row[var_19]";
   $var_20 .= "$row[var_20]";
   $var_21 .= "$row[var_21]";
   $var_22 .= "$row[var_22]";
   $var_23 .= "$row[var_23]";
   $var_24 .= "$row[var_24]";
   $var_25 .= "$row[var_25]";
}
          
$usuario = $usuariosh;

$dep = $var_1;
$ciu = $var_2;
$fin = $var_3;
$lo = $var_4;
$variedad_semilla = $var_5;
$prod_esperada = $var_6;
$fecha_i = $var_7;
$fecha_f = $var_8;

$textura_suelo = $var_9;
$densidad_aparente = $var_10;
$ph = $var_11;
$cic = $var_12;
$materia_organica = $var_13;
$p = $var_14;
$k = $var_15;
$ca = $var_16;
$mg = $var_17;
$s = $var_18;
$na = $var_19;
$al = $var_20;
$fe = $var_21;
$mn = $var_22;
$zn = $var_23;
$cu = $var_24;
$b = $var_25;

$vol=10000*0.20;
$kgdensidad=$densidad_aparente;
$pesohec=$vol*$kgdensidad;

if($ph<=4.5) {
    $rph ="Extremadamente ácido";
}
else if($ph>=4.6 & $ph<=5.5) {
    $rph ="Fuertemente ácido";
}
else if($ph>=5.6 & $ph<=6.0) {
    $rph= "Moderamente ácido";
}
else if($ph>=6.1 & $ph<=6.5) {
    $rph="Ligeramente ácido";
}
else if($ph>=6.6 & $ph<=7.3) {
    $rph="Neutro";
}
else if($ph>=7.4 & $ph<07.8) {
    $rph="Ligeramente alcalino";
}
else if($ph>=7.9 & $ph<=8.4) {
    $rph="Moderamente alcalino";
}
else if($ph>=8.5 & $ph<=9.0) {
    $rph="Fuertemente alcalino";
}
else if($ph>=9.1) {
    $rph="Extremadamente alcalino";
}


//rangos de cic
if($cic<=7) {
    $rcic= "Bajo";
}
else if($cic>=7.1 & $cic<=12.0) {
    $rcic="Medio a Bajo";
}
else if($cic>=12.1 & $cic<=24.0) {
    $rcic="Medio a Alto(Ideal)";
}
else if($cic>=24) {
    $rcic="Alto";
}






$nt=($materia_organica/20);

//los datos entran en % en nitrogeno (Nt)
$porcarbo=$materia_organica/1.724;
$relacioncnt=$porcarbo/$nt;
if($relacioncnt<=10){
    $ppmnt=$nt*225;
    //para pasar de ppm a kg/h en Nitrogeno (Nt)
    $kgnt=($ppmnt*$pesohec)/1000;
}
else if($relacioncnt>=11 & $relacioncnt<=12){
    $ppmnt=$nt*140;
    //para pasar de ppm a kg/h en Nitrogeno (Nt)
    $kgnt=($ppmnt*$pesohec)/1000;
}
else if($relacioncnt>=13){
    $ppmnt=$nt*11.2;
    //para pasar de ppm a kg/h en Nitrogeno (Nt)
    $kgnt=($ppmnt*$pesohec)/1000;
}

$diskgnt=$kgnt*0.35;
$plannt=$prod_esperada*40;
if($plannt>=$diskgnt){
    $resplankgnt=$plannt-$diskgnt;
}else{
    $resplankgnt=0;
}







//rango del nitrogeno

if($nt<=0.09) {
    $resnt="Bajo";
}
else if($nt>=0.10 & $nt<=0.18) {
    $resnt="Medio a Bajo";
}
else if($nt>=0.19 & $nt<=0.36) {
    $resnt="Medio a Alto(Ideal)";
}
else if($nt>=0.37 & $nt<=0.55) {
    $resnt="Alto";
}
else if($nt>=0.56) {
    $resnt="Muy Alto";
}


// rangos de fosforo (p)
				
if($p>=0 & $p<=9) {
    $rp="Muy Bajo";
}
else if($p>=10 & $p<=19) {
    $rp="Bajo";
}

else if($p>=20 & $p<=40) {
    $rp="Normal";
}

else if($p>=41) {
    $rp="Alto";
}


// rangos de Potasio (K)
				
if($k<=0.10) {
    $rk="Bajo";
}
else if($k>=0.11 & $k<=0.20) {
    $rk="Medio a Bajo";
}
else if($k>=0.21 & $k<=0.30) {
    $rk="Medio a Alto(Ideal)";
}
else if($k>=0.31 & $k<=0.40) {
    $rk="Alto";
}
else if($k>=0.41) {
    $rk="Muy Alto";
}


// rangos de Calcio (Ca)
				
if($ca>=1.25 & $ca<=2.5) {
    $rca="Muy Bajo";
}
else if($ca>=2.51 & $ca<=5.0) {
    $rca="Bajo";
}
else if($ca>=5.1 & $ca<=10) {
    $rca="Normal";
}
else if($ca>=10.1 & $ca<=15) {
    $rca="Alto";
}
else if($ca>=15.1) {
    $rca="Muy Alto";
}


// rangos de Magnesio (Mg)
				
if($mg>=1.0 & $mg<=2.0) {
    $rmg="Muy Bajo";
}
else if($mg>=2.1 & $mg<=4.0) {
    $rmg="Bajo";
}
else if($mg>=4.1 & $mg<=8.0) {
    $rmg="Normal";
}
else if($mg>=8.1 & $mg<=10) {
    $rmg="Alto";
}
else if($mg>=10.1) {
    $rmg="Alto";
}


// rangos de Azufre (S)
				
if($s<=2.0) {
    $rs="Muy Bajo";
}			
else if($s>=2.1 & $s<=5.0) {
    $rs="Bajo";
}
else if($s>=5.1 & $s<=10) {
    $rs="Normal";
}
else if($s>=10.1 & $s<=20) {
    $rs="Alto";
}
else if($s>=20.1) {
    $rs="Muy Alto";
}

// rangos de Sodio(Na)
				
if($na<=0.4) {
    $rna="Bajo";
}	
else if($na==0.5) {
    $rna="Normal";
}	
else if($na>=0.6 & $na<=0.9) {
    $rna="Alto";
}	
else if($na>=1) {
    $rna="Muy Alto";
}

// rangos de aluminio(Al)
				
if($al<=0.5) {
    $ral="Muy Bajo";
}	
else if($al>=0.6 & $al<=1) {
    $ral="Bajo";
}	
else if($al>=1.1 & $al<=1.9) {
    $ral="Suficiente a Alto";
}
else if($al>=2.0) {
    $ral="Muy Alto";
}

// rangos de Hierro(Fe)
				
if($fe<=10) {
    $rfe="Muy Bajo";
}
else if($fe>=10.1 & $fe<=25) {
    $rfe="Bajo";
}
else if($fe>=25.1 & $fe<=50) {
    $rfe="suficiente";
}
else if($fe>=50.1 & $fe<=100) {
    $rfe="Alto";
}
else if($fe>=100.1) {
    $rfe="Muy Alto";
}

// rangos de Manganeso (Mn)
				
if($mn<=2.5) {
    $rmn="Muy Bajo";
}
else if($mn>=2.6 & $mn<=5.0) {
    $rmn="Bajo";
}
else if($mn>=5.1 & $mn<=10) {
    $rmn="suficiente";
}
else if($mn>=10.1 & $mn<=20) {
    $rmn="Alto";
}
else if($mn>=20.1) {
    $rmn="Muy Alto";
}

// rangos de Zinc (Zn)
				
if($zn<=0.5) {
    $rzn="Muy Bajo";
}
else if($zn>=0.6 & $zn<=1.5) {
    $rzn="Bajo" ;
}
else if($zn>=1.6 & $zn<=5.0) {
    $rzn="Suficiente";
}
else if($zn>=5.1 & $zn<=10) {
    $rzn="Alto";
}
else if($zn>=10.1) {
    $rzn="Muy Alto";
}


// rangos de Cobre (Cu)
				
if($cu<=0.5) {
    $rcu="Muy Bajo";
}
else if($cu>=0.6 & $cu<=1.0) {
    $rcu="Bajo";
}
else if($cu>=1.1 & $cu<=3.0) {
    $rcu="Suficiente";
}
else if($cu>=3.1 & $cu<=5.0) {
    $rcu="Alto";
}
else if($cu>=5.1) {
    $rcu="Muy Alto";
}

// rangos de Boro (B)
				
if($b<=0.2) {
    $rb="Muy Bajo";
}
else if($b>=0.3 & $b<=0.5) {
    $rb="Bajo";
}
else if($b>=0.6 & $b<=1.0) {
    $rb="Suficiente";
}
else if($b>=1.1 & $b<=1.5) {
    $rb="Alto";
}
else if($b>=1.6) {
    $rb="Muy Alto";
}

$cice=($ca+$mg+$k+$al);


//los datos entran en ppm en fostoro (p)
$ppmp=$p;
//para pasar de ppm a kg/h en fostoro (p)
$kgp=($ppmp*$pesohec)/1000;
$diskgp=$kgp*0.65;
$planp=$prod_esperada*16;
if($planp>=$diskgp){
    $resplankgp=$planp-$diskgp;
}else{
    $resplankgp=0;
}

//para pasar de meq a ppm en potasio
$ppmk=($k*390);
//para pasar de ppm a kg/h en potasio
$kgk=($ppmk*$pesohec)/1000;
$diskgk=$kgk*0.40;
$plank=$prod_esperada*32;
if($plank>=$diskgk){
    $resplankgk=$plank-$diskgk;
}else{
    $resplankgk=0;
}

//para pasar de meq a ppm en calcio
$ppmca=($ca/100)*(20)*(1000);
//para pasar de ppm a kg/h en calcio
$kgca=($ppmca*$pesohec)/1000;
$diskgca=$kgca*0.65;
$planca=$prod_esperada*6;
if($planca>=$diskgca){
    $resplankgca=$planca-$diskgca;
}else{
    $resplankgca=0;
}

//para pasar de meq a ppm en magnesio
$ppmmg=($mg*120);
//para pasar de ppm a kg/h en magnesio
$kgmg=($ppmmg*$pesohec)/1000;
$diskgmg=$kgmg*0.45;
$planmg=$prod_esperada*10;
if($planmg>=$diskgmg){
    $resplankgmg=$planmg-$diskgmg;
}else{
    $resplankgmg=0;
}

//los datos entran en ppm en Azufre (s)
$ppms=$s;
//para pasar de ppm a kg/h en Azufre (s)
$kgs=($ppms*$pesohec)/1000;
$diskgs=$kgs*0.45;
$plans=$prod_esperada*10;
if($plans>=$diskgs){
    $resplankgs=$plans-$diskgs;
}else{
    $resplankgs=0;
}

//para pasar de meq a ppm en sodio
$ppmna=($na/100)*(20)*(1000);
//para pasar de ppm a kg/h en sodio
$kgna=($ppmna*$pesohec)/1000;


//para pasar de meq a ppm en aluminio
$ppmal=($al/100)*(20)*(1000);
//para pasar de ppm a kg/h en aluminio
$kgal=($ppmal*$pesohec)/1000000;


//los datos entran en ppm en hierro (fe)
$ppmfe=$fe;
//para pasar de ppm a kg/h en hierro (fe)
$kgfe=($ppmfe*$pesohec)/1000;
$diskgfe=$kgfe*0.45;
$planfe=$prod_esperada*1;
if($planfe>=$diskgfe){
    $resplankgfe=$planfe-$diskgfe;
}else{
    $resplankgfe=0;
}

//los datos entran en ppm en manganeso (Mn)
$ppmmn=$mn;
//para pasar de ppm a kg/h en manganeso (Mn)
$kgmn=($ppmmn*$pesohec)/1000;
$diskgmn=$kgmn*0.45;
$planmn=$prod_esperada*2;
if($planmn>=$diskgmn){
    $resplankgmn=$planmn-$diskgmn;
}else{
    $resplankgmn=0;
}

//los datos entran en ppm en zinc (zn)
$ppmzn=$zn;
//para pasar de ppm a kg/h en zinc (zn)
$kgzn=($ppmzn*$pesohec)/1000;
$diskgzn=$kgzn*0.45;
$planzn=$prod_esperada*1;
if($planzn>=$diskgzn){
    $resplankgzn=$planzn-$diskgzn;
}else{
    $resplankgzn=0;
}

//los datos entran en ppm en cobre (cu)
$ppmcu=$cu;
//para pasar de ppm a kg/h en cobre (cu)
$kgcu=($ppmcu*$pesohec)/1000;
$diskgcu=$kgcu*0.45;
$plancu=$prod_esperada*0.5;
if($plancu>=$diskgcu){
    $resplankgcu=$plancu-$diskgcu;
}else{
    $resplankgcu=0;
}

//los datos entran en ppm en Boro (b)
$ppmb=$b;
//para pasar de ppm a kg/h en Boro (b)
$kgb=($ppmb*$pesohec)/1000;
$diskgb=$kgb*0.45;
$planb=$prod_esperada*1;
if($planb>=$diskgb){
    $resplankgb=$planb-$diskgb;
}else{
    $resplankgb=0;
}

?>
