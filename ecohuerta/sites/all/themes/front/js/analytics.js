jQuery(window).load(function() {

  "use strict";

  /**********************************************************
    Main Sections
  ***********************************************************/
  $('section.main').waypoint(function(direction) {
    var $section = $(this),
        id       = $section.attr('id'),
        title    = $section.attr('id');

    if (direction === "up") $section = $section.prev();

    ga('send', 'pageview', {
        'page': '/#' + id,
        'title': 'Ingenio - '+ title
    });
  },
  {
    triggerOnce: true,
    continuous: false
  });

  /**********************************************************
    Tabs
  ***********************************************************/
  $('#iniciativas-utec').find('.tabs').on('click', 'a', function(event) {
    var title = 'Iniciativas - ' + $(this).text();

    // console.log('Click: ' + title);
    ga('send', 'event', 'tab', 'click', title);
  });

  /**********************************************************
    Boxes
  ***********************************************************/
  $('#retos-ingenieria').find('.box').on('mouseenter', function(event) {
    var title = 'Problematicas - ' + $(this).find('.title').text();

    // console.log('Mouse Over: ' + title);
    ga('send', 'event', 'box', 'mouseover', title);
  });

  /**********************************************************
    Youtube Videos
  ***********************************************************/
  // $('#problematicas').find('.box').on('mouseenter', function(event) {
  //   var title = 'Problematicas - ' + $(this).find('.title').text();

  //   // console.log('Playing video: ' + title);
  //   ga('send', 'event', 'video', 'play', title);
  // });

  /**********************************************************
    Login Button
  ***********************************************************/
  $(document).on('click', '.header-fixed .fb-login', function(event) {
    ga('send', 'event', 'btn_login', 'click');
  });

  /**********************************************************
    Social Networks
  ***********************************************************/
  $(document).on('click', '.visit', function(event) {
    ga('send', 'event', 'link', 'click', $(this).attr('id'));
  });

  /**********************************************************
    Ingenio en accion: Ingenio en accion
  ***********************************************************/
  $(document).on('click', '#ingenio-en-accion .scroll-to', function(event) {
    ga('send', 'event', 'btn_ingenio_enterate', 'click', 'Entérate aquí');
  });

  /**********************************************************
    Solution Form
  ***********************************************************/
  $('#create-solution').on('submit', function(event) {
    ga('send', 'event', 'btn-enviar', 'click', 'tu-solucion');
  });

  /**********************************************************
    Send Solution Form log in button
  ***********************************************************/
  $(document).on('click', '#create-solution .save-input', function(event) {
    ga('send', 'event', 'btn-pre-enviar', 'click', 'tu-solucion');
  });

  /**********************************************************
    Retos Ingenieria button events
  ***********************************************************/
  $(document).on('click', '.box .update-combo', function(event) {
    var title = $(this).data('key');

    ga('send', 'event', 'btn_retos', 'click', title);
  });

  /**********************************************************
    Marea en accion: Marea en accion
  ***********************************************************/
  $(document).on('click', '#marea-en-accion .scroll-to', function(event) {
    ga('send', 'event', 'btn_marea_enterate', 'click', 'Entérate aquí');
  });

  /**********************************************************
    Marea en accion: Las Causas
  ***********************************************************/
  $('#las-causas').find('.box').on('mouseenter', function(event) {
    var title = 'Las Causas - ' + $(this).find('.title').text();

    // console.log('Mouse Over: ' + title);
    ga('send', 'event', 'box', 'mouseover', title);
  });

  /*$(document).on('click', '#las-causas .box .btn', function(event) {
    var title = $(this).parents('.box').find('.title').text();

    event.preventDefault();
    console.log(title);

    ga('send', 'event', 'btn_causas', 'click', title);
  });*/

  /**********************************************************
    Marea en accion: Equipos
  ***********************************************************/
  $(document).on('click', '#equipos .slide:not(.disabled)', function(event) {
    var title = $(this).data('title');

    ga('send', 'event', 'equipos', 'click', title);
  });

  /**********************************************************
    Marea en accion: Que haremos
  ***********************************************************/
  $(document).on('click', '#que-haremos .fancybox-media', function(event) {
    ga('send', 'event', 'video', 'click', 'Marea: Que haremos');
  });

  /**********************************************************
    Main menu: Aplica tu ingenio
  ***********************************************************/
  $(document).on('click', '#menu-button-tu-solucion', function(event) {
    ga('send', 'event', 'main-menu', 'click', 'Aplica tu ingenio');
  });

});
