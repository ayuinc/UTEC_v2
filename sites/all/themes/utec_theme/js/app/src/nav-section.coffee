$(document).ready ->
	# SITE CONTENT SECTIONS
	$siteContent = $('.site-content')
	$siteContentItems = $('.nav-section-item', $siteContent)
	$siteContentIndex = $siteContentItems.index()

	# SECTION NAV
	$sectionNav = $('.nav-section')
	$sectionNavItems = $('li', $sectionNav)
	$sectionNavIndex = $sectionNavItems.index()
	$navSectionRef = $('a.nav-section-ref')

	$(document).on 'scroll', onScroll

	# SMOOTH SCROLL CON VELOCITY JS
	$navSectionRef.on 'click', (e) ->
		e.preventDefault()
		target = this.hash
		$target = $(target)
		$(target).velocity 'scroll', {
			duration: 200,
			offset: 7
		}
		return

  # OCULTAR NAVEGACION CUANDO USUARIO EN FOOTER
	getDocHeight = ->
    D = document
    return Math.max(
      D.body.scrollHeight, D.documentElement.scrollHeight,
      D.body.offsetHeight, D.documentElement.offsetHeight,
      D.body.clientHeight, D.documentElement.clientHeight)

	$(window).scroll ->
	  if($(window).scrollTop() + $(window).height() == getDocHeight())
      $sectionNav.addClass 'hidden'
    else
    	$sectionNav.removeClass 'hidden'
			return		

	return

onScroll = (e) ->	
	$navSectionRef = $('a.nav-section-ref')
	$scrollPos = $(document).scrollTop()
	# console.log $scrollPos
	$navSectionRef.each ->
    $currLink = $(this)
    $currLinkParent = $currLink.parent()
    $refElement = $($currLink.attr('href'))
    if ($refElement.position().top <= $scrollPos && $refElement.position().top + $refElement.height() > $scrollPos)
      $currLinkParent.addClass 'active'
    else
      $currLinkParent.removeClass 'active'
    return
	return