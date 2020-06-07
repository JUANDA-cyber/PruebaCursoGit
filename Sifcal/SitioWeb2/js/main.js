$("#result").on("click", function (e) {

    
    var lista1 = document.getElementById("lista1").value;
    var lista2 = document.getElementById("lista2").value;
    var lista3 = document.getElementById("lista3").value;
    var lista4 = document.getElementById("lista4").value;
    var variedad_semilla = document.getElementById("variedad_semilla").value;
    var prod_esperada = document.getElementById("prod_esperada").value;
    var fecha_i = document.getElementById("fecha_i").value;
    var fecha_f = document.getElementById("fecha_f").value;
    var textura_suelo = document.getElementById("textura_suelo").value;
    var densidad_aparente = document.getElementById("densidad_aparente").value;
    var ph = document.getElementById("ph").value;
    var cic = document.getElementById("cic").value;
    var materia_organica = document.getElementById("materia_organica").value;
    var p = document.getElementById("p").value;
    var k = document.getElementById("k").value;
    var ca = document.getElementById("ca").value;
    var mg = document.getElementById("mg").value;
    var s = document.getElementById("s").value;
    var na = document.getElementById("na").value;
    var al = document.getElementById("al").value;
    var fe = document.getElementById("fe").value;
    var mn = document.getElementById("mn").value;
    var zn = document.getElementById("zn").value; 
    var cu = document.getElementById("cu").value;
    var b = document.getElementById("b").value;
    //VALIDADORES
    if (lista1 == null || lista1.length == 0) {
		swal('¡Campo obligatorio!', 'Por favor diligencie el campo algo!', 'warning')
		return false;
	}
//recoge datos para enviarlos al servidor con dataForm
let dataForm = new FormData();
dataForm.append('lista1', lista1);
dataForm.append('lista2', lista2);
dataForm.append('lista3', lista3);
dataForm.append('lista4', lista4);
dataForm.append('variedad_semilla', variedad_semilla);
dataForm.append('prod_esperada', prod_esperada );
dataForm.append('fecha_i', fecha_i);
dataForm.append('fecha_f', fecha_f);
dataForm.append('textura_suelo', textura_suelo);
dataForm.append('densidad_aparente', densidad_aparente);
dataForm.append('ph', ph);
dataForm.append('cic', cic);
dataForm.append('materia_organica', materia_organica);
dataForm.append('p', p);
dataForm.append('k', k);
dataForm.append('ca', ca);
dataForm.append('mg', mg);
dataForm.append('s', s);
dataForm.append('na', na);
dataForm.append('al', al);
dataForm.append('fe', fe);
dataForm.append('mn', mn);
dataForm.append('zn', zn);
dataForm.append('cu', cu);
dataForm.append('b', b);



   fetch('../analisis_calcular/save_result.php', {
    method: 'POST',
    body: dataForm,
    credentials: 'include'
})


swal({
title: 'Guardando datos....',
html: 'Por favor espere!',
timer: 6000
}).then(function (result) {

    window.location.href = "../analisis_calcular/resultados_calculos_vista.php";
    
    
      }); 



});


$(document).ready(function(){
	$("#tablaHistorial").DataTable({
		"bDeferRender": true,
		"scrollY": "500px",
		"scrollX": "300px",
		"scrollCollapse": true,
		"paging": true,
		"language": {
			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
				"sFirst":    "Primero",
				"sLast":     "Último",
				"sNext":     "Siguiente",
				"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}

		},
		buttons: [
		{
			text: 'Reload table',
			action: function () {
				table.ajax.reload();
			}
		}
		]

	});

});