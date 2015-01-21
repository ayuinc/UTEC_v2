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

	# ADD SPECIAL CLASSES TO ELEMENTS
	$('#edit-submit.form-submit').addClass('atm-buscar')
	$('.language-link').addClass('atm-idiomas')

	return # END ON READY