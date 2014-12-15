$(document).ready ->

	# HEADER CONTROL
	$header = $('#header')
	$navDisplay = $('.nav-display', $header)
	$navDisplayTriggers = $('.nav-display-triggers', $header)
	$navDisplayClose = $('.nav-display-close')

	$navDisplayTriggers.on('click', '[href^=#]', (e)->
		$navRef = $(this).attr('href')
		$header.attr('class', '')
		$('a', $navDisplayTriggers).removeClass('active')
		if $navRef.length > 0
			e.preventDefault()
			$(this).addClass('active')
			$navRefClass = $navRef.slice(1)
			$header.addClass('display ' + $navRefClass)
		return
		)

	$navDisplayClose.click((e)->
		e.preventDefault()
		$header.attr('class', '')
		$('a', $navDisplayTriggers).removeClass('active')
		return
		)

	# HEADER ON SCROLL CONTROL
	$headerSm = $('#header-on-scroll')
	$navDisplayShrink = $('.nav-shrink-display', $headerSm)
	$navDisplayShrinkTriggers = $('.nav-display-triggers', $headerSm)
	$navDisplayShrinkClose = $('.nav-display-close')

	$headerScrollController = new ScrollMagic()

	$navDisplayShrinkTriggers.on('click', '[href^=#]', (e)->
		$navRef = $(this).attr('href')
		$headerSm.attr('class', '')
		$('a', $navDisplayShrinkTriggers).removeClass('active')
		if $navRef.length > 0
			e.preventDefault()
			$(this).addClass('active')
			$navRefClass = $navRef.slice(1)
			$headerSm.addClass('display ' + $navRefClass)
		return
		)

	$navDisplayShrinkClose.click((e)->
		e.preventDefault()
		$headerSm.attr('class', '')
		$('a', $navDisplayShrinkTriggers).removeClass('active')
		return
		)

	# APPEND THE HEADER TRIGGER TO LAYOUT
	if $('.hero-unit').length > 0
		$('.hero-unit').append('<div class="header-trigger"></div>')
	else
		console.log 'no hero-unit'
		$('.body').append('<div class="header-trigger"></div>')

	$headerScene = new ScrollScene({
		triggerHook: 0.3
		triggerElement: '.header-trigger'
		})
		.setClassToggle('.site-wrapper', 'header-shrink')
		.addTo($headerScrollController)

	$headerScene.on('leave', (e)->
		$headerSm.attr('class', '')
		$('a', $navDisplayShrinkTriggers).removeClass('active')
		return
		)
	# $headerScene.addIndicators({zindex: 1000, suffix: '1'})


	return