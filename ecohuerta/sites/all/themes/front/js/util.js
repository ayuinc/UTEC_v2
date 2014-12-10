(function($, app) {

  "use strict";

  app.Util = {

    scrollTo: function($target) {
      var index = $target.index() + 1;

      $.fn.fullpage.moveTo(index, 0);
    },

    scrollToHandler: function(event, whileScrolling) {
      event.preventDefault();

      var $anchor = $(event.target),
          $to     = $($anchor.attr('href'));

      app.Util.scrollTo($to);

      if (whileScrolling) whileScrolling($anchor);
    },

    scrollToHandlerMenu: function(event) {
      app.Util.scrollToHandler(event, function($anchor) {
        var $parent = $anchor.parent();

        $parent.addClass('active').siblings().removeClass('active');
      });
    },

    adaptHeight: function($target, ele) {
      var ele = ele || window;

      $target.css('height', window.innerHeight + 'px');
    },

    commandForm: function($form, command) {
      switch(command) {
        case 'enable':
          $form.removeClass('disabled');
          $form.find('*:disabled').attr('disabled', false);
          break;

        case 'disable':
          $form.addClass('disabled');
          $form.find('*:disabled').attr('disabled', true);
          break;

        default:
          throw "Unkown command";
      }
    },

    openWindowHandler: function(event) {
      event.preventDefault();

      var $button = $(this),
          href   = $button.attr('href'),
          width  = $button.data('width') || 800,
          height = $button.data('height') || 500,
          left   = (screen.width/2) - (width/2),
          top    = (screen.height/2) - (height/2),
          specs  = "";

      specs += "width=" + width + ",";
      specs += "height=" + height + ",";
      specs += "left=" + left + ",";
      specs += "top=" + top + ",";
      specs += "scrollbars=no";

      app.Util.openWindow(href, null, specs);
    },

    openWindow: function(href, title, specs) {
      return window.open(href, title, specs);
    },

    backgroundSlider: function($ele, $bgContainer, $altIngenioSection) {
      var options = {
        auto:'true',
        pause: 5000,
        mode: 'fade',
        pager: false,
        onSlideBefore: function($slideElement, oldIndex, newIndex) {
          $bgContainer.backstretch('show', newIndex).backstretch('pause');
          $('#ingenio-en-accion .backstretch').find('img').attr('alt',$altIngenioSection[newIndex]);
        }
      };

      this.initSlider($ele, options);
    },

    initSlider: function($ele, options) {
      $ele.bxSlider(options);
    },

    isMobile: function() {
      var check = false;

      (function(a) {
        if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) {
          check = true;
        }
      })(navigator.userAgent||navigator.vendor||window.opera);

      return check;
    },

    initAccordion: function(accordion) {
      var windowWidth = $(window).width();

      if(windowWidth >= 800) {
        accordion.reloadSlider({ slides : 4 });
      }
      else if (windowWidth > 380 ) {
        accordion.reloadSlider({ slides : 2 });
      }
      else {
        accordion.reloadSlider({ slides : 1 });
      }
    },

    dropDownHandler: function(event) {
      var $li = $(this).parent(),
          $submenu = $li.find('> .submenu');

      $submenu.show();
      $li.siblings('.dropdown').find('> .submenu').hide();
    }

  };

})(jQuery, App);
