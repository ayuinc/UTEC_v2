<?php $video_name = $node->field_video['und']['0']['filename']; ?>
<?php $imagen = $node->field_imagen['und']['0']['uri']; ?>


<div class="hero-unit video-bg "> 
	<!-- <div class="overlay"></div> -->
	<!-- <div class="bg-img-block bg-img-block-lg flex-middle">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h2 class="thin text-white lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit repellat dolorem alias minus accusamus.</h2>
				</div>
			</div>
		</div>
		<a class="scroll-down scroll-down-sq size lg" href="#sec-1" rel="nofollow">
			<i class="icon-arrows-down bg-primary text-white"></i>
		</a>
	</div> -->
	<?php if ($video_name != '') : ?>
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
	<?php endif; ?>
	<?php if ($imagen != '' and $video_name == '') : ?>
  <div class="home-image">
  	<img class="img-responsive" src="<?php print file_create_url($imagen); ?>" alt="<?php print $title ?>" />
  </div>
	<?php endif; ?>
  <div class="video-placeholder visible-xs-block" style="background-image: url('/sites/all/themes/utec_theme/assets/img/project-bg-1.JPG');"></div>
  <div class="overlay flex-middle-end text-center text-white">
  	<div class="container relative home-introduccion normalize-text pv-70">
		<h3 class="thin lead h1"><?php print t('UTEC, the open platform to innovate') ?></h3>
		<h4 class="thin pv-7 uppercase"><?php print t('- DISCOVER IT -') ?></h4>
	</div>
  </div>
  <a class="scroll-down scroll-down-sq size lg" href="#home-sec-1" rel="nofollow">
		<i class="icon-arrows-down bg-primary text-white"></i>
	</a>
</div>