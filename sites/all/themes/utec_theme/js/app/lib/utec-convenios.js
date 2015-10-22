(function ($) {
	$( "#button" ).trigger( "click" );

	$("#contact-us").children().addClass("container-sm");

	$('.collapse').on('click',function(e){
	  e.preventDefault();
	  $(this).toggleClass('active');
	});
	/*COLLAPSE CHANGE BUTTON*/
	$(".collapse").click(function(){
	  $(this).find('.up').toggleClass("hide");  
	  $(this).find('.down').toggleClass("hide"); 
	});

}(jQuery));
