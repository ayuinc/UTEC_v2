$(document).ready ->

	$siteMenu = $('.site-menu')

	# $siteMenu.height($(window).height())

# DISABLE ANCHORS
	$('.disable-anchors a').click (e)->
		e.preventDefault()
		return

	$('[data-href]').click((e)->
		console.log($(this).data('href'))
		document.location.replace($(this).data('href'))
		return
		)

	# MOBILE MENU
	$('.menu-trigger').click (e)->
		e.preventDefault()
		$('.site-wrapper').toggleClass('menu-on')
		$('body').toggleClass('scroll-y-off')
		return

	return # END ON READY