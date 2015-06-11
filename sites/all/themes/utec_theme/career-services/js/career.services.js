(function ($) {
  
  Drupal.behaviors.career_services = {
    attach: function(context, settings) {

      //Animate scroll     
      $('.block-menu-fixed a[href*=#], .block-banner-top .view-more a[href*=#]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          $target = $(this.hash);
          $targett2 = $(this.hash);       
          $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

          if ($target.length) {           
            var targetOffset = $target.offset().top;
            $('html,body').animate({scrollTop: targetOffset}, 1000);
            return false;
          }
        }

      });

      $('.btn-modal h4').click(function() {
        $('.btn-modal h4').addClass('btn-notselected');
        $('.btn-modal h4').removeClass('btn-selected');
      });

      $('.btn-alumnos h4').click(function() {
        $(this).removeClass('btn-notselected');
        $(this).addClass('btn-selected');
        $(".form-modal").addClass('hidden');
        $(".form-alumnos").removeClass('hidden');
      });

      $('.btn-empresas h4').click(function() {
        $(this).removeClass('btn-notselected');
        $(this).addClass('btn-selected');
        $(".form-modal").addClass('hidden');
        $(".form-empresas").removeClass('hidden');
      });

      $('.btn-recuperar').click(function() {
        $(".form-modal").addClass('hidden');
        $(".form-recupera").removeClass('hidden');
      });

      $('.btn-regresar').click(function() {
        $(this).addClass('btn-selected');
        $(".form-modal").addClass('hidden');
        $(".form-alumnos").removeClass('hidden');
      });

    }
  }
  
})(jQuery);