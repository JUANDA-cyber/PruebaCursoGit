<div class="panel-body">
        <h1 class="font-bold">
                <span class="number">1</span>
            </h1>
    <div class="arreglo-x">
        <h3 class="text-color">localizacion de la muestra</h3>
        <p>Identificacion del lugar de donde se tomo la muestra del analisis del suelo</p>
    </div> 
    <br>
    <div class="col-lg-12">
        <div class="col-ca">
            <div class="form-group col-lg-12">
                <label for="zona" class="control-label">Departamento *</label>
                <div class=" wrap-input100  m-b-18" data-validate = "Ingrese departamento">
            
                <select class="form-control error"  id="lista1" name="departamento">
                        <option value="">Seleccione Departamento</option>
                        <option value="1-AMAZONAS">AMAZONAS</option>
                        <option value="2-ANTIOQUIA">ANTIOQUIA</option>
                        <option value="3-ARUACA">ARUACA</option>
                        <option value="4-ATLANTICO">ATLANTICO</option>
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

                <p class="text-muted">Departamento donde se realizara el cultivo</p>
            
                <label for="zona" class="control-label">Ciudad *</label>
                <div  id="select2lista" class=" wrap-input100  m-b-18" data-validate = "Ingrese departamento">
</div>

<p class="text-muted">Nombre de la Ciudad</p>

</div>


<div class="form-group col-lg-12">
<label for="finca" class="control-label">Finca *</label>
<div class=" wrap-input100  m-b-18" id="selectlistafinca"  data-validate = "Ingrese nombre de la finca">

</div>
<p class="text-muted">Nombre de la finca</p>

<label for="zona" class="control-label">Lote *</label>
<div  id="selectlistalote" class=" wrap-input100  m-b-18" data-validate = "Ingrese finca">

</div>

<p class="text-muted">Nombre del lote</p>
</div>


</div>
</div>
</div>

<!-- DEPARTAMENTOS - CIUDADES -->
<script type="text/javascript">

$(document).ready(function(){
    $('#lista1').val(0);
    recargarLista();

    $('#lista1').change(function(){
        recargarLista();
    });
})

	function recargarLista(){
    $.ajax({
        type:"POST",
        url:"departamentos_calcular.php",
        data:"departamento=" + $('#lista1').val(),
        success:function(r){
			$('#select2lista').html(r);
        }
    });
}
</script>


<!-- FINCA  -->

<script type="text/javascript">

$(document).ready(function(){
    $('#lista1').val(0);
    recargarLista1();

    $('#lista1').change(function(){
        recargarLista1();
    });
})

	function recargarLista1(){
    $.ajax({
        type:"POST",
        url:"finca_calcular.php",
        data:"ciudad=" + $('#lista1').val(),
        success:function(r){
			$('#selectlistafinca').html(r);
        }
    });
}
</script>


<!-- LOTES -->

<script type="text/javascript">

$(document).ready(function(){
    $('#lista1').val(0);
    recargarLista2();

    $('#lista1').change(function(){
        recargarLista2();
    });
})

	function recargarLista2(){
    $.ajax({
        type:"POST",
        url:"lote_calcular.php",
        data:"finca=" + $('#lista1').val(),
        success:function(r){
			$('#selectlistalote').html(r);
        }
    });
}
</script>

