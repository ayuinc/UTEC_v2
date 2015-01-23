// Generated by CoffeeScript 1.8.0
(function() {
  $(document).ready(function() {
    var $bodyForm, $button, checkDOMChange, overlayTempl;
    $button = $('.body button[type="submit"]');
    $bodyForm = $('.body form');
    overlayTempl = '<div class="form-overlay">' + '<div>' + '<a href="#" class="form-overlay-close">X</a>' + '<h3>Procesando información</h3>' + '<div class="mt-42">' + '<span class="spinner animated rotateIn infinite icon-spinner9"></span>' + '</div>' + '</div>' + '</div>';
    $bodyForm.on('submit', function(e) {
      e.preventDefault();
      if ($('.errordiv label').length > 0) {
        $('body').addClass('form-on-submit').append(overlayTempl);
        checkDOMChange();
      }
    });
    checkDOMChange = function() {
      return setTimeout(function() {
        $('.form-overlay-close').click(function(e) {
          e.preventDefault();
          $('.form-overlay').remove();
          $('body').removeClass('form-on-submit');
        });
      }, 1000);
    };
    console.log($button);
  });

}).call(this);
