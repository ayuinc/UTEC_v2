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

	$siteMenuClose
		.css 'height': $(document).height()

	$('.site-menu .nav-main li, .site-menu-content .content-wrapper ul').hover(
		->
			console.log $(this).index()
			$siteMenuItem = $('.site-menu .nav-main li')
			$siteMenuContentItem = $('.site-menu-content .content-wrapper ul')
			if $siteWrapper.hasClass('on-home')
				$siteWrapper.removeClass('on-home')
				$siteWrapper.removeClass('toggle-nav')

			$siteWrapper.removeClass('toggle-nav')
			$siteMenuClose.removeClass('hidden')

			$('body').css overflow: 'hidden'
			$siteMenuContent.titleItems
				.eq($(this).index())
				.css 'z-index': 1000
			$siteMenuContentItem
				.eq($(this).index())
				.css 'z-index': 1000
			return
		->
			$siteMenuContent.titleItems
				.css 'z-index': 30
			$siteMenuContent.contentWrapperLists
				.css 'z-index': 30
			return
	)

	$siteMenuContent.contentWrapperLists.hover(
		-> 
			$siteMenu
				.items
				.eq($(this).index())
				.find('a')
				.addClass('active')
			return
		->
			$siteMenu
				.items
				.eq($(this).index())
				.find('a')
				.removeClass('active')
			return
	)

	# CERRAR LA NAVEGACION 
	# 	Objetivo:
	# 	Al hacer HOVER o CLICK sobre el overlay que ocupa todo el espacio del contenido principal, la barra de subnavegacion debe cerrarse y todo el ciclo comienza de nuevo
	$siteMenuClose.on 'mouseover', ->
		$siteWrapper.addClass('toggle-nav')
		$(this).addClass('hidden')
		$siteMenu.anchor.removeClass('active')
		$('body').css overflow: 'auto'
		return

	# OCULTAR NAVEGACION CUANDO USUARIO EN FOOTER
	getDocHeight = ->
    D = document
    return Math.max(
      D.body.scrollHeight, D.documentElement.scrollHeight,
      D.body.offsetHeight, D.documentElement.offsetHeight,
      D.body.clientHeight, D.documentElement.clientHeight)

	$(window).scroll ->
	  if($(window).scrollTop() + $(window).height() == getDocHeight())
      $siteWrapper.removeClass 'on-home'
      $siteWrapper.addClass 'on-footer'
    else
    	$siteWrapper.removeClass 'on-footer'
			return

	return
















