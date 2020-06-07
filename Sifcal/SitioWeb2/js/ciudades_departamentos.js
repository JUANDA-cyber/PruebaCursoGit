$(document).ready(function(){
    $('#lista1').val(1);
    recargarLista();

    $('#lista1').change(function(){
        recargarLista();
    });
})

