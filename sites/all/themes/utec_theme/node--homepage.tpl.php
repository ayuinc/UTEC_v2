<?php 

	$video_name = $node->field_video['und']['0']['filename']; 
	$imagen = $node->field_image['und']['0']['uri']; 
	$link = $node->field_link['und']['0']['value'];
	$texto1 = $node->field_texo['und']['0']['value'];
	$texto2 = $node->field_texo['und']['1']['value'];

?>

<div class="hero-unit video-bg ">
<?php print_r($video_name); ?> 	
<?php print_r($node->field_video); ?> 	
	  <div>
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
			<?php if ($imagen != '' && $video_name == '') : ?>
		  <div class="home-image">
		  	<a href="<?php print $link; ?>" target="_blank">
			  	<img class="img-responsive" src="<?php print image_style_url($image_style, $imagen); ?>" alt="<?php print $title ?>" />
		  	</a>
		  </div>
			<?php endif; ?>
		  <div class="video-placeholder visible-xs-block" style="background-image: url('/sites/all/themes/utec_theme/assets/img/project-bg-1.JPG');"></div>
		  <?php if ($link != '') : ?>
		  <a href="<?php print $link; ?>" target="_blank" class="overlay flex-middle-end text-center text-white">
		  	<div class="container relative home-introduccion normalize-text pv-70">
					<!-- <h3 class="thin lead h1"><?php //print t('UTEC, the open platform to innovate') ?></h3>
					<h4 class="thin pv-7 uppercase"><?php //print t('- DISCOVER IT -') ?></h4> -->
					<h3 class="thin lead h1"><?php print $texto1; ?></h3>
					<h4 class="thin pv-7 uppercase"><?php print $texto2; ?></h4>
				</div>
		  </a>
			<?php else : ?>
			<div class="overlay flex-middle-end text-center text-white">
		  	<div class="container relative home-introduccion normalize-text pv-70">
					<!-- <h3 class="thin lead h1"><?php //print t('UTEC, the open platform to innovate') ?></h3>
					<h4 class="thin pv-7 uppercase"><?php //print t('- DISCOVER IT -') ?></h4> -->
					<h3 class="thin lead h1"><?php print $texto1; ?></h3>
					<h4 class="thin pv-7 uppercase"><?php print $texto2; ?></h4>
				</div>
		  </div>
		  <?php endif; ?>
  	</div>
  
  <a class="scroll-down scroll-down-sq size lg" href="#home-sec-1" rel="nofollow">
		<i class="icon-arrows-down bg-primary text-white"></i>
	</a>
</div>