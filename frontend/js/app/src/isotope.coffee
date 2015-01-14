$(document).ready ->

	$container = $('.grid-list-centered')

	$container.imagesLoaded ->
		$container.isotope({
			itemSelector: '.mb-ch-14'
			})
		return

	return