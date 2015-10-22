(function ($) {
	$( "#button" ).trigger( "click" );

	$("#contact-us").children().addClass("container-sm");

	$('.acordeon').on('click',function(e){
	  e.preventDefault();
	  $(this).toggleClass('active');
	});
	/*COLLAPSE CHANGE BUTTON*/
	$(".acordeon").click(function(){
	  $(this).find('.up').toggleClass("hide");  
	  $(this).find('.down').toggleClass("hide"); 
	});

}(jQuery));
