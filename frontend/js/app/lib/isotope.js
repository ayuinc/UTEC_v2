// Generated by CoffeeScript 1.8.0
(function() {
  $(document).ready(function() {
    var $mallaCurricular;
    $mallaCurricular = $('.malla-curricular');
    $mallaCurricular.children('li').addClass('malla-item');
    $mallaCurricular.isotope({
      itemSelector: '.malla-item',
      layoutMode: 'fitRows'
    });
  });

}).call(this);
