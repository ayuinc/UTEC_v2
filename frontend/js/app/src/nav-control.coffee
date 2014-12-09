$(document).ready ->

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


	return