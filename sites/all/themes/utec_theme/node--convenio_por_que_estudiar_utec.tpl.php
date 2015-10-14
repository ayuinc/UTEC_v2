<?php 
	
	$titulo = $node->title;   
	$descripcion = $node->body['und']['0']['value'];
  $imagen = $node->field_image['und']['0']['uri'];
	$video_uri = $node->field_video['und']['0']['uri'];
  $video_url = file_create_url($video_uri);
  $video_name = $node->field_video['und']['0']['filename'];
  // kpr($node->field_image);

?>

<div class="container-sm section-scroll-content" id="studyinutec">
  <h2 class="light"><?php print $titulo ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="p-ch-gray-dark">
    <div class="pv-ch-7">
      <?php print $descripcion ?>   
    </div>
    <!-- Wrapper for slides -->
    <div>
      <?php if ($video_name != '') : ?>
      <video
        id="video"
        loop
        muted 
        class="video-js videocover vjs-default-skin"
        preload="auto">
          <source src="<?php print $video_url; ?>" type='video/webm' />
          <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
      </video>
      <!-- Video Controls -->
      <div id="video-controls">
        <button type="button" id="play-pause">Play</button>
      </div>
      <?php endif; ?>
      <?php if ($imagen != '' && $video_name == '') : ?>
      <div class="home-image">
        <img class="img-responsive" src="<?php print image_style_url($image_style, $imagen); ?>" alt="<?php print $title ?>" />
      </div>
      <?php endif; ?>
    </div>
  </div>
  <a class="scroll-down scroll-down-sq size lg" href="#course" rel="nofollow"><i class="icon-arrows-down"></i></a>
</div>

