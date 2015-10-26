// Generated by CoffeeScript 1.8.0
(function ($) {
  (function() {
    $(document).ready(function() {
      var myPlayer, playBtn, videoPlaying, videocover;
      videocover = document.getElementById('videocover');
      playBtn = $('.play-video');
      videoPlaying = false;
      if (videocover) {
        myPlayer = videojs('videocover');
        myPlayer.controls(false);
      }

      // Video
      var video = document.getElementById("video");
      // Buttons
      var playButton = document.getElementById("play-pause");

      if (playButton != null) {
        // Event listener for the play/pause button
        playButton.addEventListener("click", function() {
          if (video.paused == true) {
            // Play the video
            video.play();

            // Update the button text to 'Pause'
            playButton.addClass = "icon-pause";
            playButton.removeClass = "icon-play";
          } else {
            // Pause the video
            video.pause();

            // Update the button text to 'Play'
            playButton.addClass = "icon-play";
            playButton.removeClass = "icon-pause";
          }
        });
      }
    });

  }).call(this);
  
}(jQuery));
