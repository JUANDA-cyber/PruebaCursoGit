
<?php include("plantillas/head.php"); ?>
 <?php include("plantillas/navbar.php");?>

    <main class="main min-vh-100">
    <div class="header" style="background-image: url(imagenes/algodon-login.jpg);">
        <div class="block-title">
        <img class="logoinicio"src="imagenes/SIFCAL-LOGO1.png">
            <h4 class="logo1 fs-60">Bienvenido al sistema SIFCAL usuario: <?php echo  $_SESSION['usuario'];?></h4>
            <p class="fs-20">Sistema de calculo para fertilizacion de cultivos semestrales del algodon en los departamentos Tolima y Huila</p>
         </div> 
        </div>
            </div>                           
                                                <div id="cuerpo"><!-- page content -->
                                                <div class="content1 animate-panel">
                    
                                                    <div class="row">
                                                    <div class="contenedor">
                                                        <div class="bloquecal1">
                                                            <div class="bloquecal2">
                                                             <a href="analisis_calcular/registro_analisis_vista.php">
                                                            
                                                            <div class="imagen">
                                                                <img src="imagenes/calculadora.png" class="imagen">
                                                                <p class="titulo">Calcular</p>
                                                            </div>
                                                            </a>
                                                            <div class="info">

                                                                <p class="adicion">Ingrese los resultados del analisis del suelo obtenido para brindar recomendaciones para su cultivo</p>
                                                            </div>
                                                          
                                                        </div>
                                                    </div>
                                                        <div class="bloquehis">
                                                            <div class="bloquehis2">
                                                            <a href="historial/historial_vista.php">
                                                                <div class="imagen1">
                                                                    <img src="imagenes/historial.png" class="imagen">
                                                                    <p class="titulo">Historial</p>
                                                                </div>
                                                            </a>  
                                                                <div class="info1">
                                                                    <p class="adicional">Ingrese los resultados del analisis del suelo obtenido para brindar recomendaciones para su cultivo</p>
                                                                </div>
                </div>
                                                            </div>
                                                        
</main>
<?php include("plantillas/footer.php") ?>