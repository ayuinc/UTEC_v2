$(document).ready ->

	$button = $('.body button[type="submit"]')
	$bodyForm = $('.body form')

	overlayTempl = '<div class="form-overlay">' +
								'<div>' +
								'<a href="#" class="form-overlay-close">X</a>' +
								'<h3>Procesando información</h3>' +
								'<div class="mt-42">' +
								'<span class="spinner animated rotateIn infinite icon-spinner9"></span>' +
								'</div>' +
								'</div>' +
								'</div>'

	$bodyForm.on('submit', (e)->

		if $bodyForm.valid()
			$('body').addClass('form-on-submit').append(overlayTempl)

		return
	)
	
	# $bodyForm.on('submit', (e)->
	# # 	# (e).preventDefault()
	# 	if($bodyForm.valid())
	# 		$('body').addClass('form-on-submit').append(overlayTempl)
	# # 	setTimeout(()->
	# # 		if (!$('.errordiv label').length > 0)
	# # 			$('body').addClass('form-on-submit').append(overlayTempl)
	# # 			checkDOMChange()
	# # 		else
	# # 			console.log('Errordiv not empty')
	# # 		return
	# # 	, 500)
	# # 	# $button.append('<span class="spinner animated rotateIn infinite icon-spinner9"></span>')
	# 	return
	# 	# )


	# checkDOMChange = ()->
	# 	setTimeout(()->
	# 		$('.form-overlay-close').click((e)->
	# 			e.preventDefault()
	# 			$('.form-overlay').remove()
	# 			$('body').removeClass('form-on-submit')
	# 			return
	# 			)
	# 		return
	# 	, 1000)

	return