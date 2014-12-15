(function($, app) {

  "use strict";

  App.Modules = App.Modules || {};

  App.Modules.Player = (function() {

    function Constructor($ele, options) {
      var defaults = {
        playerSelector: '#youtube-player',
        youtube: {},
        shareTemplateSelector: '#template-share'
      };

      this.$ele = $ele;

      this.options = $.extend(defaults, options);

      this.dom = {
        title: $ele.find('.title'),
        subtitle: $ele.find('.subtitle'),
        share: $ele.find('.share-buttons'),
        button: $ele.find('.fancybox-media'),
        player: $ele.find(this.options.playerSelector)
      };

      this.player = new YT.Player(this.dom.player.attr('id'), this.options.youtube);
    }

    Constructor.prototype = {

      command: function(method) {
        var args = [].slice.call(arguments, 1);

        this.player[method](args[0]);
      },

      load: function(video, cue) {
        var command = (cue) ? 'cueVideoById' : 'loadVideoById',
            params = this.getShareParams(video);

        this.setTitle(video.title);
        this.setSubtitle(video.subtitle);
        this.command(command, video.videoId);
        this.setButton(params.url);
        this.setShareButtons(params);
      },

      setTitle: function(title) {
        this.dom.title.html(title);
      },

      setSubtitle: function(subtitle) {
        this.dom.subtitle.html(subtitle);
      },

      setShareButtons: function(params) {
        var template = $(this.options.shareTemplateSelector).html(),
            html = Mustache.render(template, params);

        this.dom.share.html(html);

        twttr.widgets.load();
        FB.XFBML.parse($('#facebook-share').get(0));
      },

      setButton: function(url) {
        this.dom.button.attr('href', url);
      },

      getShareParams: function(video) {
        return {
          url: 'https://www.youtube.com/watch?v=' + video.videoId,
          text: video.title
        };
      }

    };

    return Constructor;

  })();

  App.Modules.VideoGallery = (function() {

    function Constructor($ele, options) {
      var defaults = {
        cueFirst: true,
        playerOptions: {},
        playerSelector: '.player-container'
      };

      this.options = $.extend(defaults, options);

      this.dom = {
        videoList: $ele.find('.video-list'),
        videoListItems: $.proxy(function() {
          return this.dom.videoList.find('> li');
        }, this)
      };

      this.$ele = $ele;

      this.player = new app.Modules.Player($ele.find(this.options.playerSelector), this.options.playerOptions);

      this.dom.videoListItems().on('click', '.load-video', $.proxy(this.loadVideoHandler, this));
    }

    Constructor.prototype = {

      loadVideoHandler: function(event) {
        var video = this.getVideoMetadataFromAnchor($(event.target));

        this.player.load(video, true);
      },

      cueVideo: function(video) {
        this.player.load(video, true);
      },

      getVideoMetadataFromAnchor: function($anchor) {
        var title = $anchor.data('title'),
            videoId = $anchor.data('video-id'),
            subtitle = 'Capítulo ' + ($anchor.parent('li').index() + 1) + ':';

        return {
          title: title,
          videoId: videoId,
          subtitle: subtitle
        };
      },

      loadAtIndex: function(index, cue) {
        var cue = false || cue,
            $item = this.dom.videoListItems().eq(index),
            $anchor = $item.find('.load-video'),
            video = this.getVideoMetadataFromAnchor($anchor);

        this.player.load(video, cue);
      }

    };

    return Constructor;

  })();

})(jQuery, App);
