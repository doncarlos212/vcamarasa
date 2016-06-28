
window.onload=function(){
/*calcular el alto de la pantalla*/
var alto=$( window ).innerHeight();

 


	/*Boton de bajar*/
	$("#logo").click(function() {
	    $('html, body').animate({
	        scrollTop: alto - 63}, 2000);
	});

	/*Control del preloader*/

		setTimeout(function(){
		$('body').addClass('loaded');
		$('h1').css('color','#222222');
	}, 1);


		/*Animacion de la anclas*/

$(function(){

     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;

            }

       }

   });

});

		
	
};





/*cambiar contenido del div de las estadisticas*/

function total(){
document.getElementById("capa").style.display = "block";
document.getElementById("capa1").style.display = "none";
document.getElementById("capa2").style.display = "none";
};

function equipo1(){
document.getElementById("capa").style.display = "none";
document.getElementById("capa1").style.display = "block";
document.getElementById("capa2").style.display = "none";
};

function equipo2(){
document.getElementById("capa").style.display = "none";
document.getElementById("capa1").style.display = "none";
document.getElementById("capa2").style.display = "block";
};

