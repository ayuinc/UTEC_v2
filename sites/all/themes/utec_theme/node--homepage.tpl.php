<?php $video_name = $node->field_video['und']['0']['filename']; ?>

<div class="hero-unit video-bg"> 
	<div class="bg-img-block bg-img-block-lg flex-middle">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<!--<h2 class="thin text-white lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit repellat dolorem alias minus accusamus.</h2>-->
				</div>
			</div>
		</div>
		<a class="scroll-down scroll-down-sq size lg" href="#sec-1" rel="nofollow">
			<i class="icon-arrows-down bg-primary text-white"></i>
		</a>
	</div>
	<video
		id="videocover"
		autoplay
		loop
		muted	
    class="video-js videocover vjs-default-skin"
    controls
    preload="auto">
    <source src="/sites/all/themes/utec_theme/assets/video/UTEC_home.webm" type='video/webm' />
    <source src="/sites/all/themes/utec_theme/assets/video/UTEC_home.mp4" type='video/mp4' />
    <source src="/sites/all/themes/utec_theme/assets/video/UTEC_home.ogg" type='video/ogg' />
    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
  </video>
  <div class="video-placeholder" style="background: url(http://104.131.4.19/sites/all/themes/utec_theme/assets/img/project-bg-1.jpg) no-repeat center top;"></div>
  <div class="overlay flex-middle">
  	<div class="container">
			<div class="row mt-70 pt-70">
				<div class="col-sm-8 col-sm-offset-2">
					<h1 class="thin text-white lead text-center">Descubre el Ingenio en Acción</h1>
					<h4 class="thin text-white text-center">- VIVE UTEC -</h4>
				</div>
			</div>
		</div>
  </div>
</div>