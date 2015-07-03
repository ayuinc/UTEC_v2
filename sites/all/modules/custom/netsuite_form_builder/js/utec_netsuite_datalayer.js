jQuery(document).ready(function ($) {
  netsuite_form_builder = window.parent.Drupal.settings.netsuite_form_builder;
  if (typeof netsuite_form_builder != "undefined") {
    var form = window.parent.Drupal.settings.netsuite_form_builder.form;
    var curso = window.parent.Drupal.settings.netsuite_form_builder.curso;
    var usuario_estado = window.parent.Drupal.settings.netsuite_form_builder.usuario_estado;
    var tipo = window.parent.Drupal.settings.netsuite_form_builder.tipo;
    var dataLayer = dataLayer || [];
    var carrera = "";
    var netsuite_values = {"event": "formSubmit", "estado": "Success"};

    if (form != "") {
      netsuite_values['form'] = form;
    }
    if (curso != "") {
      netsuite_values['curso'] = curso;
    }
    if (usuario_estado != "" && typeof usuario_estado != "undefined") {
      netsuite_values['usuario_estado'] = usuario_estado;
    }
    if (carrera != "" && typeof carrera != "undefined") {
      netsuite_values['carrera'] = carrera;
    }
    if (tipo != "" && typeof tipo != "undefined") {
      netsuite_values['tipo'] = tipo;
    }
    dataLayer.push(netsuite_values);

    dataLayer.forEach(function(item) {
      for (var property in item) {
        console.log( property+" : "+ item[property]);
      }
    });
  }
});
