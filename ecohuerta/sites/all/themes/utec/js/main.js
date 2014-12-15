/*!
 * jQuery Cookie Plugin v1.4.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2006, 2014 Klaus Hartl
 * Released under the MIT license
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD
        define(['jquery'], factory);
    } else if (typeof exports === 'object') {
        // CommonJS
        factory(require('jquery'));
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($) {

    var pluses = /\+/g;

    function encode(s) {
        return config.raw ? s : encodeURIComponent(s);
    }

    function decode(s) {
        return config.raw ? s : decodeURIComponent(s);
    }

    function stringifyCookieValue(value) {
        return encode(config.json ? JSON.stringify(value) : String(value));
    }

    function parseCookieValue(s) {
        if (s.indexOf('"') === 0) {
            // This is a quoted cookie as according to RFC2068, unescape...
            s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
        }

        try {
            // Replace server-side written pluses with spaces.
            // If we can't decode the cookie, ignore it, it's unusable.
            // If we can't parse the cookie, ignore it, it's unusable.
            s = decodeURIComponent(s.replace(pluses, ' '));
            return config.json ? JSON.parse(s) : s;
        } catch(e) {}
    }

    function read(s, converter) {
        var value = config.raw ? s : parseCookieValue(s);
        return $.isFunction(converter) ? converter(value) : value;
    }

    var config = $.cookie = function (key, value, options) {

        // Write

        if (arguments.length > 1 && !$.isFunction(value)) {
            options = $.extend({}, config.defaults, options);

            if (typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setTime(+t + days * 864e+5);
            }

            return (document.cookie = [
                encode(key), '=', stringifyCookieValue(value),
                options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
                options.path    ? '; path=' + options.path : '',
                options.domain  ? '; domain=' + options.domain : '',
                options.secure  ? '; secure' : ''
            ].join(''));
        }

        // Read

        var result = key ? undefined : {};

        // To prevent the for loop in the first place assign an empty array
        // in case there are no cookies at all. Also prevents odd result when
        // calling $.cookie().
        var cookies = document.cookie ? document.cookie.split('; ') : [];

        for (var i = 0, l = cookies.length; i < l; i++) {
            var parts = cookies[i].split('=');
            var name = decode(parts.shift());
            var cookie = parts.join('=');

            if (key && key === name) {
                // If second argument (value) is a function it's a converter...
                result = read(cookie, value);
                break;
            }

            // Prevent storing a cookie that we couldn't decode.
            if (!key && (cookie = read(cookie)) !== undefined) {
                result[name] = cookie;
            }
        }

        return result;
    };

    config.defaults = {};

    $.removeCookie = function (key, options) {
        if ($.cookie(key) === undefined) {
            return false;
        }

        // Must not alter options, thus extending a fresh object...
        $.cookie(key, '', $.extend({}, options, { expires: -1 }));
        return !$.cookie(key);
    };

}));
function pedirVoto() {
    if (confirm("Esta página está genial (ya la puedes ver). ¿Me das tu voto?")) {
        window.open("http://www.loquesea.com/votar.php?idvoto=12111", "", "")
    }
}
function fbShare(url, title, descr, image, winWidth, winHeight) {
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);
    url = location.protocol + location.hostname + url;

    window.open('http://www.facebook.com/sharer.php?s=100&p[url]=' + url + '&p[title]=' + title + '&p[summary]=' + descr + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
}

function twShare(url,message) {
    var t, u, urlTwitter;
    url = location.protocol + location.hostname + url;
    u = encodeURIComponent(url);
    t = encodeURIComponent(message);
    urlTwitter = "https://twitter.com/share?url=" + u;
    window.open(urlTwitter + "&text=" + t);
}

jQuery(function ($) {

    var pager = 0;
    var criteriaSel;
    var catSelected;

    var app = {};
    app.Util = {
        openWindowHandler: function (event, url) {
            event.preventDefault();

            var $button = $(this),
                href = $button.attr('href') || url,
                width = $button.data('width') || 800,
                height = $button.data('height') || 500,
                left = (screen.width / 2) - (width / 2),
                top = (screen.height / 2) - (height / 2),
                specs = "";

            specs += "width=" + width + ",";
            specs += "height=" + height + ",";
            specs += "left=" + left + ",";
            specs += "top=" + top + ",";
            specs += "scrollbars=no";

            //app.Util.openWindow(href, null, specs);
            $('#miModal').show().css('opacity',1);
        },

        openWindow: function (href, title, specs) {
            return window.open(href, title, specs);
        }
    };

    var urlPath = '';
    if (location.hostname == 'web.dev') {
        urlPath = '/utec/utec/drupal';
    }
//bloque

    $(".menu li a").on('click', function (e) {
        $(".menu .current").removeClass('current');
        $(this).addClass('current');
    });
//bloque

//bloque
    $(document).on("ready", function () {

        $("ul.menu > .men1").on('click', function () {
            $('ul.menu > .men2').removeClass('active');
            $('ul.menu > .men1').addClass('active');
        });
        $("ul.menu > .men2").on('click', function () {
            $('ul.menu > .men1').removeClass('active');
            $('ul.menu > .men2').addClass('active');
        });
        $("#mobile-aplica-tu-ingenio").on('click', function () {
            $('ul.menu > .men1').removeClass('active');
            $('ul.menu > .men2').removeClass('active');
        });
        
	$(".recientes").on('click', function () {
            $('.recientes span').removeClass('icon-arrow-down');
            $('.recientes span').addClass('icon-arrow-up');
            $('.valoradas span').removeClass('icon-arrow-up');
            $('.valoradas span').addClass('icon-arrow-down');
            $('.comentarios span').removeClass('icon-arrow-up');
            $('.comentarios span').addClass('icon-arrow-down');
        });

        $(".valoradas").on('click', function () {
            $('.valoradas span').removeClass('icon-arrow-down');
            $('.valoradas span').addClass('icon-arrow-up');
            $('.recientes span').removeClass('icon-arrow-up');
            $('.recientes span').addClass('icon-arrow-down');
            $('.comentarios span').removeClass('icon-arrow-up');
            $('.comentarios span').addClass('icon-arrow-down');
        });

        $(".comentarios").on('click', function () {
            $('.comentarios span').removeClass('icon-arrow-down');
            $('.comentarios span').addClass('icon-arrow-up');
            $('.recientes span').removeClass('icon-arrow-up');
            $('.recientes span').addClass('icon-arrow-down');
            $('.valoradas span').removeClass('icon-arrow-up');
            $('.valoradas span').addClass('icon-arrow-down');
        });
        /**********************************************************
        Categorias Aplica tu ingenio button events
        ***********************************************************/
          $(document).on('click', '.tipos .views-row', function(event) {
            var title = $(this).data('key');
            console.log(title);
            ga('send', 'event', 'btn_categorias', 'click', title);
          });

          $(document).on('click', '.tipos-xs .views-row', function(event) {
            var title = $(this).data('key');
            console.log(title);
            ga('send', 'event', 'btn_categorias', 'click', title);
          });
          

        $("#sabias .envio-terminos").on('click', function () {
            $('#modalLogin').modal('hide');
        });

        $("header button").on('click',function(){
                if($('.submenu-content-responsive').is(':hidden')){
                    $('.submenu-content-responsive').show();
                }
                else{
                    $('.submenu-content-responsive').hide();
                }
            });
        
        $('.ajax-poll #edit-vote').on('click',function(evt){
            if (!Drupal.settings.utecVars.userid) {
                evt.preventDefault();
                $('.block-ajax-register .first a').trigger('click');
            }
        });

        $("#sabias .btn-envia").on('click', function () {
            if (Drupal.settings.utecVars.userid) {
                if ($('.pregunta-respuesta textarea').val()) {
                    $('#soluciones-node-form #edit-title').val('Solucion');
                    $('#soluciones-node-form #edit-field-contenido-und-0-value').val($('.pregunta-respuesta textarea').val());

                    if(!$(this).data('enabled')) {
                        $(this).data('enabled', true);
                        $('#soluciones-node-form #edit-submit').trigger('mousedown');
                    }
                }
            }else{
                $.cookie('textSol', $('.pregunta-respuesta textarea').val());
                $.cookie('catSol', $('body').data('catSol'));
                $('.block-ajax-register .first a').trigger('click');
            }
        });

	$("#sabias-xs .btn-envia-3").on('click', function () {
            if (Drupal.settings.utecVars.userid) {
                if ($('.solucion-contenido textarea').val()) {
                    $('#soluciones-node-form #edit-title').val('Solucion');
                    $('#soluciones-node-form #edit-field-contenido-und-0-value').val($('.solucion-contenido textarea').val());

                    if(!$(this).data('enabled')) {
                        $(this).data('enabled', true);
                        $('#soluciones-node-form #edit-submit').trigger('mousedown');
			$('.solucion-contenido textarea').val('');
			$('#sabias-xs').hide();
                    }
                }
            }else{
                $.cookie('textSol', $('.solucion-contenido textarea').val());
                $.cookie('catSol', $('body').data('catSol'));
                $('.block-ajax-register .first a').trigger('click');
            }
        });

        /*$("#sabias-xs .btn-envia-3").on('click', function () {
            if (Drupal.settings.utecVars.userid) {
                if ($('.solucion-contenido textarea').val()) {
                    $('#soluciones-node-form #edit-title').val('Solucion');
                    $('#soluciones-node-form #edit-field-contenido-und-0-value').val($('.solucion-contenido textarea').val());
                    var selec = $('#soluciones-node-form #edit-field-categoria-und').val();
                    var data = $('#soluciones-node-form').serialize();
                    if(!$(this).data('enabled')) {
                        $(this).data('enabled', true);
                        var self=this;
                        $.post(urlPath + '/', data, function (data) {
                            $(self).data('enabled', false);
                            $('.solucion-contenido textarea').val('');
                            $('.categorias-xs .busqueda').val(selec).trigger('change');
                            $('#sabias-xs').hide();
                        });
                    }
                   
                }
            }else{
                $.cookie('textSol', $('.solucion-contenido textarea').val());
                $.cookie('catSol', $('body').data('catSol'));
                $('.block-ajax-register .first a').trigger('click');
            }
        });*/

        $(".menu li a").on('click', function (e) {
            $(".menu .current").removeClass('current');
            $(this).addClass('current');
        });
        $(".menu-xs span").on('click', function () {
            $('.menu-xs-lista').toggle(function () {
                $(".menu-xs-lista").css({"display": "block"});
            });
        });

        $(".list-opciones .likes .icon-thumbs-up").on('click', function () {
            $(this).toggleClass('activaVotar');
            if ($(".list-opciones .likes .icon-thumbs-up2").hasClass("activaVotar")) {
                $(".list-opciones .likes .icon-thumbs-up2").removeClass('activaVotar');
            }
        });
        $(".list-opciones .likes .icon-thumbs-up2").on('click', function () {
            $(this).toggleClass('activaVotar');
            if ($(".list-opciones .likes .icon-thumbs-up").hasClass("activaVotar")) {
                $(".list-opciones .likes .icon-thumbs-up").removeClass('activaVotar');
            }

        });

        function reiniciar() {
            $('.mar').addClass('reiniciaTipo');
            $('.transito').addClass('reiniciaTipo');
            $('.deforestacion').addClass('reiniciaTipo');
            $('.friaje').addClass('reiniciaTipo');
            $('.huaycos').addClass('reiniciaTipo');
            $('.sonora').addClass('reiniciaTipo');
        }

        $(".tipos .tipo").each(function (idx,elm) {
            $(elm).on('click', function () {
                $('#soluciones-node-form #edit-field-categoria-und').val($('.views-field-nid', this).text().trim());
                $('body').data('catSol',idx);

                $(".tipo.activaTipo").removeClass('activaTipo');
                console.log($(this).hasClass("transito"));
                if ($(this).hasClass("mar")) {
                    $('#sabias .pregunta .titulo-pregunta p').text("Cada fin de semana se recogen grandes cantidades de basura en las playas.");
                    $('#sabias .triangulo-up').css('left', '7.5%');
                    $(this).addClass('activaTipo');
                }
                if ($(this).hasClass("transito")) {
                    $('#sabias .pregunta .titulo-pregunta p').text("Los limeños pasan 1/4 de su vida viajando en transporte público.");
                    $('#sabias .triangulo-up').css('left', '23.5%');
                    $(this).addClass('activaTipo');
                }
                if ($(this).hasClass("deforestacion")) {
                    $('#sabias .pregunta .titulo-pregunta p').text("La tala ilegal y la minería informal son sus principales causas.");
                    $('#sabias .triangulo-up').css('left', '40.5%');
                    $(this).addClass('activaTipo');
                }
                if ($(this).hasClass("friaje")) {
                    $('#sabias .pregunta .titulo-pregunta p').text("Durante los friajes la temperatura baja hasta -18°C.");
                    $('#sabias .triangulo-up').css('left', '57.5%');
                    $(this).addClass('activaTipo');
                }
                if ($(this).hasClass("huaycos")) {
                    $('#sabias .pregunta .titulo-pregunta p').text("Existen más de 1,800 puntos en riesgo de sufrirlos.");
                    $('#sabias .triangulo-up').css('left', '73.5%');
                    $(this).addClass('activaTipo');
                }
                if ($(this).hasClass("sonora")) {
                    $('#sabias .pregunta .titulo-pregunta p').text("En las principales vías es el doble de la permitida.");
                    $('#sabias .triangulo-up').css('left', '90.5%');
                    $(this).addClass('activaTipo');
                }
                reiniciar();
                $(this).addClass('activaTipo');
                $(this).removeClass('reiniciaTipo');

                /*if($(this).hasClass("sonora")){
                 $(".tipos .sonora img").css('display', 'none');
                 }*/


            });
        });

        $(".tipos-xs .tipo-xs").each(function (idx,elm) {
            $(elm).on('click', function () {
                $('#soluciones-node-form #edit-field-categoria-und').val($('.views-field-nid', this).text().trim());
                $('body').data('catSol',idx);

                $(".tipo-xs.activaTipo").removeClass('activaTipo');
                console.log($(this).hasClass("transito"));
                if ($(this).hasClass("mar")) {
                    $('#sabias-xs .titulo .pregunta1 span').text("Contaminación en el mar de Lima");
                    $('#sabias-xs .titulo .pregunta1 p').text("Cada fin de semana se recogen grandes cantidades de basura en las playas.");
                    $(this).addClass('activaTipo');
                }
                if ($(this).hasClass("transito")) {
                    $('#sabias-xs .titulo .pregunta1 span').text("Tránsito en Lima");
                    $('#sabias-xs .titulo .pregunta1 p').text("Los limeños pasan 1/4 de su vida viajando en transporte público.");
                    $(this).addClass('activaTipo');
                }
                if ($(this).hasClass("deforestacion")) {
                    $('#sabias-xs .titulo .pregunta1 span').text("Deforestación en el Perú");
                    $('#sabias-xs .titulo .pregunta1 p').text("La tala ilegal y la minería informal son sus principales causas.");
                    $(this).addClass('activaTipo');
                }
                if ($(this).hasClass("friaje")) {
                    $('#sabias-xs .titulo .pregunta1 span').text("Friaje en Puno");
                    $('#sabias-xs .titulo .pregunta1 p').text("Durante los friajes la temperatura baja hasta -18°C.");
                    $(this).addClass('activaTipo');
                }
                if ($(this).hasClass("huaycos")) {
                    $('#sabias-xs .titulo .pregunta1 span').text("Huaycos en la Sierra");
                    $('#sabias-xs .titulo .pregunta1 p').text("Existen más de 1,800 puntos en riesgo de sufrirlos.");
                    $(this).addClass('activaTipo');
                }
                if ($(this).hasClass("sonora")) {
                    $('#sabias-xs .titulo .pregunta1 span').text("Contaminación sonora en Lima");
                    $('#sabias-xs .titulo .pregunta1 p').text("En las principales vías es el doble de la permitida.");
                    $(this).addClass('activaTipo');
                }
                reiniciar();
                $(this).addClass('activaTipo');
                $(this).removeClass('reiniciaTipo');
                /*if($(this).hasClass("sonora")){
                 $(".tipos .sonora img").css('display', 'none');
                 }*/
            });
        });

        $(".tipos-xs .tipo-xs").on('click', function () {
            if ($('#sabias-xs').is(':hidden')) {
                $('#sabias-xs').show();
            }
            else {
                $('#sabias-xs .cerrar').hide();
            }
        });

        $(".tipos .mar img").css('display','none');
        $(".tipos .mar").addClass('activaTipo');
        $(".tipos .mar").addClass('div-table');
        $(".tipos .mar .views-field-title").addClass('alinear');
        $(".tipos-xs .mar img").css('display','none');
        $(".tipos-xs .mar").addClass('activaTipo');
        $(".tipos-xs .mar").addClass('div-table');
        $(".tipos-xs .mar .views-field-title").addClass('alinear');

        $("#sabias-xs .cerrar").on('click', function () {
            $('#sabias-xs').hide();
            $(".tipo-xs img").removeAttr('style');
            $(".tipo-xs").removeAttr('style');
        });


        $(".list-opciones-xs .comentar").on('click', function () {
            if ($('.realizar-comentario').is(':hidden')) {
                $('.realizar-comentario').show();
            }
            else {
                $('.realizar-comentario').hide();
            }
        });
        //$('#region-lista .dis').on('click', '.list-opciones .comentar', function () {
        //    if ($('.realizar-comentario', $(this).parent().parent()).is(':hidden')) {
        //        $('.realizar-comentario', $(this).parent().parent()).show();
        //        $(document).trigger('cargar-comentarios', [$(this).parent().parent()]);
        //    }
        //    else {
        //        $('.realizar-comentario', $(this).parent().parent()).hide();
        //    }
        //});

    });
