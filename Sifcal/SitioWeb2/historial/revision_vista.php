<?php
session_start();

if(@is_null($_SESSION['usuario'])) {
    header('location: index.php');
    
}

include("../plantillas/head.php");
include("../plantillas/navbar.php");
include("historialController.php");

include("../analisis_calcular/vista_calculos.php");

 ?>

 <!-- Main -->
 <main class="main min-vh-100">

<div class="header" style="background-image: url(../imagenes/algodon-login.jpg);">
        <div class="block-title">
        <img class="logoinicio"  src="../imagenes/SIFCAL-LOGO1.png">
            <h6 class="logo1 fs-60">HISTORIAL</h6>
         </div> 
        </div>


<div class="bloqueresul">
    <div class="bloquemuestra">
<div class="titulo">
<h3 class="text-primario">Localizacion de la muestra</h3>
</div>
<div class="contenido">
<p> Departamento: <?php echo "{$dep}";?></p>
<p> Ciudad: <?php echo "{$ciu}";?></p>
<p> Finca: <?php echo "{$fin}";?></p>
<p> Lote: <?php echo "{$lo}";?></p>
</div>
</div>

<div class="bloquereque">
<div class="titulo">
<h3 class="text-primario">Requerimientos planta y producción</h3>
</div>
<div class="contenido">
<p> Variedad de semilla: <?php echo "{$variedad_semilla}";?></p>
<p> Produccion esperada(t/ha): <?php echo $prod_esperada;?></p>
<p> Fecha de siembra: <?php echo $fecha_i;?></p>
<p> Fecha de germinacion: <?php echo $fecha_f;?></p>
</div>
</div>

<div class="bloqueanalisis">
<div class="titulo">
<h3 class="text-primario">Resultados del análisis suelo</h3>
</div>
<div class="contenido">
<p> Textura del suelo: <?php echo "{$textura_suelo}";?></p>
<p> Densidad aparente: <?php echo $densidad_aparente;?></p>
<p> pH: <?php echo $rph;?></p>
<p> CIC: <?php echo $rcic;?></p>
<p> Materia Organica: <?php echo $materia_organica;?>%</p>
<p> Nitrogeno: <?php echo $nt;?>%</p>
</div>
</div>
</div>

<table class="tablareq">
<tr>
<th>Elemento </th>
<th>Nutrientes totales en el suelo(kg/Ha) </th>
<th>Nutrientes Disponibles en el suelo(kg/Ha) </th>
<th>Rangos de nutrientes </th>
<th>Requerimientos minimos del cultivo(Kg/h)</th>
</tr>

<tr>
<td>Nt</td>
<td><?php echo $kgnt;?></td>
<td><?php echo $diskgnt;?></td>
<td><?php echo $resnt;?></td>
<td><?php echo $resplankgnt;?></td>
</tr> 

<tr>
<td>P</td>
<td><?php echo $kgp;?></td>
<td><?php echo $diskgp;?></td>
<td><?php echo $rp;?></td>
<td><?php echo $resplankgp;?></td>
</tr> 

<tr>
<td>K</td>
<td><?php echo $kgk;?></td>
<td><?php echo $diskgk;?></td>
<td><?php echo $rk;?></td>
<td><?php echo $resplankgk;?></td>
</tr> 

<tr>
<td>Ca</td>
<td><?php echo $kgca;?></td>
<td><?php echo $diskgca;?></td>
<td><?php echo $rca;?></td>
<td><?php echo $resplankgca;?></td>
</tr> 

<tr>
<td>Mg</td>
<td><?php echo $kgmg;?></td>
<td><?php echo $diskgmg;?></td>
<td><?php echo $rmg;?></td>
<td><?php echo $resplankgmg;?></td>
</tr> 

<tr>
<td>S</td>
<td><?php echo $kgs;?></td>
<td><?php echo $diskgs;?></td>
<td><?php echo $rs;?></td>
<td><?php echo $resplankgs;?></td>
</tr> 

<tr>
<td>Na</td>
<td><?php echo $kgna;?></td>
<td></td>
<td><?php echo $rna;?></td>
<td></td>
</tr>

<tr>
<td>Al</td>
<td><?php echo $kgal;?></td>
<td></td>
<td><?php echo $ral;?></td>
<td></td>
</tr> 

<tr>
<td>Fe</td>
<td><?php echo $kgfe;?></td>
<td><?php echo $diskgfe;?></td>
<td><?php echo $rfe;?></td>
<td><?php echo $resplankgfe;?></td>
</tr> 

<tr>
<td>Mn</td>
<td><?php echo $kgmn;?></td>
<td><?php echo $diskgmn;?></td>
<td><?php echo $rmn;?></td>
<td><?php echo $resplankgmn;?></td>
</tr> 

<tr>
<td>Zn</td>
<td><?php echo $kgzn;?></td>
<td><?php echo $diskgzn;?></td>
<td><?php echo $rzn;?></td>
<td><?php echo $resplankgzn;?></td>
</tr> 

<tr>
<td>Cu</td>
<td><?php echo $kgcu;?></td>
<td><?php echo $diskgcu;?></td>
<td><?php echo $rcu;?></td>
<td><?php echo $resplankgcu;?></td>
</tr> 

<tr>
<td>B</td>
<td><?php echo $kgb;?></td>
<td><?php echo $diskgb;?></td>
<td><?php echo $rb;?></td>
<td><?php echo $resplankgb;?></td>
</tr> 
</table>

<p> CICE: <?php echo $cice;?></p>

</div>



 </main>


       <?php include("../plantillas/footer.php"); ?>
