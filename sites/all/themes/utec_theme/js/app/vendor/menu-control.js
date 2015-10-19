$(document).scroll(function() {    
    var scroll = $(this).scrollTop();

    if (scroll >= 50) {
        $("#menu").addClass("active");
    } else {
        $("#menu").removeClass("active");
    }

});

$(document).ready(function() {
  $("#contact-us").parent().addClass("container-sm");
}); 


//Menu
$(".menu-toggle").on('click', function() {
  $(this).toggleClass("on");
  $('.menu-section').toggleClass("on");
  $("nav ul").toggleClass('hidden');
});

//scroll
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
   if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        	}, 1000);
        			return false;
      }
    }
  });
});


//Modal js
 $(document).ready(function() {
    $("#modal-entrada").removeClass('hidden');
    $("#boton-modal").click();
  });


// Limitación de palabras
// $(document).ready(function() {
//   $("#freeform_otras_fuentes_de_financiamiento").parent().parent().addClass("hidden");
//   $("#freeform_describa_el_principal_problema_social").on('keyup', function() {
//       var words = this.value.match(/\S+/g).length;
//       if (words > 80) {
//           var trimmed = $(this).val().split(/\s+/, 80).join(" ");
//           $(this).val(trimmed + " ");
//       }
//   });

// }); 

$(document).ready(function() {
  $("#freeform_que_crees_que_representa_el_anticucho_para_el_pais").on('keyup', function() {
      var words = this.value.match(/\S+/g).length;
      if (words > 50) {
          var trimmed = $(this).val().split(/\s+/, 50).join(" ");
          $(this).val(trimmed + " ");
      }
  });
});

$(document).ready(function() {
  $("#freeform_menciona_3_productos_que_pueden_ser_anticuchables").on('keyup', function() {
      var words = this.value.match(/\S+/g).length;
      if (words > 50) {
          var trimmed = $(this).val().split(/\s+/, 50).join(" ");
          $(this).val(trimmed + " ");
      }
  });
});

$(document).ready(function() {
  $("#freeform_cuales_son_tus_3_principales_virtudes").on('keyup', function() {
      var words = this.value.match(/\S+/g).length;
      if (words > 50) {
          var trimmed = $(this).val().split(/\s+/, 50).join(" ");
          $(this).val(trimmed + " ");
      }
  });
});

$(document).ready(function() {
  $("#freeform_que_sueno_tienes_como_cocinero").on('keyup', function() {
      var words = this.value.match(/\S+/g).length;
      if (words > 50) {
          var trimmed = $(this).val().split(/\s+/, 50).join(" ");
          $(this).val(trimmed + " ");
      }
  });
});

$(document).ready(function() {
  $("#freeform_cuales_son_tus_3_defectos_que_cambiarias_mejorarias").on('keyup', function() {
      var words = this.value.match(/\S+/g).length;
      if (words > 50) {
          var trimmed = $(this).val().split(/\s+/, 50).join(" ");
          $(this).val(trimmed + " ");
      }
  });
});

$(document).ready(function() {
  $("#freeform_que_crees_que_caracteriza_a_un_emprendedor_de_la_gastronomia_peruana").on('keyup', function() {
      var words = this.value.match(/\S+/g).length;
      if (words > 50) {
          var trimmed = $(this).val().split(/\s+/, 50).join(" ");
          $(this).val(trimmed + " ");
      }
  });
}); 

$(document).ready(function() {
  $("#freeform_por_que_te_gusta_cocinar").on('keyup', function() {
      var words = this.value.match(/\S+/g).length;
      if (words > 50) {
          var trimmed = $(this).val().split(/\s+/, 50).join(" ");
          $(this).val(trimmed + " ");
      }
  });
});



$(document).ready(function() {
  $("#freeform_por_que_crees_que_podrias_llegar_a_ser_el_mejor_y_ganar_la_competencia").on('keyup', function() {
      var words = this.value.match(/\S+/g).length;
      if (words > 50) {
          var trimmed = $(this).val().split(/\s+/, 50).join(" ");
          $(this).val(trimmed + " ");
      }
  });
}); 

$(document).ready(function() {
  $("#freeform_que_idea_o_sueno_de_negocio_tienes_vinculado_a_la_gastronomia").on('keyup', function() {
      var words = this.value.match(/\S+/g).length;
      if (words > 50) {
          var trimmed = $(this).val().split(/\s+/, 50).join(" ");
          $(this).val(trimmed + " ");
      }
  });
}); 

