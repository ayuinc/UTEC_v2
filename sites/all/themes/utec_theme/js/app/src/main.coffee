$(document).ready -> 
	$siteMenu =
		navMain: $('.site-menu .nav-main')
		items: $('.site-menu .nav-main li')
		anchor: $('.site-menu .nav-main li a')
	$siteMenuContent =
		siteMenu: $('.site-menu-content')
		titleItems: $('.site-menu-content .titles li')
		contentWrapperLists: $('.site-menu-content .content-wrapper ul')
	$siteWrapper = $('.site-wrapper')
	$siteMenuClose = $('.site-menu-close')
	# DESPLEGAR CONTENIDO DE LA NAVEGACION
	# 	Objetivo:
	# 		Al hacer hover en el SITE MENU la subnavegacion debe desplegarse
	# 		El contenido debe corresponder al item del menu en cuestion
	$siteMenu.navMain.on 'mouseover', 'li', (event) ->
		
		if $siteWrapper.hasClass('on-home')
			$siteWrapper.removeClass('on-home')
			$siteWrapper.removeClass('toggle-nav')

		$siteWrapper.removeClass('toggle-nav')
		$siteMenuClose.removeClass('hidden')

		$('body').css overflow: 'hidden'

		el = $(this)


		el.mousemove (e) ->
			# REVISAR OFFSETY en FIREFOX
			getOffsetY = ->
				return el.find('a').offset().top
			x = if e.offsetX? then e.offsetX else e.screenX
			y = if e.offsetY? then e.offsetY else getOffsetY()
			if x > 61
				console.log 'Element Y: ' + y + ' Screen Y: ' + e.screenY
				$siteMenuContent
					.titleItems
					.eq(el.index())
					.css 'z-index': '1000'
				$siteMenuContent
					.contentWrapperLists
					.eq(el.index())
					.css 'z-index': '1000'
			else
  			$siteMenuContent
  				.titleItems
  				.css 'z-index': '30'
					$siteMenuContent
						.contentWrapperLists
						.css 'z-index': '30'
					$siteMenuContent
						.contentWrapperLists
						.css 'z-index': '30 '
  		if y > 1 and y < 62
  			# console.log y
  			$siteMenuContent
  				.titleItems
  				.eq(el.index())
  				.css 'z-index': '1000'
		  	$siteMenuContent
		  		.contentWrapperLists
		  		.eq(el.index())
		  		.css 'z-index': '1000'
  		else
  			$siteMenuContent
  				.titleItems
  				.css 'z-index': '30'
					$siteMenuContent
						.contentWrapperLists
						.css 'z-index': '30'
			return
		return

	$siteMenuContent.contentWrapperLists.on 'mouseover', ->
		$siteMenu
			.items
			.eq($(this).index())
			.find('a')
			.addClass('active')
		return
	$siteMenuContent.contentWrapperLists.on 'mouseleave', ->
		$siteMenu
			.items
			.eq($(this).index())
			.find('a')
			.removeClass('active')
		return

	# CERRAR LA NAVEGACION 
	# 	Objetivo:
	# 	Al hacer HOVER o CLICK sobre el overlay que ocupa todo el espacio del contenido principal, la barra de subnavegacion debe cerrarse y todo el ciclo comienza de nuevo
	$siteMenuClose.on 'mouseover', ->
		$siteWrapper.addClass('toggle-nav')
		$(this).addClass('hidden')
		$siteMenu.anchor.removeClass('active')
		$('body').css overflow: 'auto'
		return
	return
  	
	
