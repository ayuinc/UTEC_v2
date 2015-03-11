(function ($) {
  
  Drupal.behaviors.utec_course_netsuite = {
    attach: function(context, settings) {
      $('#form-netsuite .form-tabs .input-radio').click(function(){
        $('#form-netsuite .form-tabs > div').removeClass('active');
        $(this).addClass('active');
      });
      
      $('#natural-person').click(function(){
        $('.form-tab-content').addClass('hide');
        $('#tab-person-natural-content').removeClass('hide');
      });
      
      $('#legal-person').click(function(){
        $('.form-tab-content').addClass('hide');
        $('#tab-person-legal-content').removeClass('hide');
      });

    }
  }
  
})(jQuery);
