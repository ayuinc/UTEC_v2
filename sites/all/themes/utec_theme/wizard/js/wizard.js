(function ($) {
  
  Drupal.behaviors.wizard = {
    attach: function(context, settings) {

      /* Overlay background */
      bodyHeight = $('html').height() + 70;
      $('.overlay-background').css('height', bodyHeight);

      /* Overlay close */
      $('.overlay-close, .overlay-background, .squeare-close').click(function(){
        $('.overlay-background').addClass('hidden');
        $('.overlay-popup').addClass('hidden');
      });

    }
  }
  
})(jQuery);