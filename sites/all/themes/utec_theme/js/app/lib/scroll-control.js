// Generated by CoffeeScript 1.8.0
(function() {
  $(document).ready(function() {
    var headerController, parallaxController, scrollToController, videoOnScrollController;
    headerController = new ScrollMagic();
    parallaxController = new ScrollMagic();
    scrollToController = new ScrollMagic();
    videoOnScrollController = new ScrollMagic();
    scrollToController.scrollTo(function(newpos) {
      TweenMax.to(window, 0.5, {
        scrollTo: {
          y: newpos
        }
      });
    });
    $(document).on('click', 'a[href^=#]', function(e) {
      var id;
      id = $(this).attr('href');
      if ($(id).length > 0) {
        e.preventDefault();
        scrollToController.scrollTo(id);
      }
    });
  });

}).call(this);
