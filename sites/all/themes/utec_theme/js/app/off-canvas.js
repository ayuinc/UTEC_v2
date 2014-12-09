$(document).ready(function(){

	var $siteMenu = {
				navMain: $('.site-menu .nav-main'),
				items: $('.site-menu .nav-main li'),
				anchor: $('.site-menu .nav-main li a'),
				cursorOver: false
			},
			$siteMenuContent = {
				siteMenu: $('.site-menu-content'),
				titleItems: $('.site-menu-content .titles li'),
				contentWrapperLists: $('.site-menu-content .content-wrapper ul')
			},
			$siteWrapper = $('.site-wrapper'),
			$siteMenuClose = $('.site-menu-close');

	// DESPLEGAR CONTENIDO DE LA NAVEGACION
		/* Objetivo:
			Al hacer hover en el SITE MENU la subnavegacion debe desplegarse
			El contenido debe corresponder al item del menu en cuestion
		*/
	$siteMenu.navMain.on('mouseover', 'li', function(event){

		if($siteWrapper.hasClass('on-home')) {
			$siteWrapper.removeClass('on-home');
			$siteWrapper.removeClass('toggle-nav');
		}
		$siteWrapper.removeClass('toggle-nav');
  	$siteMenuClose.removeClass('hidden');
  	$('body').css({
  		overflow: 'hidden'
  	});

  	// $siteMenuContent.titleItems.eq($(this).index()).css({
  	// 	zIndex: 1000
  	// });
  	// $siteMenuContent.contentWrapperLists.eq($(this).index()).css({
  	// 	zIndex: 1000
  	// });

  	var el = $(this);

  	$(this).mousemove(function(e){
  		if(e.offsetX > 61) {  			
  			$siteMenuContent.titleItems.eq($(el).index()).css({
		  		zIndex: 1000
		  	});
		  	$siteMenuContent.contentWrapperLists.eq($(el).index()).css({
		  		zIndex: 1000
		  	});
  		} else {
  			$siteMenuContent.titleItems.css({
					zIndex: 30
				});
				$siteMenuContent.contentWrapperLists.css({
					zIndex: 30
				});
  		}
  		if(e.offsetY > 1 && e.offsetY < 62) {
  			$siteMenuContent.titleItems.eq($(el).index()).css({
		  		zIndex: 1000
		  	});
		  	$siteMenuContent.contentWrapperLists.eq($(el).index()).css({
		  		zIndex: 1000
		  	});
  		} else {
  			$siteMenuContent.titleItems.css({
					zIndex: 30
				});
				$siteMenuContent.contentWrapperLists.css({
					zIndex: 30
				});				
  		}
  	});
	});	
	
	$siteMenuContent.contentWrapperLists.on('mouseover', function(){
		$siteMenu.items.eq($(this).index()).find('a').addClass('active');
	});

	$siteMenuContent.contentWrapperLists.on('mouseleave', function(){
		$siteMenu.items.eq($(this).index()).find('a').removeClass('active');
	});

	// CERRAR LA NAVEGACION 
		/* Objetivo:
			Al hacer HOVER o CLICK sobre el overlay que ocupa todo el espacio del contenido principal, la barra de subnavegacion debe cerrarse y todo el ciclo comienza de nuevo
		*/
	$siteMenuClose.on('mouseover', function(){
		$siteWrapper.addClass('toggle-nav');
		$(this).addClass('hidden');
		$siteMenu.anchor.removeClass('active');
		$('body').css({
  		overflow: 'auto'
  	});
	});

});