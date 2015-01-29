$(document).ready ->

	textES = $('#text-switcher-word').length
	textEN = $('#text-switcher-word-en').length

	tlText = ''
	textArr = []
	if textES
		tlText = '#text-switcher-word'
		textArr = ['bienestar', 'innovación', 'diseño']
	else
		tlText = '#text-switcher-word-en'
		textArr = ['well-being', 'innovation', 'design']

	tl = new TimelineMax()
	makeScramble = ()->
		tl.to(tlText, 
			1, 
			{ scrambleText: {
				text: textArr[0], 
				chars: "lowerCase", 
				# revealDelay: 0.1, 
				speed: 1,
				tweenLength: true, 
				ease: Linear.easeNone
				}
			})
		tl.to(tlText, 
			1, 
			{ scrambleText: {
				text: textArr[1], 
				chars: "lowerCase", 
				# revealDelay: 0.1, 
				speed: 1,
				tweenLength: true, 
				ease: Linear.easeNone
				}
			})
		tl.to(tlText, 
			1, 
			{ scrambleText: {
				text: textArr[2], 
				chars: "lowerCase", 
				# revealDelay: 0.1, 
				speed: 1,
				tweenLength: true, 
				ease: Linear.easeNone
				}
			})
		setTimeout(()->
			makeScramble()
			return
		, 1500)
		return
	makeScramble()

	return