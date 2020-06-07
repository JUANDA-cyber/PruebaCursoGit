
<?php
include("plantillas/head.php")
?>

<div class="limiter">
        <div class="container-login100">
        <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(imagenes/algodon-login.jpg);">
					<span class="login100-form-title-1">
						CREAR CUENTA
					</span>
</div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="formulario1" method="post" class="login100-form validate-form">
           
        <div class=" wrap-input100  m-b-26" data-validate="Ingrese correo">
        <span class="label-input100">Correo</span>
                <input class="input100" type="email"  required placeholder="Ejemplo@correo.com" name="correo">
                <span class="focus-input100"></span>
            </div>


            <div class="wrap-input100  m-b-26" data-validate="Ingrese usuario">
                <span class=" label-input100">Usuario</span>
                <input class="input100" type="text"  required placeholder="Nombre Usuario" name="usuario">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100  m-b-26" data-validate="Ingrese tipo de identificacion">
                <span class=" label-input100">Tipo identificacion</span>
                <select name="tipo_id"  class="form-control error" aria-required="true" aria-invalid="true" aria-describedby="zonaa-error">
                <option value="xxx">Tipo de identificacion</option>
                    <option value="cc">Cedula de ciudadania</option>
                    <option value="ti">Tarjeta de identidad</option>
                    <option value="ce">Cedula extranjera</option>
                    <option value="pas">Pasaporte</option>
                </optgroup>
</select>
            </div>

            <div class="wrap-input100  m-b-26" data-validate="Ingrese identificacion">
                <span class=" label-input100">Ingrese identificacion</span>
                <input class="input100" type="text" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="" name="passwd">
                <span class="focus-input100"></span>
            </div>
            <p class="text-muted">Será usada como su contraseña</p>

            <div class="wrap-input100  m-b-26" data-validate="Ingrese identificacion">
                <span class=" label-input100">Repita identificacion</span>
                <input class="input100" type="text" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="" name="passwd2">
                <span class="focus-input100"></span>               
            </div>
            <p class="text-muted">Será usada como su contraseña</p>


  
          <div class=" wrap-input100  m-b-18" data-validate = "Ingrese departamento">
             <span class=" label-input100">Ingrese departamento</span>
			<select class="form-control error" id="lista" name="departamento"  aria-required="true" aria-invalid="true" aria-describedby="zonaa-error">
				<option value="0">Seleccione Departamento</option>
				<option value="1">Amazonas</option>
				<option value="2">Antioquia</option>
				<option value="3">Arauca</option>
				<option value="4">Atlántico</option>
                <option value="5">Bolívar</option>
				<option value="6">Boyacá</option>
				<option value="7">Caldas</option>
				<option value="8">Caquetá</option>
                <option value="9">Casanare</option>
				<option value="10">Cauca</option>
				<option value="11">Cesar</option>
				<option value="12">Chocó</option>
                <option value="13">Córdoba</option>
                <option value="14">Cundinamarca</option>
                <option value="15">Guainía</option>
                <option value="16">Guaviare</option>
                <option value="17">Huila</option>
                <option value="18">La Guajira</option>
                <option value="19">Magdalena</option>
                <option value="20">Meta</option>
                <option value="21">Nariño</option>
                <option value="22">Norte de Santander</option>
                <option value="23">Putumayo</option>
                <option value="24">Quindío</option>
                <option value="25">Risaralda</option>
                <option value="26">San Andrés y Providencia</option>
                <option value="27">Santander</option>
                <option value="28">Sucre</option>
                <option value="29">Tolima</option>
                <option value="30">Valle del Cauca</option>
                <option value="31">Vaupés</option>
                <option value="32">Vichada</option>
			</select>
</div>
         
<div  id="selectlista2" class=" wrap-input100  m-b-18" data-validate = "Ingrese departamento">

</div>

<script type="text/javascript">
	$(document).ready(function(){
    $('#lista').val(0);
    recargarLista();

    $('#lista').change(function(){
        recargarLista();
    });
})
</script>

<script type="text/javascript">
	function recargarLista(){
    $.ajax({
        type:"POST",
        url:"departamentos_datos.php",
        data:"departamento=" + $('#lista').val(),
        success:function(r){
            $('#selectlista2').html(r);        
        }
    });
}
</script>


<!--<div class=" wrap-input100  m-b-18" data-validate = "Ingrese ciudad">
                 <span class=" label-input100">Ingrese ciudad</span>
            <select class="form-control error" name="ciudad" aria-required="true" aria-invalid="true" aria-describedby="zonaa-error">
				<option value="-">
			</select>
</div>
-->                                          
  
            
    
            <div class=" wrap-input100  m-b-18" data-validate = "Ingrese telefono">
                 <span class=" label-input100">Ingrese telefono </span>
                <input class="input100" type="text" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="" name="telefono">
                <span class="focus-input100"></span>
            </div>


            <?php if(!empty($error)): ?>
            <div class="mensaje">

                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            

            <div class="flex-sb-m w-full p-b-30">
            <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" >Registrarse</button>
</div>
                


<a href="login.php" class="login100-form-btn">Login</a>
           

</div>
    </form>
    </div>
    </div>
</div>

    <?php
include("plantillas/footer.php")
?>