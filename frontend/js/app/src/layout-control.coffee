$(document).ready ->

	$siteMenu = $('.site-menu')

	# $siteMenu.height($(window).height())

# DISABLE ANCHORS
	$('.disable-anchors a').click (e)->
		e.preventDefault()
		return

	$('[data-href]').click((e)->
		# console.log($(this).data('href'))
		locationArr = window.location.pathname.split('/')
		lastPath = locationArr[locationArr.length - 1]
		mainPath = locationArr[locationArr.length - 2]
		# console.log(lastPath)
		# console.log(mainPath)
		pathObj = {}
		pathObj[mainPath] = lastPath
		# console.log(window.history)
		window.history.pushState(pathObj, '', lastPath)
		# console.log(window.history)
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

	# IE8
	getBrowser = ()->
		navigatorObj = navigator.appName
		userAgentObj = navigator.userAgent
		matchVersion
		match = userAgentObj.match(/(opera|chrome|safari|firefox|msie|trident)\/?\s*(\.?\d+(\.\d+)*)/i)
		if (match && (matchVersion = userAgentObj.match(/version\/([\.\d]+)/i)) != null)
			match[2] = matchVersion[1]
		# mobile
		if navigator.userAgent.match(/iPhone|Android|webOS|iPad/i)
			return `match ? [match[1], match[2], mobile] : [navigatorObj, navigator.appVersion, mobile]`
		# web browser
		return `match ? [match[1], match[2]] : [navigatorObj, navigator.appVersion, '-?']`

	if getBrowser()[0] is 'Trident' or 'Microsoft Internet Explorer'
		$('.site-wrapper').addClass('ie')

	return # END ON READY















