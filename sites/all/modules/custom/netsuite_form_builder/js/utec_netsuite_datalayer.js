//jQuery(document).ready(function ($) {
  netsuite_form_builder = window.parent.Drupal.settings.netsuite_form_builder;  
  if (typeof netsuite_form_builder != "undefined") {
    var dataLayer = dataLayer || [{"event": "formSubmit", "estado": "Success"}];
    var form = window.parent.Drupal.settings.netsuite_form_builder.form;
    var curso = window.parent.Drupal.settings.netsuite_form_builder.curso;
    var usuario_estado = window.parent.Drupal.settings.netsuite_form_builder.usuario_estado;
    var tipo = window.parent.Drupal.settings.netsuite_form_builder.tipo;
    var carrera = "";
    if (form != "") {
      dataLayer[0]["form"] = form;
    }
    if (curso != "") {
      dataLayer[0]["curso"] = curso;
    }
    if (usuario_estado != "" && typeof usuario_estado != "undefined") {
      dataLayer[0]["usuario_estado"] = usuario_estado;
    }
    if (carrera != "" && typeof carrera != "undefined") {
      dataLayer[0]["carrera"] = carrera;
    }
    if (tipo != "" && typeof tipo != "undefined") {
      dataLayer[0]["tipo"] = tipo;
    }

    //Just to debug
    //console.debug('Curso = ' + dataLayer[0]["curso"]);
    //console.debug('Form = ' + dataLayer[0]["form"]);
    //console.debug('Tipo = ' + dataLayer[0]["tipo"]);

    dataLayer.forEach(function(item) {
      for (var property in item) {
        console.log( property+" : "+ item[property]);
      }
    });
  }
//});

