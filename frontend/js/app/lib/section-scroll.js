// Generated by CoffeeScript 1.8.0
(function() {
  $(document).ready(function() {
    var $applyScene, $sectionScroll, $sectionScrollContent, $sectionScrollController, $sectionScrollList;
    $sectionScroll = $('body #section-scroll');
    $sectionScrollList = $('body #section-scroll ul');
    $sectionScrollContent = $('body .section-scroll-content');
    $sectionScrollController = new ScrollMagic();
    $.each($sectionScrollContent, function(index, item) {
      var $sectionScrollScene, idGen, scrollRef, sectionData, sectionList, triggerRef;
      triggerRef = '.section-scroll-' + index;
      sectionData = $(item).data('section-scroll');
      idGen = sectionData.toString().toLowerCase();
      idGen = idGen.split(' ').join('-');
      scrollRef = '.scroll-ref-' + index;
      $(item).addClass('section-scroll-' + index);
      $(item).attr('id', idGen);
      sectionList = '<li><a href="#' + idGen + '"' + 'class="animated bounceInRight ad-' + (index * 2) + ' scroll-ref-' + index + '">' + sectionData + '</a></li>';
      $sectionScrollList.append(sectionList);
      $sectionScrollScene = new ScrollScene({
        triggerHook: 'onLeave',
        triggerElement: triggerRef,
        duration: $(item).height()
      }).setClassToggle(scrollRef, 'active').addTo($sectionScrollController);
      $sectionScrollScene.addIndicators({
        zindex: 1000,
        suffix: index
      });
    });
    $applyScene = new ScrollScene({
      triggerHook: 'onEnter',
      triggerElement: '.section-scroll-3'
    }).addTo($sectionScrollController);
    $applyScene.on('enter', function(e) {
      $('.btn-apply').addClass('bounceInRight');
    });
  });

}).call(this);
