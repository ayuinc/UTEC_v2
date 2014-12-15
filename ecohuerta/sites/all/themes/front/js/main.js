jQuery(function($) {

        $('a.fb-login-active').on('click', function (evt) {
            evt.preventDefault();
                  $('.block-ajax-register .first a').trigger('click');
              });
        $("ul.menu > .men1").on('click', function () {
            $('ul.menu > .men2').removeClass('active');
            $('ul.menu > .men3').removeClass('active');
            $('ul.menu > .men1').addClass('active');
        });
        $("ul.menu > .men2").on('click', function () {
            $('ul.menu > .men1').removeClass('active');
            $('ul.menu > .men3').removeClass('active');
            $('ul.menu > .men2').addClass('active');
        });
        $("ul.menu > .men3").on('click', function () {
            $('ul.menu > .men1').removeClass('active');
            $('ul.menu > .men2').removeClass('active');
            $('ul.menu > .men3').addClass('active');
        });
        $("#mobile-aplica-tu-ingenio").on('click', function () {
            $('ul.menu > .men1').removeClass('active');
            $('ul.menu > .men2').removeClass('active');
        });
        $(document).on('click', '#modalContent #modal-content .btn-rec', function () {
            $('#user-login .ajax-register-links li  a:eq(1)').trigger('click');
        });

        $(document).on('click','#modalContent #modal-content .btn-crea',function(){
          $('#user-login .ajax-register-links .first a').trigger('click');
        });

  "use strict";

  var $slider = $('.slider'),
      $voteForm = $('.create-vote'),
      $solutionForm = $('#create-solution'),
      $ingenioSection = $('#ingenio-en-accion'),
      $iniciativasSection = $('#iniciativas-utec'),
      $altIngenioSection = ["grupo de profesionales",
                            "alumnos ingeniería armando estructura",
                            "ciudad con tráfico"],
      $altIniciativasSection = ["panel de agua potable",
                            "panel purficador de aire",
                             "agua potable en asentamientos humanos de limas"];


  /*$(document).on('click', '.scroll-to', App.Util.scrollToHandler);*/
  $(document).on('click', '.open-window', App.Util.openWindowHandler);
 /* $(document).on('click', '.nav-point a', App.Util.scrollToHandlerMenu);*/

  /**********************************************************
    Section height
  ***********************************************************/
  App.Util.adaptHeight($('section.main'));

  $(window).on('scroll', function(event) {
    App.Util.adaptHeight($('section.main'));
  });

  /**********************************************************
    Backstretch
  ***********************************************************/
  $ingenioSection.backstretch([
    url+'/images/backgrounds/ingenio-en-accion/1.jpg',
    url+'/images/backgrounds/ingenio-en-accion/2.jpg',
    url+'/images/backgrounds/ingenio-en-accion/3.jpg'
  ],
  {
    fade: 400
  }).backstretch('pause');



  $iniciativasSection.backstretch([
    url+'/images/backgrounds/iniciativas/1.jpg',
    url+'/images/backgrounds/iniciativas/2.jpg',
    url+'/images/backgrounds/iniciativas/1.jpg'
  ],
  {
    fade: 400
  }).backstretch('pause');

  /**********************************************************
    Sliders
  ***********************************************************/
  App.Util.backgroundSlider($slider, $ingenioSection, $altIngenioSection);

  /**********************************************************
    Fancybox Youtube
  ***********************************************************/
  $('.fancybox-media').fancybox({
    padding: 0,
    openEffect  : 'none',
    closeEffect : 'none',
    helpers : {
      media : {}
    }
  });

  /**********************************************************
    Tabs
  ***********************************************************/
  $(document).on('click', '.tabs a', function(event) {
    event.preventDefault();

    var $tab = $(event.target),
        $parent = $tab.parent(),
        target = $tab.attr('href'),
        $target = $(target),
        name = target.replace('#tab-', '');

    $target.fadeIn().siblings().hide();
    $parent.addClass('active').siblings().removeClass('active');

    $('#text-' + name).fadeIn(800).addClass('active').siblings().removeClass('active').hide();

    $iniciativasSection.backstretch('show', $parent.index()).backstretch('pause');

    $iniciativasSection.on("backstretch.show", function () {
      $(this).find('img').attr('alt',$altIniciativasSection[$parent.index()]);

      App.Youtube.stopPlayers();
      App.Youtube.cueByIndex($parent.index());
    });
  });

  /**********************************************************
   Share Messages
   ***********************************************************/
  var shareMessages = {
    twitter: {
      'contaminacion-en-el-mar-de-lima': 'Propuse mi solución a la contaminación en el mar de Lima. ¡Tú también pon tu #IngenioEnAccion!',
      'trafico-en-lima': 'Propuse mi solución al tránsito en Lima. ¡Tú también pon tu #IngenioEnAccion!',
      'deforestacion-en-el-peru': 'Propuse mi solución a la deforestación en el Perú. ¡Tú también pon tu #IngenioEnAccion!',
      'friaje-en-puno': 'Propuse mi solución al friaje en Puno. ¡Tú también pon tu #IngenioEnAccion!',
      'huaycos-en-la-sierra': 'Propuse mi solución a los huaycos en la sierra. ¡Tú también pon tu #IngenioEnAccion!',
      'contaminacion-auditiva-en-lima': 'Propuse mi solución a la contaminación sonora en Lima. ¡Tú también pon tu #IngenioEnAccion!'
    }
  };

  /**********************************************************
   Forms
   ***********************************************************/
  $solutionForm.validate({
    submitHandler: function(form) {
      var $form = $(form),
          $loader = $form.find('.loading'),
          formData = $form.serializeArray(),
          $submit = $form.find('input[type="submit"]');

      $.ajax({
        url: $form.attr('action'),
        data: $form.serialize(),
        type: $form.attr('method'),
        dataType: 'json',
        beforeSend: function() {
          $submit.hide();
          $loader.show();
        },
        success: function(response) {
          if (response.success) {
            var template = $('#template-modal-success-content').html(),
                selectedCategory = formData[0].value,
                obj = {
                  categoryKey: selectedCategory,
                  twitterTitle: shareMessages.twitter[selectedCategory]
                };

            $('#template-modal-success').html(Mustache.render(template, obj));

            App.Modal.show('success', {
              afterShow: function() {
                twttr.widgets.load();
                FB.XFBML.parse($('#facebook-share').get(0));
              }
            });

            form.reset();
            $form.find('select').trigger('change');
          }
          else {
            App.Modal.show('error');
          }
        },
        error: function(e) {
          App.Modal.show('error');
        },
        complete: function() {
          $loader.hide();
          $submit.show();
        }
      });
    }
  });

  $voteForm.on('submit', function(event) {
    event.preventDefault();

    var $form = $(this),
        url = $form.attr('action');

    $.post(url, {}, function(response) {

      if (response.success) {
        var template = $('#template-modal-success-vote').html();

        $('#template-modal-success').html(Mustache.render(template, { team: $form.data('name') }));

        App.Modal.show('success', {
          afterShow: function() {
            twttr.widgets.load();
            FB.XFBML.parse($('#facebook-share-vote').get(0));
          },
          beforeClose: function() {
            location.reload();
          }
        });
      }
      else {
        alert('Ha ocurrido un error inesperado, por favor intente nuevamente.');
      }

    }, 'json');
  });

  /**********************************************************
    Custom Select
  ***********************************************************/
  $(".custom-select").change(function() {
    var $select = $(this),
        selectedText = $select.find(":selected").text();

    $select.siblings(".holder").text(selectedText);
  }).trigger('change');

  /**********************************************************
    Cookies
  ***********************************************************/
  $.cookie.json = true;

  /**********************************************************
    Save input on cookie
  ***********************************************************/
  $(document).on('click', '.save-input', function(event) {
    var $form = $($(this).data('form')),
        data  = $form.serializeArray();

    $.cookie('formData', data);
  });

  /**********************************************************
    Fill form with cookie
  ***********************************************************/
  var formData = $.cookie('formData');

  if (formData) {
    $.each(formData, function(i, input) {
      var $input = $('[name="' + input.name + '"]'),
          type = $input.prop('type');

      switch(type) {

        case "select-one":
          $input.val(input.value).trigger('change');
          break;

        default:
          $input.val(input.value);
      }
    });

    $.removeCookie('formData');
  }

  /**********************************************************
    Update Problem Category Combo Select
  ***********************************************************/
  $(document).on('click', 'a.update-combo', function(event) {
    var $anchor = $(this),
        key = $anchor.data('key');

    $('#category').val(key).trigger('change');
  });

    if ($('body').hasClass('page-node-134')) {
        $(document).on('cargar-votacion', function (evt, elmOrig, elmDest) {
            var textNumberUp = $('.first', elmOrig).clone()
                .children()
                .remove()
                .end()
                .text();
            if (!Drupal.settings.utecVars.userid || $('.first', elmOrig).parents('.votes').hasClass('voted')){
                $('.first', elmOrig).parents('.rate-widget').remove();
            }
            $('.count', elmDest).text(textNumberUp);
        });
        $(document).on('eventBeforeRate', '.rate-widget', function (evt) {
            $(this).parent().addClass('voted');
            $('.team-list .votes').each(function () {
                if (!$(this).hasClass('voted')) {
                    $('a[title="no"]', this).trigger('click');
                }
            });
        });
        $(document).on('eventAfterRate', '.rate-widget', function (evt) {
            var self = $(this).parent();
            setTimeout(function () {
                $(document).trigger('cargar-votacion', [self, self]);
            }, 500);
        });
        $('.team-list .votes .icon-like').on('click', function (evt) {
            if (Drupal.settings.utecVars.userid) {
                if (!$(this).parent().hasClass('voted')) {
                    $('.first a', $(this).parent()).trigger('click');
                }
            }else {
                evt.preventDefault();
                $('.block-ajax-register .first a').trigger('click');
            }
        });
        $('#votacion.main .init-login').on('click', function (evt) {
            evt.preventDefault();
            $('.block-ajax-register .first a').trigger('click');
        });
        $('.team-list .thumbnail .vote').on('click', function (evt) {
            evt.preventDefault();
            $('.icon-like', $(this).parents('.team')).trigger('click');
        });

        $('.team-list .votes .rate-info').parent().parent().addClass('voted');
        $('.team-list .votes').each(function () {
            $(document).trigger('cargar-votacion', [this, this]);
        });
        /************/
        $('.fb-login-active').on('click', function (evt) {
            evt.preventDefault();
                  $('.block-ajax-register .first a').trigger('click');
              });
    }

});

