$(document).ready ->

	# el = document.getElementById('text-switcher-word')
	# ticker = new TickerScrambler(el, {list: ['One','Two','Three']})
	# $('#text-switcher-word').TickerScrambler({
	# 	list: ['Bienestar', 'Diseño', 'Innovación']
	# 	pause: 1000
	# 	speed: 33
	# 	random: true
	# })
	tl = new TimelineMax()
	makeScramble = ()->
		tl.to("#text-switcher-word", 
			1, 
			{ scrambleText: {
				text: "bienestar", 
				chars: "lowerCase", 
				# revealDelay: 0.1, 
				speed: 1,
				tweenLength: true, 
				ease: Linear.easeNone
				}
			})
		tl.to("#text-switcher-word", 
			1, 
			{ scrambleText: {
				text: "innovación", 
				chars: "lowerCase", 
				# revealDelay: 0.1, 
				speed: 1,
				tweenLength: true, 
				ease: Linear.easeNone
				}
			})
		tl.to("#text-switcher-word", 
			1, 
			{ scrambleText: {
				text: "diseño", 
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