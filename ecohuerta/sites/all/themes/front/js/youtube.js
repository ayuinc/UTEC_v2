(function($, app) {

  "use strict";

  app.Youtube = {

    players: [],

    onIframeApiReady: function(event, $elements) {
      var options = {
        width: '420',
        height: '250',
        events: {
          onStateChange: app.Youtube.onPlayerStateChange
        }
      };

      $elements.each(function() {
        var $container = $(this),
            videoId    = $container.data('video-id'),
            containerId= $container.attr('id');

        options['videoId'] = videoId;

        app.Youtube.players.push(new YT.Player(containerId, options));
      });
    },

    onPlayerStateChange: function(event) {
      if (event.data === YT.PlayerState.PLAYING) {
        var title = event.target.getIframe().id;

        ga('send', 'event', 'video', 'play', title);
      }
    },

    stopPlayers: function() {
      $.each(this.players, function(i, player) {
        player.stopVideo();
      });
    },

    cueByIndex: function(index) {
      var player = this.players[index];

      if (player) {
        var videoId = $(player.getIframe()).data('video-id');

        player.cueVideoById(videoId);
      }
    }

  };

})(jQuery, App);

function onYouTubeIframeAPIReady(event) {
  App.Youtube.onIframeApiReady.call(this, event, $('.youtube-video'));
}