jQuery(window).load(function() {

  "use strict";

  var $pointNav = $('.nav-point'),
      $nextSectionButton = $('.next-section');

  /**********************************************************
   Waypoints
   ***********************************************************/
  /*$('section.main').waypoint(function(direction) {
    var $section = $(this),
        $listItems = $pointNav.find('li');

    if (direction === "up")
      $section = $section.prev();

    $listItems
      .removeClass('active')
      .eq($section.index()).addClass('active');

    var $nextSection = $section.next();

    if ($nextSection.length) {
      $nextSectionButton
        .fadeIn(600)
        .attr('href', '#' + $nextSection.attr('id'));
    }
    else {
      $nextSectionButton.hide();
    }
  });*/

  /**********************************************************
    Video Player
  ***********************************************************/
  var videoGallery = new App.Modules.VideoGallery($('.video-gallery'));

  setTimeout(function() {
    videoGallery.loadAtIndex(4, true);
  }, 500);

  /**********************************************************
    Accordion
  ***********************************************************/
  var teamAccordion = $('#accordion').accordion({
    closeSelector: ".project-close"
  });

  App.Util.initAccordion(teamAccordion);

  $(window).on('resize', function() {
    App.Util.initAccordion(teamAccordion);
  });

  /**********************************************************
   If URL contains a hash
   ***********************************************************/
  var $target = $("#" + History.getHash());

  if ($target.length) {
    $target.addClass('active');
  }

  /**********************************************************
    One Page Scroll
  ***********************************************************/

var fullpage = true;
var fullPageCreate = function (){
    fullpage = true;
    $('#fullpage').fullpage({
      resize: false,
      easing: 'swing',
      verticalCentered: false,
      slideSelector: '.awfaw',
      sectionSelector: '.main',
      afterLoad: function(anchorLink, index) {
        var $currentSection = $('section.main').eq(index - 1),
            $listItems = $pointNav.find('li'),
            $nextSection = $currentSection.next();

        if ($nextSection.length) {
          var href = $nextSection.attr('id');

          $nextSectionButton
            .attr('href', '#' + href)
            .addClass('icon-triangle')
            .removeClass('icon-triangle-up');
        }
        else {
          var href = $currentSection.prev().attr('id');

          $nextSectionButton
            .attr('href', '#' + href)
            .removeClass('icon-triangle')
            .addClass('icon-triangle-up');
        }

        $listItems
          .removeClass('active')
          .eq(index - 1).addClass('active');

        var state = {
          rand: Math.random()
        };

        /*
         * History.pushState(state, null, "#" + $currentSection.attr('id'));
         * Se comenta la linea ya que no es compatible con navegadores menores a ie10
         * en reemplazo se utiliza el plugin hash.js lo ejecutamos con Hash.go
         */
        Hash.go($currentSection.attr('id'));
      }
    });
}


  fullPageCreate();
  $(window).resize(function(){
    if($(window).width() < 1100){
      fullpage = false;
      $.fn.fullpage.destroy('all');
    }else{
      if(fullpage == false){
        fullPageCreate();
      }
    }
  });
  $(window).resize();

});

$( document ).ready(function() {
    $('.fb-login-active').on('click', function (evt) {
            evt.preventDefault();
                  $('.block-ajax-register .first a').trigger('click');
              });
});
