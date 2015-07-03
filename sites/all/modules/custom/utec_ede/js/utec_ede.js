(function ($) {
  Drupal.behaviors.utec_course_netsuite = {
    attach: function(context, settings) {
      $('#form-netsuite .form-tabs .input-radio').click(function(){
        $('#form-netsuite .form-tabs > div').removeClass('active');
        $(this).addClass('active');
      });
      
      if ($('#tab-person-legal-content').hasClass('hide')) {
        Drupal.settings.netsuite_form_builder.tipo = 'persona-natural';
      }

      $('#natural-person').click(function(){
        $('.form-tab-content').addClass('hide');
        $('#tab-person-natural-content').removeClass('hide');
        Drupal.settings.netsuite_form_builder.tipo = 'persona-natural';
      });
      
      $('#legal-person').click(function(){
        $('.form-tab-content').addClass('hide');
        $('#tab-person-legal-content').removeClass('hide');
        Drupal.settings.netsuite_form_builder.tipo = 'persona-juridica';
      });


    }
  }
})(jQuery);
