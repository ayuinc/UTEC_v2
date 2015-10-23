(function ($) {

  $( "#button" ).trigger( "click" );
	$("#contact-us").children().addClass("container-sm");
	$('.acordeon').on('click',function(e){
	  e.preventDefault();
	  $(this).toggleClass('active');
	});

	
	/*COLLAPSE CHANGE BUTTON*/
	$('span').on('click', function (event) {
	  $(this).parent().parent().toggleClass('tab-current').siblings().removeClass('tab-current');
	  event.preventDefault();
	});

	/*COLLAPSE CHANGE BUTTON*/
	$('.change-arrow').click(function(){
	  $(this).parent().find('#up').toggleClass("hidden");
	  $(this).parent().find('#down').toggleClass("hidden"); 
	});

	document.getElementById("webform-client-form-1353").onsubmit=function() { // needs an ID
    
    var val = document.getElementById('edit-submitted-name'); // 'this' is the form 
    var val2 = document.getElementById('edit-submitted-subject');
    var val3 = document.getElementById('edit-submitted-messaje');
    var htmlString = "<span>Text required</span>";
    if (val.value==null || val.value.trim()=="") { 
      val.insertAdjacentHTML('afterend', htmlString);
      val.focus();
      return false; // cancel submission
    }
    val.parentNode.removeChild(htmlString);
    if (val2.value==null || val2.value.trim()=="") { 
      val2.insertAdjacentHTML('afterend', htmlString);
      val2.focus();
      return false; // cancel submission
    }
    val2.parentNode.removeChild(htmlString);
    if (val3.value==null || val3.value.trim()=="") { 
      val3.insertAdjacentHTML('afterend', htmlString);
      val3.focus();
      return false; // cancel submission
    }
    val3.parentNode.removeChild(htmlString);
    return true; // allow submit
  }
	
}(jQuery));
// add trim to older IEs
if (!String.trim) {
  String.prototype.trim = function() {return this.replace(/^\s+|\s+$/g, "");};
}
window.onload=function() {
  
}