$(document).ready(function() {
  $("#freeform_cuenta_con_algun_negocio_propio_vinculado_a_la_gastronomia_1").on('keyup', function() {
      var words = this.value.match(/\S+/g).length;
      if (words > 50) {
          var trimmed = $(this).val().split(/\s+/, 50).join(" ");
          $(this).val(trimmed + " ");
      }
  });
}); 

$(document).ready(function() {
  $("#freeform_cuenta_con_algun_negocio_propio_vinculado_a_la_gastronomia_2").on('keyup', function() {
      var words = this.value.match(/\S+/g).length;
      if (words > 50) {
          var trimmed = $(this).val().split(/\s+/, 50).join(" ");
          $(this).val(trimmed + " ");
      }
  });
});

$(document).ready(function() {
  $("#freeform_cuentanos_en_que_consiste_tu_negocio").on('keyup', function() {
      var words = this.value.match(/\S+/g).length;
      if (words > 50) {
          var trimmed = $(this).val().split(/\s+/, 50).join(" ");
          $(this).val(trimmed + " ");
      }
  });
});

// Limitación de caracteres
$(document).ready(function() {

    var total_letras = 11;

    $('#freeform_ruc').keyup(function() {
    var longitud = $(this).val().length;
    var resto = total_letras - longitud;
    $('#numero').html(resto);
    if(resto <= 0){
        $('#freeform_ruc').attr("maxlength", 11);
    }
    });

});


$(document).ready(function() {

    var total_letras = 9;

    $('#freeform_telefono_celular').keyup(function() {
    var longitud = $(this).val().length;
    var resto = total_letras - longitud;
    $('#numero').html(resto);
    if(resto <= 0){
        $('#freeform_telefono_celular').attr("maxlength", 9);
    }
    });

});


$(document).ready(function() {

    var total_letras = 10;

    $('#freeform_cuando_comenzaron_a_operar_dd_mm_yyyy').keyup(function() {
    var longitud = $(this).val().length;
    var resto = total_letras - longitud;
    $('#numero').html(resto);
    if(resto <= 0){
        $('#freeform_cuando_comenzaron_a_operar_dd_mm_yyyy').attr("maxlength", 10);
    }
    });

});

$(document).ready(function() {

    var total_letras = 10;

    $('#freeform_cuando_se_constituyeron_dd_mm_yyyy').keyup(function() {
    var longitud = $(this).val().length;
    var resto = total_letras - longitud;
    $('#numero').html(resto);
    if(resto <= 0){
        $('#freeform_cuando_se_constituyeron_dd_mm_yyyy').attr("maxlength", 10);
    }
    });

});

$(document).ready(function() {

    var total_letras = 9;

    $('#freeform_telefono_fijo').keyup(function() {
    var longitud = $(this).val().length;
    var resto = total_letras - longitud;
    $('#numero').html(resto);
    if(resto <= 0){
        $('#freeform_telefono_fijo').attr("maxlength", 9);
    }
    });

});


// Limitación a solo numeros
$(document).ready(function() {

  function validar(event) {
     return /[0-9]|\./.test(String.fromCharCode(event.keyCode)) && !event.shiftKey;
  }

  $('#freeform_fecha_nacimiento').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_edad_postulante').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_telefono_celular_postulacion_tercero').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_fecha_de_nacimiento').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_dni').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_tiempo_en_dicho_cargo_en_cantidad_de_meses').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_tiempo_en_la_organizacion_en_cantidad_de_meses').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_cuando_comenzaron_a_operar_dd_mm_yyyy').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_ruc').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_cuando_se_constituyeron_dd_mm_yyyy').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_cuanta_gente_se_encarga_de_dirigir_y_gestionar_la_iniciativa').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_cantidad_de_remunerados_a_tiempo_parcial').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_cantidad_de_remunerados_a_tiempo_completo').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_cantidad_de_talento_voluntario').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_si_llenas_otros_ingresa_la_cantidad').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_monto_exacto_s').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_telefono_fijo').keypress(function(e) {
      return validar(e);
  });
  $('#freeform_telefono_celular').keypress(function(e) {
      return validar(e);
  });
});



/*ACCION HIDEN*/
// $(document).ready(function(){
//   $(".ff_composer").children().eq(9).children().eq(1).addClass( "hidden" );

// });

/*Acción de ocultar y mostrar elemento*/

$(document).ready(function() {
    $('#freeform_esta_inscrita_en_registros_publicos_1').attr( "checked","checked" );
    $("input[name$='esta_inscrita_en_registros_publicos']").click(function() {
        // var test = $(this).();
        if ($(this).val() != 'Si') {

          $(".ff_composer").children().eq(10).children().eq(1).addClass('hidden');
        }
        else {
          $(".ff_composer").children().eq(10).children().eq(1).removeClass('hidden');
        }

    });

    $('#freeform_esta_inscrita_en_registros_publicos_2').click(function() {
        if ($(this).val() == 'No') {

          $("input[name='ruc']").val("");
          $("input[name='cuando_se_constituyeron_dd_mm_yyyy']").val("");
        }
    });
});

