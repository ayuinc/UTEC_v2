$(document).ready ->

	# $container = $('.grid-list-centered')
	$mallaCurricular = $('.malla-curricular')

	$mallaCurricular.children('li').addClass('malla-item')

	$mallaCurricular.isotope({
		itemSelector: '.malla-item'
		layoutMode: 'fitRows'
		})

	# $container.imagesLoaded ->
	# 	$container.isotope({
	# 		itemSelector: '.mb-ch-14'
	# 		})
	# 	return

	return