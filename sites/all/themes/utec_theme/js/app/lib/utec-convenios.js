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
	
	  document.getElementById("webform-client-form-1353").onsubmit=function() { // needs an ID
	    alert(this.submitted[name]);
	    var val = this.submitted[name].value; // 'this' is the form 
	    var val2 = this.submitted[subject].value;
	    var val3 = this.submitted[messaje].value;
	    
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
	
}(jQuery));
