<?php  

$video_name = $node->field_video['und']['0']['filename'];

?>
<!-- HERO-UNIT -->
<video
	id="videocover"
	autoplay
	loop
  class="video-js videocover vjs-default-skin"
  controls
  preload="auto">
  <!-- <source src="assets/video/video_UTEC-pedal.webm" type='video/webm' /> -->
  <source src="sites/default/files/<?php echo $video_name ?>" type='video/mp4' />
  <!-- <source src="assets/video/video_UTEC-pedal.ogg" type='video/ogg' /> -->
  <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
</video>
<!-- <div class="video-placeholder" style="background: url(assets/img/project-bg-1.jpg) no-repeat center top;"></div> -->
<div class="overlay flex-middle">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h2 class="thin text-white lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit repellat dolorem alias minus accusamus.</h2>
			</div>
		</div>
	</div>
</div>
<!-- END:HERO-UNIT --> 