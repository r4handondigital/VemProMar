$(document).ready(function(){
/*
	Códigos de invocação dos plugins.
*/
	 $(".button-collapse").sideNav();

	  $('.parallax').parallax();

/* $('#destaque-principal').cycle({ 
	    fx:     'fade', 
	    speed:  'fast', 
	    timeout: 0, 
	    next:   '#next2', 
	    prev:   '#prev2' 
	});

*/

$('.owl-carousel').owlCarousel({
	loop:true,
    items:1,
     autoplay:true,
    autoplayTimeout:9000
   

});


});























