$(document).ready ->

	$button = $('.body button[type="submit"]')
	$bodyForm = $('.body form')

	$bodyForm.on('submit', (e)->
		# (e).preventDefault()
		$button.append('<span class="spinner animated rotateIn infinite icon-spinner9"></span>')
		return
		)

	console.log($button)

	return