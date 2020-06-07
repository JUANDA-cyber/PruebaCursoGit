<?php

include("../plantillas/head.php");
include("../plantillas/navbar.php");
 ?>

 <!-- Main -->
<main class="main min-vh-100">
          
<div class="header" style="background-image: url(../imagenes/algodon-login.jpg);">
        <div class="block-title">
        <img class="logoinicio"  src="../imagenes/SIFCAL-LOGO1.png">
            <h6 class="logo1 fs-60">CALCULAR</h6>
         </div> 
        </div>

       
       
            <!--CUERPO DEL SITIO-->
           <!-- page content -->
            <div class="content1 animate-panel">
              <form method="POST">   
            
        
            <div class="contenedor1">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1" style>
                    
                    <input type="hidden" name="deparx">
                    <div class="hpanel">


                        <!--primer block padre-->

                        <?php  include("../analisis_calcular/info_muestra.php"); ?>

                         <!--segundo block body padre-->

                         <?php  include("../analisis_calcular/requerimiento_plantayproduccion.php"); ?>  
                        
                         <!--tercer block padre-->

                         <?php include("../analisis_calcular/analisis_resultados.php");?>
                                                                                                                    </div>
                    
                     </form>

                     <?php if(!empty($error)): ?>
            <div class="mensaje">

                <?php echo $error; ?>
            </div>
            <?php endif; ?>
                     
</main>

<?php include("../plantillas/footer.php");?>