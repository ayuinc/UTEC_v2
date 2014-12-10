jQuery(function($) {
    /*
     if (App.Util.isMobile()) {
     $('.menu-boxes').bxSlider({
     minSlides: 1,
     maxSlides: 6,
     slideWidth: 300,
     slideMargin: 10,
     slideHeight: 500,
     captions: true,
     autoControls: true,
     adaptiveHeight: true,
     responsive: true,
     controls: true,
     touchEnabled: true,
     moveSlides: 1,
     infiniteLoop: false
     });
     }
     else {
     var bxSlider = $('.hidden-menu-boxes > ul').bxSlider({
     minSlides: 1,
     maxSlides: 1,
     moveSlides: 1,
     slideWidth: 300,
     slideMargin: 10,
     slideHeight: 500,
     autoControls: true,
     adaptiveHeight: true,
     responsive: true,
     controls: true,
     touchEnabled: true,
     infiniteLoop: false
     });

     $(window).on('resize', function(event) {
     if ($(window).width() < 1000) {
     $('.menu-boxes').hide();
     $('.hidden-menu-boxes').show();

     bxSlider.reloadSlider();
     }
     else {
     $('.menu-boxes').show();
     $('.hidden-menu-boxes').hide();
     }
     });
     }*/

    $('.menu-boxes-slider').bxSlider({
        minSlides: 1,
        maxSlides: 6,
        slideWidth: 300,
        slideMargin: 10,
        slideHeight: 500,
        captions: true,
        autoControls: false,
        adaptiveHeight: true,
        responsive: true,
        controls: true,
        touchEnabled: true,
        moveSlides: 1,
        infiniteLoop: false
    });

    $('.menu-responsive').click(function() {
        $('.submenu-content-responsive').toggleClass('active-menu-responsive');
    });

    $(".fb-login-active").click(function() {
        $('.fb-login').trigger('click');
    });

    $(".header-fixed .submenu a:not(.link-menu-primary)").mouseup(function() {
        $('.submenu-content-responsive').toggleClass('active-menu-responsive');
    });

});
