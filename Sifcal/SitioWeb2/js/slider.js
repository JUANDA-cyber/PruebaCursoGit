
$(document).ready(function(){
    var imgcontador = $('.slider .contenedor2').length;//cuenta los contenedores que contienen la imagen y textos e imprime la cantidad de iconos por contenedor
    var imgposition=1;
    
    for(i = 1; i <= imgcontador; i++){
        $('.pagination').append('<li><i class="fas fa-dot-circle" aria-hidden="true"></i></li>');
    }
    
    
    //oculta y muestra los iconos redondos del slideshow
    $('.slider .contenedor2').hide();//oculta
    $('.slider .contenedor2:first').show();//muestra
    $('.pagination li:first').css({'color' :'#ffffff'});//cambia el color a la lista del primer boton o icono que contiene la primer imagen
    
    //ejecutamos funciones
    $('.pagination li').click(pagination);
    $('.right span').click(nextpagination);
    $('.left span').click(prevpagination);
    
    setInterval(function(){
        nextpagination();
    }, 4000);
    
    //funciones
    function pagination(){
        var pagination_posicion = $(this).index() + 1; //numero de la posicion de la paginacion
        
        $('.slider .contenedor2').hide();//oculta todos los slides
        $('.slider .contenedor2:nth-child('+ pagination_posicion + ')').fadeIn();//muestra el slide seleccionado
        
        //da estilo a la paginacion seleccionada
        $('.pagination li').css({'color':'#338205'});
        $(this).css({'color':'#57ad0c'});
        
        imgposition=pagination_posicion;
    }
    
    function nextpagination(){
        if(imgposition >= imgcontador){
            imgposition = 1;
        }
        else{
            imgposition++;
        }
            $('.slider .contenedor2').hide();
            $('.slider .contenedor2:nth-child('+imgposition+')').fadeIn();;
            
            $('.pagination li').css({'color':'#338205'});
            $('.pagination li:nth-child('+imgposition +')').css({'color':'#ffffff'});//muestra el slide seleccionado
    }
    
    function prevpagination(){
        if(imgposition <= 1){
            imgposition = imgcontador;
        }
        else{
            imgposition--;
        }
            $('.slider .contenedor2').hide();
            $('.slider .contenedor2:nth-child('+imgposition+')').fadeIn();;
            
            $('.pagination li').css({'color':'#338205'});
            $('.pagination li:nth-child('+imgposition +')').css({'color':'#ffffff'});//muestra el slide seleccionado
    }
    
    
    
});