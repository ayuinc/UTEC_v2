// Generated by CoffeeScript 1.8.0
(function() {
  $(document).ready(function() {
    var $header, $headerScene, $headerScrollController, $headerSm, $mobileNavDisplayTriggers, $mobileNavRefGlobal, $navDisplay, $navDisplayClose, $navDisplayShrink, $navDisplayShrinkClose, $navDisplayShrinkTriggers, $navDisplayTriggers, $siteWrapper;
    $header = $('#header');
    $siteWrapper = $('.site-wrapper');
    $navDisplay = $('.nav-display', $header);
    $navDisplayTriggers = $('.nav-display-triggers', $header);
    $navDisplayClose = $('.nav-display-close');
    $mobileNavDisplayTriggers = $('.mobile-nav-display-triggers');
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
      $('a', $navDisplayTriggers).removeClass('active');
    });
    $mobileNavRefGlobal = '';
    $mobileNavDisplayTriggers.on('click', '[href^=#]', function(e) {
      var $navRef, $navRefClass;
      $navRef = $(this).attr('href');
      $mobileNavRefGlobal = $navRef.slice(1);
      console.log($mobileNavRefGlobal);
      if ($navRef.length > 0) {
        e.preventDefault();
        $navRefClass = $navRef.slice(1);
        $siteWrapper.addClass('display ' + $navRefClass);
      }
    });
    $('.mobile-nav-display .back').click(function(e) {
      e.preventDefault();
      $siteWrapper.removeClass('display');
      $siteWrapper.removeClass($mobileNavRefGlobal);
    });
    $headerSm = $('#header-on-scroll');
    $navDisplayShrink = $('.nav-shrink-display', $headerSm);
    $navDisplayShrinkTriggers = $('.nav-display-triggers', $headerSm);
    $navDisplayShrinkClose = $('.nav-display-close');
    $headerScrollController = new ScrollMagic();
    $navDisplayShrinkTriggers.on('click', '[href^=#]', function(e) {
      var $navRef, $navRefClass;
      $navRef = $(this).attr('href');
      $headerSm.attr('class', '');
      $('a', $navDisplayShrinkTriggers).removeClass('active');
      if ($navRef.length > 0) {
        e.preventDefault();
        $(this).addClass('active');
        $navRefClass = $navRef.slice(1);
        $headerSm.addClass('display ' + $navRefClass);
      }
    });
    $navDisplayShrinkClose.click(function(e) {
      e.preventDefault();
      $headerSm.attr('class', '');
      $('a', $navDisplayShrinkTriggers).removeClass('active');
    });
    if ($(window).width() < 480) {
      $siteWrapper.prepend('<div class="header-trigger"></div>');
    } else {
      if ($('.hero-unit').length > 0) {
        $('.hero-unit').append('<div class="header-trigger"></div>');
      } else {
        console.log('no hero-unit');
        $('.body').append('<div class="header-trigger"></div>');
      }
    }
    $headerScene = new ScrollScene({
      triggerHook: 0.3,
      triggerElement: '.header-trigger'
    }).setClassToggle('.site-wrapper', 'header-shrink').addTo($headerScrollController);
    $headerScene.on('leave', function(e) {
      $headerSm.attr('class', '');
      $siteWrapper.removeClass('menu-on');
      $('a', $navDisplayShrinkTriggers).removeClass('active');
    });
    $headerScene.addIndicators({
      zindex: 1000,
      suffix: '1'
    });
  });

}).call(this);
