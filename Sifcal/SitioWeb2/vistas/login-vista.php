<?php
include("plantillas/head.php")
?>
    
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">

                <div class="login100-form-title" style="background-image: url(imagenes/algodon-login.jpg);">
					<span class="login100-form-title-1">
						LOGIN
					</span>
				</div>

        
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="login100-form validate-form">
           
                <div class=" wrap-input100 " data-validate="Ingrese usuarios">
                <span class="label-input100">Usuario</span>
                        <input class="input100" type="text"  required  name="usuario"/>
                        <span class="focus-input100"></span>
                    </div>

                    <div class=" wrap-input100" data-validate = "Ingrese contraseña">
                    <span class="label-input100">Contraseña</span>
                        <input class="input100" type="password" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="*****" name="passwd"/>
                        <span class="focus-input100"></span>
                    </div>
                    
                   <div class="bloquemen">
				   <?php if(!empty($error)): ?>
                    <div class="mensaje">
                        <?php echo $error; ?>
                    </div>
					<?php endif; ?>
					</div>

                    <div class="flex-sb-m w-full p-b-30">
                        <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">Entrar</button>
							</div>

							
						<a href="registrar.php" class="login100-form-btn">Crear cuenta</a>
                            
							</a>
							</div>
						
</div>


</form>

					
</div>
</div>
    </div>
    
<?php
include("plantillas/footer.php")
?>