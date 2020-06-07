<?php
session_start();

if(@is_null($_SESSION['usuario'])) {
    header('location: index.php');
    
}

include("../plantillas/head.php");
include("../plantillas/navbar.php");
include("historialController.php");
 ?>

 <!-- Main -->
 <main class="main min-vh-100">

<div class="header" style="background-image: url(../imagenes/algodon-login.jpg);">
        <div class="block-title">
        <img class="logoinicio"  src="../imagenes/SIFCAL-LOGO1.png">
            <h6 class="logo1 fs-60">HISTORIAL</h6>
         </div> 
        </div>
<div class="tablahistorial">
        <table class="tablareq dataTables_wrapper form-inline dt-bootstrap no-footer" id="tablaHistorial">
          <thead>
            <tr class="bordeUp fuenteTamaño fondoContainer">
              <td style="color:blue;"><b class="texto">FECHA REGISTRO</b></td>
              <td style="color:blue;"><b class="">DEPARTAMENTO MUNICIPIO</b></td>
              <td style="color:blue;"><b class="">DETALLES</b></td>
            </tr>
          </thead>
          <tbody>
            <?php
           showHistorial();
            ?>
          </tbody>
        </table>

</div>




 </main>


       <?php include("../plantillas/footer.php"); ?>