//bloque
//bloque
    function pedirContaminacion() {
        var u = document.location.href.split("/");
        var jash = window.location.hash;
        console.log(jash);
        var id = jash.substring(1);
        console.log(id);

        if (id === "contaminacionenelmardelima") {
            
            $.extend(Drupal.settings, {"rate": {"basePath": urlPath + "\/rate\/vote\/js", "destination": ""}});
            setTimeout(function () {
               $(".tipos .tipo:eq(0)").trigger('click');
            }, 1000);
            
        }

        if (id === "transitoenlima") {
            $.extend(Drupal.settings, {"rate": {"basePath": urlPath + "\/rate\/vote\/js", "destination": ""}});
            setTimeout(function () {
               $(".tipos .tipo:eq(1)").trigger('click');
            }, 1000);
                
        }

        if (id === "deforestacionenelperu") {
            $.extend(Drupal.settings, {"rate": {"basePath": urlPath + "\/rate\/vote\/js", "destination": ""}});
            setTimeout(function () {
               $(".tipos .tipo:eq(2)").trigger('click');
            }, 1000);
            
        }

        if (id === "friajeenpuno") {
            $.extend(Drupal.settings, {"rate": {"basePath": urlPath + "\/rate\/vote\/js", "destination": ""}});
            setTimeout(function () {
               $(".tipos .tipo:eq(3)").trigger('click');
            }, 1000);
            
        }

        if (id === "huaycosenlasierra") {
           $.extend(Drupal.settings, {"rate": {"basePath": urlPath + "\/rate\/vote\/js", "destination": ""}});
            setTimeout(function () {
               $(".tipos .tipo:eq(4)").trigger('click');
            }, 1000);
           
        }

        if (id === "contaminacionsonoraenlima") {
            $.extend(Drupal.settings, {"rate": {"basePath": urlPath + "\/rate\/vote\/js", "destination": ""}});
            setTimeout(function () {
               $(".tipos .tipo:eq(5)").trigger('click');
            }, 1000);
            
        }

    }
    function pedirContaminacionResponsive() {
        var u = document.location.href.split("/");
        var jash = window.location.hash;
        console.log(jash);
        var id = jash.substring(1);
        console.log(id);

        if (id === "contaminacionenelmardelima") {
            
            
            $.extend(Drupal.settings, {"rate": {"basePath": urlPath + "\/rate\/vote\/js", "destination": ""}});
            setTimeout(function () {
               $(".tipos-xs .tipo-xs:eq(0)").trigger('click');
            }, 1000);
        }

        if (id === "transitoenlima") {
        
            $.extend(Drupal.settings, {"rate": {"basePath": urlPath + "\/rate\/vote\/js", "destination": ""}});
            setTimeout(function () {
               $(".tipos-xs .tipo-xs:eq(1)").trigger('click');
            }, 1000);
        }

        if (id === "deforestacionenelperu") {
            
            $.extend(Drupal.settings, {"rate": {"basePath": urlPath + "\/rate\/vote\/js", "destination": ""}});
            setTimeout(function () {
               $(".tipos-xs .tipo-xs:eq(2)").trigger('click');
            }, 1000);
        }

        if (id === "friajeenpuno") {
            
            $.extend(Drupal.settings, {"rate": {"basePath": urlPath + "\/rate\/vote\/js", "destination": ""}});
            setTimeout(function () {
               $(".tipos-xs .tipo-xs:eq(3)").trigger('click');
            }, 1000);
        }

        if (id === "huaycosenlasierra") {
           
           $.extend(Drupal.settings, {"rate": {"basePath": urlPath + "\/rate\/vote\/js", "destination": ""}});
            setTimeout(function () {
               $(".tipos-xs .tipo-xs:eq(4)").trigger('click');
            }, 1000);
        }

        if (id === "contaminacionsonoraenlima") {
            
            $.extend(Drupal.settings, {"rate": {"basePath": urlPath + "\/rate\/vote\/js", "destination": ""}});
            setTimeout(function () {
               $(".tipos-xs .tipo-xs:eq(5)").trigger('click');
            }, 1000);
        }

    }
    if($(window).width()>=1024)
    {
        pedirContaminacion();
    }
    else
    {
        pedirContaminacionResponsive();
    }
