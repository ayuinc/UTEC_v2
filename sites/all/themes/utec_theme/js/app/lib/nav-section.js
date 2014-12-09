// Generated by CoffeeScript 1.8.0
(function() {
  var onScroll;

  $(document).ready(function() {
    var $navSectionRef, $sectionNav, $sectionNavIndex, $sectionNavItems, $siteContent, $siteContentIndex, $siteContentItems, getDocHeight;
    $siteContent = $('.site-content');
    $siteContentItems = $('.nav-section-item', $siteContent);
    $siteContentIndex = $siteContentItems.index();
    $sectionNav = $('.nav-section');
    $sectionNavItems = $('li', $sectionNav);
    $sectionNavIndex = $sectionNavItems.index();
    $navSectionRef = $('a.nav-section-ref');
    $(document).on('scroll', onScroll);
    $navSectionRef.on('click', function(e) {
      var $target, target;
      e.preventDefault();
      target = this.hash;
      $target = $(target);
      $(target).velocity('scroll', {
        duration: 200,
        offset: 7
      });
    });
    getDocHeight = function() {
      var D;
      D = document;
      return Math.max(D.body.scrollHeight, D.documentElement.scrollHeight, D.body.offsetHeight, D.documentElement.offsetHeight, D.body.clientHeight, D.documentElement.clientHeight);
    };
    $(window).scroll(function() {
      if ($(window).scrollTop() + $(window).height() === getDocHeight()) {
        $sectionNav.addClass('hidden');
      } else {
        $sectionNav.removeClass('hidden');
      }
    });
  });

  onScroll = function(e) {
    var $navSectionRef, $scrollPos;
    $navSectionRef = $('a.nav-section-ref');
    $scrollPos = $(document).scrollTop();
    $navSectionRef.each(function() {
      var $currLink, $currLinkParent, $refElement;
      $currLink = $(this);
      $currLinkParent = $currLink.parent();
      $refElement = $($currLink.attr('href'));
      if ($refElement.position().top <= $scrollPos && $refElement.position().top + $refElement.height() > $scrollPos) {
        $currLinkParent.addClass('active');
      } else {
        $currLinkParent.removeClass('active');
      }
    });
  };

}).call(this);
