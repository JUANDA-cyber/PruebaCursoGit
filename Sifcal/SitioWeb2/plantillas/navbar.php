<nav class="container-right">
                <div class="right1 bg-color">
                <span  class="btn-menu hover-color" id="btn-menu">
                            <i class="fas fa-bars" aria-hidden="true"></i>
                        </span> 



                            <div class="right-despegable bg-color-1" id="right-despegable">
                            <ul>

                <?php if(!isset($_SESSION['usuario'])) {?>

                   
                <a href="/SitioWeb2/index.php">
                    <li class="item-menu hover-color">
                       
                        <span aria-hidden="true" class="menu">Inicio</span>
                    </li>
                </a> 
                <a href="/SitioWeb2/vistas/nosotros_vista.php">
                    <li class="item-menu hover-color">
                       
                        <span aria-hidden="true" class="menu">Nosotros</span>
                    </li>
                </a>
                <a href="#">
                    <li class="item-menu hover-color">
                       
                        <span aria-hidden="true" class="menu">Contacto</span>
                    </li>
                </a> 
                <a href="#">
                    <li class="item-menu hover-color">
                        
                        <span aria-hidden="true" class="menu">Servicios</span>
                    </li>
                </a>  
               
     <!-- end left -->
                   
<?php 
}else{?>


<ul>
                
                    <li class="item-menu hover-color">
                    <a href="/SitioWeb2/index.php">
                        <span class="menu">Inicio</span>
                        </a> 
                    </li>
               
                <a href="#">
                    <li class="item-menu hover-color">
                    <a href="/SitioWeb2/vistas/nosotros_vista.php">
                        <span class="menu">Nosotros</span>
                    </li>
                </a>
                <a href="#">
                    <li class="item-menu hover-color">
                       
                        <span class="menu">Contacto</span>
                    </li>
                </a> 
                <a href="/SitioWeb2/cerrar.php">
                    <li class="item-menu hover-color">
                        
                        <span class="menu">Cerrar sesion</span>
                    </li>
                </a>  
         
                      
<?php }?>  
               
              

            </ul>
        </div> <!-- end left -->

</nav>