//bloque

//bloque
    $(".pregunta-xs .enviar-comentario").on('click', function () {
        if ($(".pregunta-xs input").val().length < 1) {
            alert("El comentario es obligatorio");
            return false;
        }
    });

    var optionStr = '';
    var categoriesArray = [];
    var tiposDef = ['mar', 'transito', 'deforestacion', 'friaje', 'huaycos', 'sonora'];
    var tiposHash = ['contaminacionenelmardelima', 'transitoenlima', 'deforestacionenelperu', 'friajeenpuno', 'huaycosenlasierra', 'contaminacionsonoraenlima'];
    $('#soluciones-node-form #edit-field-categoria-und').val($('.views-field-nid:eq(0)').text().trim());

    $(".tipos .views-row").each(function (idx) {
        var id = $('.views-field-nid', this).text().trim();
        var label = $('.views-field-title', this).text().trim();
        $(this).addClass(tiposDef[idx]);
        $(this).data('role', tiposDef[idx]);
        $(this).data('hash', '#' + tiposDef[idx]);
        $(this).attr('data-key',tiposHash[idx]);
        categoriesArray[id] = label;
        optionStr += '<option value="' + id + '">' + label + '</option>';
        if ((idx % 2 == 0) || idx == 0) {

            $(".tipos .view-content").append('<div class="division-xs"></div>');
        } else {
            m = 1;
        }
        $(this).appendTo('.tipos .view-content .division-xs:last');
        if ($.cookie('textSol')) {
            $('.pregunta-respuesta textarea').val($.cookie('textSol'));
            $(".tipos .tipo:eq(" + $.cookie('catSol') + ")").trigger('click');
            setTimeout(function () {
                $.removeCookie('textSol');
                $.removeCookie('catSol');
            }, 2000);
        }
    }).addClass('col-xs-6 tipo');

    $(".tipos-xs .views-row").each(function (idx) {
        var id = $('.views-field-nid', this).text().trim();
        var label = $('.views-field-title', this).text().trim();
        $(this).addClass(tiposDef[idx]);
        $(this).data('role', tiposDef[idx]);
        $(this).data('hash', '#' + tiposDef[idx]);
        $(this).attr('data-key',tiposHash[idx]);
        categoriesArray[id] = label;
        /*optionStr += '<option value="' + id + '">' + label + '</option>';*/
        if ((idx % 2 == 0) || idx == 0) {

            $(".tipos-xs .view-content").append('<div class="division-xs"></div>');
        } else {
            m = 1;
        }
        $(this).appendTo('.tipos-xs .view-content .division-xs:last');
        if ($.cookie('textSol')) {
            $('.pregunta-respuesta textarea').val($.cookie('textSol'));
            $(".tipos-xs .tipo-xs:eq(" + $.cookie('catSol') + ")").trigger('click');
            setTimeout(function () {
                $.removeCookie('textSol');
                $.removeCookie('catSol');
            }, 2000);
        }
    }).addClass('col-xs-6 tipo-xs');


    $('.pregunta-respuesta .envio-2 .btn-envia').on('click', function () {
        if (Drupal.settings.utecVars.userid) {
            if ($('.pregunta-respuesta .comentario').val()) {
                $('#edit-comment-body-und-0-value').val($('.pregunta-respuesta .comentario').val());
                $('#comment-form')[0].submit();
            }
        }else{
            $('.block-ajax-register .first a').trigger('click');
        }
    });

    $(document).on('click','#modalContent #modal-content .btn-crea',function(){
        $('#user-login .ajax-register-links .first a').trigger('click');
    });

    $(document).on('click', '#modalContent #modal-content .btn-rec', function () {
        $('#user-login .ajax-register-links li  a:eq(1)').trigger('click');
    });

    $(document).on('cargar-soluciones', function (evt, criteria, more, refresh) {
        $('.dis-loader .enviar-comentario').hide();
        $('.dis-loader .icon-loop').show();
        var hash = '&hash=' + Math.random();
        var path = '/soluciones-data';
        var params = [];
        var isNewrequest = false;


        var catid = $('.head-soluciones .categorias .busqueda').val();
        if (catid != 'all') {
            params.push('field_categoria_target_id=' + catid);
        }

        if (criteriaSel != criteria || catSelected != catid || !more) {
            isNewrequest = true;
            pager = 0;
            $('.sub-valoracion span').text('')
        }

        criteriaSel = criteria;
        catSelected = catid;

        switch (criteria) {
            case 'comments':
                params.push('sort_by=comment_count');
                break;
            case 'votes':
                params.push('sort_by=value');
                break;
            case 'recent':
            default:
                params.push('sort_by=created');
                break;
        }

        params.push('sort_order=DESC');
        params.push('page=' + pager);

        if($('.sub-valoracion span').text()==""){
            $(document).trigger('cargar-soluciones-cantidad');
        }

        $.getJSON(urlPath + path + '/?' + params.join('&') + hash, function (data) {
            if(isNewrequest){
                $('#region-lista .dis').html('');
            }

            $('.sub-valoracion span').text(data.length);
            var htmlElm = '';
            var source = $("#entry-template").html();
            var template = Handlebars.compile(source);
            var nid = '';
            for (var idx in data.nodes) {
                if(!nid){
                    nid = data.nodes[idx].node['Nid'];
                }
                data.nodes[idx].node['Post-date']='Hace '+data.nodes[idx].node['Post-date'].replace(' ago', '');
		data.nodes[idx].node['AuthorNombre']=data.nodes[idx].node['AuthorNombre'].split('_').join(' ');
                htmlElm += template(data.nodes[idx].node);
            }
            $('#region-lista .dis').append(htmlElm);
            Drupal.behaviors.rate.attach($('.votacion'));
            //$('.first .rate-button').addClass('icon-thumbs-up color-list-opc').text('');
            //$('.first').addClass('separador');
            //$('.last .rate-button').addClass('icon-thumbs-up2 color-list-opc').text('');
            $('.likes').each(function () {
                $(document).trigger('cargar-votacion', [this, this]);
            });
            if (data.nodes.length == 10){
                $('.dis-loader .enviar-comentario').show();
            }
            $('.dis-loader .icon-loop').hide();
            pager++;
            if(refresh){
                location = "#solucion-" + nid
            }
        });
    });

    $(document).on('cargar-soluciones-cantidad', function (evt) {

        var hash = '&hash=' + Math.random();
        var path = '/soluciones-total';
        var params = [];
        var isNewrequest = false;

        if (catSelected != 'all') {
            params.push('field_categoria_target_id=' + catSelected);
        }

        $.getJSON(urlPath + path + '/?' + params.join('&') + hash, function (data) {
            $('.sub-valoracion span').text(data.nodes.length);
        });
    });
    $(document).on('cargar-soluciones-xs', function (evt, criteria, more) {
        $('.dis-loader .enviar-comentario').hide();
        $('.dis-loader .icon-loop').show();
        var hash = '&hash=' + Math.random();
        var path = '/soluciones-data';
        var params = [];
        var isNewrequest = false;


        var catid = $('.categorias-xs .busqueda').val();
        if (catid != 'all') {
            params.push('field_categoria_target_id=' + catid);
        }

        if (criteriaSel != criteria || catSelected != catid || !more) {
            isNewrequest = true;
            pager = 0;
        }

        criteriaSel = criteria;
        catSelected = catid;

        switch (criteria) {
            case 'comments':
                params.push('sort_by=comment_count');
                break;
            case 'votes':
                params.push('sort_by=value');
                break;
            case 'recent':
            default:
                params.push('sort_by=created');
                break;
        }

        params.push('sort_order=DESC');
        params.push('page=' + pager);

        $.getJSON(urlPath + path + '/?' + params.join('&') + hash, function (data) {
            if(isNewrequest){
                $('#region-lista .dis').html('');
            }

            $('.sub-valoracion span').text(data.length);
            var htmlElm = '';
            var source = $("#entry-template").html();
            var template = Handlebars.compile(source);
            for (var idx in data.nodes) {
                htmlElm += template(data.nodes[idx].node);
            }
            $('#region-lista .dis').append(htmlElm);
            Drupal.behaviors.rate.attach($('.votacion'));
            //$('.first .rate-button').addClass('icon-thumbs-up color-list-opc').text('');
            //$('.first').addClass('separador');
            //$('.last .rate-button').addClass('icon-thumbs-up2 color-list-opc').text('');
            $('.likes').each(function () {
                $(document).trigger('cargar-votacion', [this, this]);
            });
            if (data.nodes.length == 10){
                $('.dis-loader .enviar-comentario').show();
            }
            $('.dis-loader .icon-loop').hide();
            pager++;
        });
    });

    $('.dis-loader .enviar-comentario').on('click',function(){
        $(document).trigger('cargar-soluciones', [criteriaSel, true]);
    });

    $(document).on('cargar-votacion', function (evt, elmOrig, elmDest) {
        var textNumberUp = $('.first', elmOrig).clone()
            .children()
            .remove()
            .end()
            .text();
        var textNumberDown = $('.last', elmOrig).clone()
            .children()
            .remove()
            .end()
            .text();
        $('.icon-number.up', elmDest).text(textNumberUp);
        $('.icon-number.down', elmDest).text(textNumberDown);
    });
    //
    $('#region-lista .dis').on('eventAfterRate', '.votacion .rate-widget', function (evt) {
        var self = $(this).parent().parent();
        setTimeout(function () {
            $(document).trigger('cargar-votacion', [self, self]);
        }, 500);
    });
    $(document).on('cargar-comentarios', function (evt, elm) {
        var hash = '&hash=' + Math.random();
        $.getJSON(urlPath + '/commentarios-data/?nid=' + elm.data('id') + hash, function (data) {
            var htmlElm = '';
            var source = $("#comment-template").html();
            var template = Handlebars.compile(source);

            for (var idx in data) {
                htmlElm += template(data[idx]);
            }
            $('.num-comentario', elm).text('Comentarios(' + data.length + ')');
            $('.lista-comentarios', elm).html(htmlElm);
        });
    });

    $('.node-type-soluciones .likes .icon-thumbs-up').on('click', function () {
        if (Drupal.settings.utecVars.userid) {
            $('.rate-widget .first a').trigger('click');
        }else{
            $('.block-ajax-register .first a').trigger('click');
        }
    });

    $('.node-type-soluciones .likes .icon-thumbs-up2').on('click', function () {
        if (Drupal.settings.utecVars.userid) {
            $('.rate-widget .last a').trigger('click');
        }else{
            $('.block-ajax-register .first a').trigger('click');
        }
    });

    $('#region-lista .dis').on('click', '.likes .icon-thumbs-up', function () {
        if (Drupal.settings.utecVars.userid) {
            $('.first a', $(this).parent()).trigger('click');
        }else{
            $('.block-ajax-register .first a').trigger('click');
        }
    });

    $('#region-lista .dis').on('click', '.likes .icon-thumbs-up2', function () {
        if (Drupal.settings.utecVars.userid) {
            $('.last a', $(this).parent()).trigger('click');
        }else{
            $('.block-ajax-register .first a').trigger('click');
        }
    });

    $('#region-lista .dis').on('click', '.realizar-comentario .enviar-comentario', function () {
        var parent = $(this).parents('.lista-item');
        if ($('.pregunta-xs input', parent).val()) {
            $(document).trigger('guardar-comentarios', [$(this).parents('.lista-item')]);
        }
    });

    $('#region-lista .dis').on('click', '.list-contenido .ver', function () {
        var parent = $(this).parents('.lista-item');
        $('.comentar', parent).trigger('click');
    });

    $('#region-lista .dis').on('click', '.icon-facebook', function () {
        var parent = $(this).parents('.lista-item');
        //$('.comentar', parent).trigger('click');

        fbShare($('.ver', parent).attr('href'), 'Fb Share', 'Compartir', 'image', 520, 350);
    });

    $('#region-lista .dis').on('click', '.icon-twitter', function (evt) {
        var parent = $(this).parents('.lista-item');
        //$('.comentar', parent).trigger('click');


        $('.list-contenido',parent).text();

        var textContent = $('.list-contenido',parent).clone()
            .children()
            .remove()
            .end()
            .text().trim();

        twShare($('.ver', parent).attr('href'),"Aplica tu ingenio - ");
    });

    $('.icon-facebook').on('click', function () {
        var parent = $(this).parents('.lista-item');
        //$('.comentar', parent).trigger('click');
        fbShare(location.pathname, 'Fb Share', 'Compartir', 'image', 520, 350)
    });

    $('.icon-twitter').on('click', function () {
        var parent = $(this).parents('.lista-item');
        //$('.comentar', parent).trigger('click');


        $('.list-contenido',parent).text();

        var textContent = $('.list-contenido',parent).clone()
            .children()
            .remove()
            .end()
            .text().trim();

        twShare(location.pathname,textContent);
    });


    $(document).on('guardar-comentarios', function (evt, elm) {
        $('#comment-form #edit-comment-body-und-0-value').val($('.pregunta-xs input', elm).val());
        $('#comment-form').attr('action', urlPath + '/comment/reply/' + elm.data('id'));
        var dataform = $('#comment-form').serialize();
        if (!$(this).data('enabled')) {
            $(this).data('enabled', true);
            var self=this;
            $.post($('#comment-form').attr('action'), dataform, function (data) {
                $(self).data('enabled', false);
                $('.pregunta-xs input', elm).val('');
                $(document).trigger('cargar-comentarios', [elm]);
            });
        }
    });

    $('.valoracion .recientes').on('click', function () {
        $(document).trigger('cargar-soluciones', ['recent']);
    });

    $('.valoracion .valoradas').on('click', function () {
        $(document).trigger('cargar-soluciones', ['votes']);
    });

    $('.valoracion .comentarios').on('click', function () {
        $(document).trigger('cargar-soluciones', ['comments']);
    });

    //$('.block-login .login').on('click', app.Util.openWindowHandler);

    $('.head-soluciones .categorias .busqueda').append(optionStr).on('change', function (evt, refresh) {
        $(document).trigger('cargar-soluciones', ['recent', false, refresh]);
    }).val('all');
    /*MOD#33*/
     $('.categorias-xs .busqueda').append(optionStr).on('change', function () {
        $(document).trigger('cargar-soluciones-xs', ['recent']);
    }).val('all');
    /*MOD#33*/

    if($('body').hasClass('node-type-soluciones')){
        $(document).trigger('cargar-votacion', [$('.rate-widget'), $('.node-type-soluciones .likes')]);
        $('.soluciones .node-soluciones').on('eventAfterRate', '.rate-widget', function (evt) {
            setTimeout(function () {
                $(document).trigger('cargar-votacion', [$('.rate-widget'), $('.node-type-soluciones .likes')]);
            }, 500);
        });
        $('.lista-item .list-imagen').html($('.node-soluciones .user-picture').html());
    }else{
        if ($.cookie('textSol')) {
            $('.pregunta-respuesta textarea').val($.cookie('textSol'));
            setTimeout(function () {
                $.removeCookie('textSol');
            }, 2000);
        }
        $(document).trigger('cargar-soluciones', ['recent']);
        Drupal.ajax.prototype.commands.solucion_submit = function (ajax, response, status) {
            if (response.nid) {
                $("#sabias .btn-envia").data('enabled', false);
                $('.pregunta-respuesta textarea').val('');
                $('.head-soluciones .categorias .busqueda').val(response.catid).trigger('change', [true]);
            }
        };
        $.extend(Drupal.settings, {"rate": {"basePath": urlPath + "\/rate\/vote\/js", "destination": ""}});
        setTimeout(function () {
           /* $(".tipos .tipo:eq(0)").trigger('click');*/
        }, 1000);
    }

    function reiniciar(){
                $('.mar').addClass('reiniciaTipo');
                $(".tipos .mar img").css('display','block');
                $(".tipos .mar").removeClass('div-table');
                $(".tipos .mar .views-field-title").removeClass('alinear');
                $('.transito').addClass('reiniciaTipo');
                $(".tipos .transito img").css('display','block');
                $(".tipos .transito").removeClass('div-table');
                $(".tipos .transito .views-field-title").removeClass('alinear');
                $('.deforestacion').addClass('reiniciaTipo');
                $(".tipos .deforestacion img").css('display','block');
                $(".tipos .deforestacion").removeClass('div-table');
                $(".tipos .deforestacion .views-field-title").removeClass('alinear');
                $('.friaje').addClass('reiniciaTipo');
                $(".tipos .friaje img").css('display','block');
                $(".tipos .friaje").removeClass('div-table');
                $(".tipos .friaje .views-field-title").removeClass('alinear');
                $('.huaycos').addClass('reiniciaTipo');
                $(".tipos .huaycos img").css('display','block');
                $(".tipos .huaycos").removeClass('div-table');
                $(".tipos .huaycos .views-field-title").removeClass('alinear');
                $('.sonora').addClass('reiniciaTipo');  
                $(".tipos .sonora img").css('display','block');
                $(".tipos .sonora").removeClass('div-table');
                $(".tipos .sonora .views-field-title").removeClass('alinear');                
            }
    function reiniciarResponsive(){
                $(".tipos-xs .mar img").removeClass('img-mod');
                $(".tipos-xs .mar").removeClass('div-table');
                $(".tipos-xs .mar .views-field-title").removeClass('alinear');
                
                $(".tipos-xs .transito img").removeClass('img-mod');
                $(".tipos-xs .transito").removeClass('div-table');
                $(".tipos-xs .transito .views-field-title").removeClass('alinear');
                
                $(".tipos-xs .deforestacion img").removeClass('img-mod');
                $(".tipos-xs .deforestacion").removeClass('div-table');
                $(".tipos-xs .deforestacion .views-field-title").removeClass('alinear');
                
                $(".tipos-xs .friaje img").removeClass('img-mod');
                $(".tipos-xs .friaje").removeClass('div-table');
                $(".tipos-xs .friaje .views-field-title").removeClass('alinear');
                
                $(".tipos-xs .huaycos img").removeClass('img-mod');
                $(".tipos-xs .huaycos").removeClass('div-table');
                $(".tipos-xs .huaycos .views-field-title").removeClass('alinear');
                
                $(".tipos-xs .sonora img").removeClass('img-mod');
                $(".tipos-xs .sonora").removeClass('div-table');
                $(".tipos-xs .sonora .views-field-title").removeClass('alinear');                 
            }

            $(".tipos .tipo").on('click',function(){                
                    $(".tipo .activaTipo").removeClass('activaTipo');
                    console.log($(this).hasClass("transito"));
                    if($(this).hasClass("mar")){
                        $('#sabias .triangulo-up').css('left','7.5%');
                        $(".tipos .mar img").css('display','none');
                        $(".tipos .mar").addClass('div-table');
                        $(".tipos .mar .views-field-title").addClass('alinear');
                        $(this).addClass('activaTipo');
                    }
                    if($(this).hasClass("transito")){
                        $('#sabias .triangulo-up').css('left','23.5%');
                        $(".tipos .transito img").css('display','none');
                        $(".tipos .transito").addClass('div-table');
                        $(".tipos .transito .views-field-title").addClass('alinear');
                        $(this).addClass('activaTipo');
                    }
                    if($(this).hasClass("deforestacion")){
                        $('#sabias .triangulo-up').css('left','40.5%');
                        $(".tipos .deforestacion img").css('display','none');
                        $(".tipos .deforestacion").addClass('div-table');
                        $(".tipos .deforestacion .views-field-title").addClass('alinear');
                        $(this).addClass('activaTipo');     
                    }
                    if($(this).hasClass("friaje")){
                        $('#sabias .triangulo-up').css('left','57.5%');
                        $(".tipos .friaje img").css('display','none');
                        $(".tipos .friaje").addClass('div-table');
                        $(".tipos .friaje .views-field-title").addClass('alinear');
                        $(this).addClass('activaTipo');     
                    }
                    if($(this).hasClass("huaycos")){
                        $('#sabias .triangulo-up').css('left','73.5%');
                        $(".tipos .huaycos img").css('display','none');
                        $(".tipos .huaycos").addClass('div-table');
                        $(".tipos .huaycos .views-field-title").addClass('alinear');
                        $(this).addClass('activaTipo');     
                    }
                    if($(this).hasClass("sonora")){
                        $('#sabias .triangulo-up').css('left','90.5%');
                        $(".tipos .sonora img").css('display','none');
                        $(".tipos .sonora").addClass('div-table');
                        $(".tipos .sonora .views-field-title").addClass('alinear');
                        $(this).addClass('activaTipo');     
                    }
                    reiniciar();                    
                    $(this).addClass('activaTipo');
                    /*console.log(this);*/
                    $(this).removeClass('reiniciaTipo');
                    if($(this).hasClass("mar")){
                        $(".tipos .mar img").css('display','none');
                        $(".tipos .mar").addClass('div-table');
                        $(".tipos .mar .views-field-title").addClass('alinear');
                    }
                    if($(this).hasClass("transito")){
                        $(".tipos .transito img").css('display','none');
                        $(".tipos .transito").addClass('div-table');
                        $(".tipos .transito .views-field-title").addClass('alinear');
                    }
                    if($(this).hasClass("deforestacion")){
                        $(".tipos .deforestacion img").css('display','none');
                        $(".tipos .deforestacion").addClass('div-table');
                        $(".tipos .deforestacion .views-field-title").addClass('alinear');   
                    }
                    if($(this).hasClass("friaje")){
                        $(".tipos .friaje img").css('display','none');
                        $(".tipos .friaje").addClass('div-table');
                        $(".tipos .friaje .views-field-title").addClass('alinear');  
                    }
                    if($(this).hasClass("huaycos")){
                        $(".tipos .huaycos img").css('display','none');
                        $(".tipos .huaycos").addClass('div-table');
                        $(".tipos .huaycos .views-field-title").addClass('alinear'); 
                    }
                    if($(this).hasClass("sonora")){
                        $(".tipos .sonora img").css('display','none');
                        $(".tipos .sonora").addClass('div-table');
                        $(".tipos .sonora .views-field-title").addClass('alinear');  
                    }
            });
            
             $(".tipos-xs .tipo-xs").on('click',function(){                
                    $(".tipo-xs .activaTipo").removeClass('activaTipo');
                    console.log($(this).hasClass("transito"));
                    if($(this).hasClass("mar")){
                        $(".tipos-xs .mar img").css('display','none');
                        $(".tipos-xs .mar").addClass('div-table');
                        $(".tipos-xs .mar .views-field-title").addClass('alinear');
                        $(this).addClass('activaTipo');
                    }
                    if($(this).hasClass("transito")){
                        $(".tipos-xs .transito img").css('display','none');
                        $(".tipos-xs .transito").addClass('div-table');
                        $(".tipos-xs .transito .views-field-title").addClass('alinear');
                        $(this).addClass('activaTipo');
                    }
                    if($(this).hasClass("deforestacion")){
                        $(".tipos-xs .deforestacion img").css('display','none');
                        $(".tipos-xs .deforestacion").addClass('div-table');
                        $(".tipos-xs .deforestacion .views-field-title").addClass('alinear');
                        $(this).addClass('activaTipo');     
                    }
                    if($(this).hasClass("friaje")){
                        $(".tipos-xs .friaje img").css('display','none');
                        $(".tipos-xs .friaje").addClass('div-table');
                        $(".tipos-xs .friaje .views-field-title").addClass('alinear');
                        $(this).addClass('activaTipo');     
                    }
                    if($(this).hasClass("huaycos")){
                        $(".tipos-xs .huaycos img").css('display','none');
                        $(".tipos-xs .huaycos").addClass('div-table');
                        $(".tipos-xs .huaycos .views-field-title").addClass('alinear');
                        $(this).addClass('activaTipo');     
                    }
                    if($(this).hasClass("sonora")){
                        $(".tipos-xs .sonora img").css('display','none');
                        $(".tipos-xs .sonora").addClass('div-table');
                        $(".tipos-xs .sonora .views-field-title").addClass('alinear');
                        $(this).addClass('activaTipo');     
                    }
                    reiniciarResponsive();                    
                    $(this).addClass('activaTipo');
                    $(this).removeClass('reiniciaTipo');
                    if($(this).hasClass("mar")){
                        $(".tipos-xs .mar img").addClass('img-mod');
                        $(".tipos-xs .mar").addClass('div-table');
                        $(".tipos-xs .mar .views-field-title").addClass('alinear');
                    }
                    if($(this).hasClass("transito")){
                        $(".tipos-xs .transito img").addClass('img-mod');
                        $(".tipos-xs .transito").addClass('div-table');
                        $(".tipos-xs .transito .views-field-title").addClass('alinear');
                    }
                    if($(this).hasClass("deforestacion")){
                        $(".tipos-xs .deforestacion img").addClass('img-mod');
                        $(".tipos-xs .deforestacion").addClass('div-table');
                        $(".tipos-xs .deforestacion .views-field-title").addClass('alinear');   
                    }
                    if($(this).hasClass("friaje")){
                        $(".tipos-xs .friaje img").addClass('img-mod');
                        $(".tipos-xs .friaje").addClass('div-table');
                        $(".tipos-xs .friaje .views-field-title").addClass('alinear');  
                    }
                    if($(this).hasClass("huaycos")){
                        $(".tipos-xs .huaycos img").addClass('img-mod');
                        $(".tipos-xs .huaycos").addClass('div-table');
                        $(".tipos-xs .huaycos .views-field-title").addClass('alinear'); 
                    }
                    if($(this).hasClass("sonora")){
                        $(".tipos-xs .sonora img").addClass('img-mod');
                        $(".tipos-xs .sonora").addClass('div-table');
                        $(".tipos-xs .sonora .views-field-title").addClass('alinear');  
                    }
            });

    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
            if($('.dis-loader .enviar-comentario').is(':visible')) $('.dis-loader .enviar-comentario').trigger('click');
        }
    });

    if(location.hash.indexOf('#comment')===0){
        var idx = location.hash.split('-');
        location = "#comentario-" + idx[1];
    }

});
//bloque
