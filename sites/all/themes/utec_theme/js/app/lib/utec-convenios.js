(function ($) {

  $( "#button" ).trigger( "click" );
	$("#contact-us").children().addClass("container-sm");
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
// add trim to older IEs
if (!String.trim) {
  String.prototype.trim = function() {return this.replace(/^\s+|\s+$/g, "");};
}
window.onload=function() {
  document.getElementById("webform-client-form-1353").onsubmit=function() { // needs an ID
    console.log(this);
    var val = document.getElementById('edit-submitted-name').value; // 'this' is the form 
    var val2 = document.getElementById('edit-submitted-subject').value;
    var val3 = document.getElementById('edit-submitted-messaje').value;
    
    if (val==null || val.trim()=="") { 
      alert('Please enter something');
      this.submitted[name].focus();
      return false; // cancel submission
    }
    if (val2==null || val2.trim()=="") { 
      alert('Please enter something');
      this.submitted[subject].focus();
      return false; // cancel submission
    }
    if (val3==null || val3.trim()=="") { 
      alert('Please enter something');
      this.submitted[messaje].focus();
      return false; // cancel submission
    }
    return true; // allow submit
  }
}
