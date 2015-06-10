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

      //$('.block-banner-top .view-more a').append(" <i class="icon-arrows-right"></i>");
      
    }
  }
  
})(jQuery);