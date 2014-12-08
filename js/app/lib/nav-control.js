// Generated by CoffeeScript 1.8.0
(function() {
  $(document).ready(function() {
    var $header, $navDisplay, $navDisplayClose, $navDisplayTriggers;
    $header = $('#header');
    $navDisplay = $('.nav-display', $header);
    $navDisplayTriggers = $('.nav-display-triggers', $header);
    $navDisplayClose = $('.nav-display-close');
    $navDisplayTriggers.on('click', '[href^=#]', function(e) {
      var $navRef, $navRefClass;
      $navRef = $(this).attr('href');
      $header.attr('class', '');
      $('a', $navDisplayTriggers).removeClass('active');
      if ($navRef.length > 0) {
        e.preventDefault();
        $(this).addClass('active');
        $navRefClass = $navRef.slice(1);
        $header.addClass('display ' + $navRefClass);
      }
    });
    $navDisplayClose.click(function(e) {
      e.preventDefault();
      $header.attr('class', '');
    });
  });

}).call(this);
