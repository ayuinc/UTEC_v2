(function ($) {

  $( "#button" ).trigger( "click" );
	$("#contact-us").children().addClass("container-sm");

  // $("a[href*=#]:not([href=#])").off("click");
	// $("a[href*=#]:not([href=#])").unbind("click");
  // Trigger Tabs with slider in living in peru
  $(".carousel-custom a").on("click", function(){
    var id = $(this).parent().parent().parent().parent().parent().parent().attr('id');
    var selector = $(this).parent().index();
    var click = $("#"+id+" li[data-slide-to='"+selector+"']");
    $(click).trigger( "click" );
  });

  $(".panel-heading").click(function(){
   $(this).parents("#accordion").find(".panel-heading").removeClass("border-active");
   $(this).find('.up').toggleClass("hide");  
   $(this).find('.down').toggleClass("hide");
   $(this).toggleClass("border-active");
  });



  // $( ".down" ).click(function() {
  //   $( ".collapsed" ).trigger( "click" );
  // });

  // $('.panel-default a[role="button"]').on("click", function(){
  //   var id = $(this).parent().parent().parent().parent().attr('id');
  //   var selector = $(this).parent().index();
  //   var click = $("#"+id+" li[data-slide-to='"+selector+"']");
  //   $(click).trigger( "click" );
  // });

  var pymChild = new pym.Child();

  var form = document.getElementById("webform-client-form-1353");
  if (form!=null) {
  	document.getElementById("webform-client-form-1353").onsubmit=function() { // needs an ID
      var val = document.getElementById('edit-submitted-name'); // 'this' is the form 
      var val2 = document.getElementById('edit-submitted-subject');
      var val3 = document.getElementById('edit-submitted-messaje');
      var htmlString = "<span id='message-err'>Text required</span>";
      if (val.value==null || val.value.trim()=="") { 
  	  	var text = document.getElementById('message-err');
      	if (text != null) {
  	    	text.parentNode.removeChild(text);
      	}
        val.insertAdjacentHTML('afterend', htmlString);
        val.focus();
        return false; // cancel submission
      }
      var text = document.getElementById('message-err');
      if (text != null) {
  	    text.parentNode.removeChild(text);
  	  }
      if (val2.value==null || val2.value.trim()=="") { 
      	var text2 = document.getElementById('message-err');
      	if (text2 != null) {
  	    	text2.parentNode.removeChild(text2);
  	    }
        val2.insertAdjacentHTML('afterend', htmlString);
        val2.focus();
        return false; // cancel submission
      }
      var text2 = document.getElementById('message-err');
      if (text2 != null) {
  	    text2.parentNode.removeChild(text2);
  	  }
      if (val3.value==null || val3.value.trim()=="") { 
      	var text3 = document.getElementById('message-err');
      	if (text3 != null) {
  	    	text3.parentNode.removeChild(text3);
  	    }
        val3.insertAdjacentHTML('afterend', htmlString);
        val3.focus();
        return false; // cancel submission
      }
      var text3 = document.getElementById('message-err');
      if (text3 != null) {
  	    text3.parentNode.removeChild(text3);
  	  }
      return true; // allow submit
    }
	}
}(jQuery));
// add trim to older IEs
if (!String.trim) {
  String.prototype.trim = function() {return this.replace(/^\s+|\s+$/g, "");};
}