$('#freeform_fuente_de_financiamiento_6').attr( "checked" , "checked" );

$("#freeform_fuente_de_financiamiento_6").click(function(e) {
  if($(this).is(":checked")) {
    $("#freeform_otro_fuentes_de_financiamiento").parent().parent().removeClass("hidden");
  } else {
    $("#freeform_otro_fuentes_de_financiamiento").parent().parent().addClass("hidden");
  }
});

$('#freeform_por_que_medio_te_enteraste_de_la_convocatoria_9').attr( "checked" , "checked" );

$("#freeform_por_que_medio_te_enteraste_de_la_convocatoria_9").click(function(e) {
  if($(this).is(":checked")) {
    $("#freeform_otro_porque_medio_te_enteraste_de_la_convocatoria").parent().parent().removeClass("hidden");
  } else {
    $("#freeform_otro_porque_medio_te_enteraste_de_la_convocatoria").parent().parent().addClass("hidden");
  }
});

$('#freeform_a_que_se_dedica_el_participante_5').attr( "checked" , "checked" );

$("#freeform_a_que_se_dedica_el_participante_5").click(function(e) {
  if($(this).is(":checked")) {
    $("#freeform_otros").parent().removeClass("hidden");
    $('#form-personal label[for="freeform_otros"]').removeClass("hidden");

  } else {
    $("#freeform_otros").parent().addClass("hidden");
    $('#form-personal label[for="freeform_otros"]').addClass("hidden");

  }
});

// $('#freeform_a_que_se_dedica_el_participante_5').attr( "checked" , "checked" );

// $("#freeform_a_que_se_dedica_el_participante_5").click(function(e) {
//   if($(this).is(":checked")) {
//     $(".ff_composer").children().eq(9).children().eq(0).find("label").removeClass("hidden");
//     $(".ff_composer").children().eq(9).children().eq(0).find("p").removeClass("hidden");

//   } else {
//     $(".ff_composer").children().eq(9).children().eq(0).find("label").addClass( "hidden" );
//     $(".ff_composer").children().eq(9).children().eq(0).find("p").addClass( "hidden" );

//   }
// });

// $(document).ready(function() {
//   $("#modal-entrada").removeClass('hidden');
//   $("#boton-modal").click();
// });

function activateNumber(number){
  $('ul#progressbar li').removeClass('active');
  selectedDiv = $('ul#progressbar li');
  selectedDiv = selectedDiv.slice(0,number);
  $(selectedDiv).addClass('active');
}

$(document).ready(function() {
  
  // $(".form-postula").find("input").each(function(index, element) { 
  //   if ($(element).attr("name").indexOf("otro") >= 0) { return true; }
  //   if ($(element).attr("name").indexOf("link") >= 0) { return true; }
  //   if(!$(element).parent().parent().hasClass("hidden")) { 
  //     $(element).attr("required", "true"); 
  //   } 
  // });
  // $(".form-postula").find("textarea").each(function(index, element) { 
  //   if(!$(element).parent().parent().hasClass("hidden")) { 
  //     $(element).attr("required", "true"); 
  //   } 
  // });

  $('#paso-1').show();
  $('#paso-2').hide();
  $('#paso-3').hide();
  $('#paso-4').hide();
  activateNumber(1);

  $('#paso-1 a.btn-info').click( function(){ 
      $('#paso-1').hide(); 
      $('#paso-2').show(); 
      $('#paso-3').hide(); 
      $('#paso-4').hide();
       activateNumber(2);
  });
  $('#paso-2 a.btn-info').click( function(){ 
      $('#paso-1').hide(); 
      $('#paso-2').hide(); 
      $('#paso-3').show();
      $('#paso-4').hide();
      activateNumber(3);
  });
  $('#paso-3 a.btn-info').click( function(){ 
      $('#paso-1').hide(); 
      $('#paso-2').hide(); 
      $('#paso-3').hide();
      $('#paso-4').show();
       activateNumber(4);
  });
}); 

// function removeRequired() {
//   $(".ff_composer").find("input").each(function(index, element) { 
//       $(element).removeAttr("required"); 
//   });
//   $(".ff_composer").find("textarea").each(function(index, element) { 
//       $(element).removeAttr("required"); 
//   });
// }




