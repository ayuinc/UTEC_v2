$(document).ready ->

	$sectionScroll = $('body #section-scroll')
	$sectionScrollList = $('body #section-scroll ul')
	$sectionScrollContent = $('body .section-scroll-content')

	$sectionScrollController = new ScrollMagic()

	$.each($sectionScrollContent, (index, item)->
		triggerRef = '.section-scroll-' + index
		sectionData = $(item).data('section-scroll')
		idGen = sectionData.toString().toLowerCase()
		idGen = idGen.split(' ').join('-')
		scrollRef = '.scroll-ref-' + index
		$(item).addClass('section-scroll-' + index)
		$(item).attr('id', idGen)
		sectionList = '<li><a href="#' + idGen + '"' + 'class="animated bounceInRight ad-' + (index * 2) + ' scroll-ref-' + index + '">' + sectionData + '</a></li>'
		$sectionScrollList.append(sectionList)
		$sectionScrollScene = new ScrollScene({
			triggerHook: 'onLeave'
			triggerElement: triggerRef
			duration: $(item).height()
			})
			.setClassToggle(scrollRef, 'active')
			.addTo($sectionScrollController)
		$sectionScrollScene.addIndicators({zindex: 1000, suffix: index})
		return
		)

	$applyScene = new ScrollScene({
		triggerHook: 'onEnter'
		triggerElement: '.section-scroll-3'
		})
		.addTo($sectionScrollController)

	$applyScene.on('enter', (e)->
		$('.btn-apply').addClass('bounceInRight')
		return
		)

	return