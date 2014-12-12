var Accordion = (function() {

  var Constructor = function($ele, _options) {
    var defaults = {
      slides : 4,
      prevSelector: ".prev",
      nextSelector: ".next",
      onExpand: function(){},
      onClose: function(){},
      onNext: function(){},
      onPrev: function(){},
      minWidth: 0,
      activeClass: "active",
      closeSelector: ".close",
      disabledSelector: '.disabled',
      boxSelector: ".desc-container",
      frontContainerSelector: '.desc-front'
    };
    this.options = $.extend(defaults, _options);
    this.$ele = $ele;
    this.dom = {
      children: $ele.children(),
      w: $(window)
    };
    this.hiddenPrev = true;
    this.hiddenNext = false;
    this.animating = false;
    this.childrenLength = this.dom.children.length;
    this.currentOpen = null;
    this.currentSlide = 0;
    this.expanded = false;
    this.windowWidth = this.dom.w.width() > this.options.minWidth ? this.dom.w.width() : this.options.minWidth;
    this.slideWidth = Math.floor(this.windowWidth/this.options.slides);
    this.dom.children.css({"width": this.slideWidth + "px"});
    this.$ele.css("width", ((this.slideWidth)*this.childrenLength) + "px");
    this.supportTransform = (function() {
        var prefixes = 'transform WebkitTransform MozTransform OTransform msTransform'.split(' ');
        for(var i = 0; i < prefixes.length; i++) {
            if(document.createElement('div').style[prefixes[i]] !== undefined) {
                return prefixes[i];
            }
        }
        return false;
    })();
    this.supportTransitions =  (function() {
      var b = document.body || document.documentElement,
          s = b.style,
          p = 'transition';
      if (typeof s[p] == 'string') { return true; }
      var v = ['Moz', 'webkit', 'Webkit', 'Khtml', 'O', 'ms'];
      p = p.charAt(0).toUpperCase() + p.substr(1);
      for (var i=0; i<v.length; i++) {
          if (typeof s[v[i] + p] == 'string') { return true; }
      }
      return false;
    })();
    var num = 0;
    this.dom.children.each(function(){
      $(this).data('num', num++);
    });
    $(".prev").hide();

    // Events
    this.dom.children.not(this.options.disabledSelector).on('click', $.proxy(this.toggleOpen, this));
    this.dom.w.on('resize', $.proxy(this.reset, this));
    $(this.options.nextSelector).on('click', $.proxy(this.goToNextSlide, this));
    $(this.options.prevSelector).on('click', $.proxy(this.goToPrevSlide, this));
  };

  Constructor.prototype = {
    toggleOpen: function(event, num, $target, withTimeout){
      if (this.expanded) {
        this.close(event, num);
      } else {
        this.open(event, num, $target, withTimeout);
      }
    },
    open: function(event, num, $target, withTimeout, fromGoTo){
      if (event) {
        event.preventDefault();
        var $target = $(event.currentTarget),
            num = $target.data('num');
      }

      var sliderWidthExpanded = (((this.slideWidth)*(this.childrenLength - 1))+this.windowWidth);
      this.expand($target, sliderWidthExpanded, num, fromGoTo);
    },
    expand: function(target, sliderWidthExpanded, num, fromGoTo) {
      var $target = $(target),
          $siblings = $target.siblings();

      if ( ! this.animating) {
        if (this.supportTransitions) {
          this.$ele.css("width",  this.windowWidth);

          $target
            .css("width", this.windowWidth)
            .addClass(this.options.activeClass);

          $siblings
            .css("width", 0)
            .removeClass(this.options.activeClass);
        } else {
          this.$ele.animate("width",  this.windowWidth + "px");
          $target.animate({"width": this.windowWidth + "px"})
                 .children().css("display", "block");
          $target.siblings().animate({"width": "0px"}).find(this.options.frontContainerSelector).hide();
        }

        this.expanded = true;
        this.currentOpen = num;
        $(this.options.prevSelector +","+ this.options.nextSelector).css("display", "none");
        this.options.onExpand.call(this, fromGoTo);
      }
    },
    showHideControls: function() {
      $(this.options.prevSelector +","+ this.options.nextSelector).css("display", "block");
      if (this.currentSlide == 0)  {
        $(".prev").hide();
        this.hiddenPrev = true;
      } else {
        if (this.currentSlide == this.childrenLength-this.options.slides)  {
          $(".next").hide();
          this.hiddenNext = true;
        }
      }
    },
    close: function(event, num, fromGoTo, fromReload) {
      var closeW = function() {
          this.showHideControls();

          if (this.supportTransitions) {
            this.$ele.css("width", ((this.slideWidth)*this.childrenLength) + "px");
            this.dom.children.css({
              "width": this.slideWidth + "px"
            });
          }
          else {
            this.$ele.animate("width", ((this.slideWidth)*this.childrenLength) + "px");
            this.dom.children.animate({
              "width": this.slideWidth + "px"
            });
          }

          this.expanded = false;
          this.currentOpen = null;
          this.options.onClose.call(this, fromGoTo, fromReload);
          this.dom.children.removeClass(this.options.activeClass);
      }

      if ( ! this.animating) {
        if(event !== undefined) {
          if (
            (!$(this.options.boxSelector).is(event.target) && $(this.options.boxSelector).has(event.target).length === 0) ||
            ($(this.options.closeSelector).is(event.target))
            ) {
            closeW.call(this);
          }
        } else {
          closeW.call(this);
        }
      }
    },
    goToNextSlide: function() {
      if( ! this.animating){
        this.animating = true;
        if (this.expanded) {
          this.dom.children.css({
            "width": this.windowWidth/this.slides
          });
        }
        if (this.currentSlide < this.childrenLength-this.options.slides){
          if (this.currentSlide == this.childrenLength-this.options.slides -1)  {
            $(".next").hide();
            this.hiddenNext = true;
          }
          if(this.hiddenPrev) {
            $(".prev").show();
            this.hiddenPrev = false;
          }
          this.currentSlide = this.currentSlide + 1;
          if (this.supportTransitions) {
            var first = this.$ele.children().first().width(0);
          } else {
            var first = this.$ele.children().first().animate({width: "0px"});
          }
          setTimeout($.proxy(function(){
            first.appendTo(this.$ele);
            this.animating = false;
          }, this),  500);
        } else {
          this.animating = false;
        }
        this.options.onNext.call(this);
      }
    },
    goToPrevSlide: function() {
      if( ! this.animating){
        this.animating = true;

        if (this.expanded) {
          this.dom.children.css({
            "width": this.windowWidth/this.slides
          });
        }
        if (this.currentSlide > 0){
          if (this.currentSlide ==1)  {
            $(".prev").hide();
            this.hiddenPrev = true;
          }
          if(this.hiddenNext) {
            $(".next").show();
            this.hiddenNext = false;
          }
          var last = this.$ele.children().last().width(0);
          last.prependTo(this.$ele);
          this.currentSlide = this.currentSlide - 1;
          setTimeout($.proxy(function() {
            if (this.supportTransitions) {
              last.css("width", this.slideWidth);
            } else {
              last.animate({width: this.slideWidth});
            }
            this.animating = false;
          }, this), 20);
        } else {
          this.animating = false;
        }
        this.options.onPrev.call(this);
      }
    },
    getSlideWidth: function() {
      return this.slideWidth;
    },
    getSliderWidth: function() {
      return (this.slideWidth)*this.childrenLength;
    },
    goTo: function(num, fromGoTo) {
      if (!this.animating) {
        if(!(fromGoTo == false)) {
          fromGoTo = true;
        }
        this.close(undefined, null, fromGoTo);
        this.currentOpen = num;
        this.open(null, num, this.dom.children.get(num), false, fromGoTo);
        this.animating = true;
        setTimeout($.proxy(function(){
          this.animating = false;
        }, this), 1000);
      }
    },
    reset: function() {
      this.windowWidth = this.dom.w.width() > this.options.minWidth ? this.dom.w.width() : this.options.minWidth;
      this.slideWidth = Math.floor(this.windowWidth/this.options.slides);
      if (!this.expanded){
        this.dom.children.css({"width": this.slideWidth + "px"});
        this.$ele.css("width", ((this.slideWidth)*this.childrenLength) + "px");
      } else {
        this.$ele.css("width",  this.windowWidth + "px");
        this.dom.children.css({"width": 0 + "px"});
        $(this.dom.children.get(this.currentOpen)).css({"width": this.windowWidth});
      }
    },
    reloadSlider: function(_options) {
      if (this.expanded) {
        var fromReload = true;
        this.close(undefined, undefined, undefined, fromReload);
      }
      setTimeout($.proxy(function(){
        if (!this.expanded) {
          if ( this.currentSlide != 0) {
            this.$ele.empty().append(this.dom.children);
            this.currentSlide = 0;
            this.dom.children.on('click', $.proxy(this.toggleOpen, this));
            var num = 0;
            this.dom.children.each(function(){
              $(this).data('num', num++);
            });
          }
          this.showHideControls();
        }
        this.options = $.extend(this.options, _options);
        this.reset();
      }, this), 200);
    }
  };

  return Constructor;

})();

jQuery.fn.accordion = function(options) {
  return new Accordion($(this), options);
}
