<?php 

	$theme_path = drupal_get_path('theme', 'utec_theme');
	die(print_r($node));
	$video_name = $node->field_video['und']['0']['filename'];

?>
<h1 class="lead medium mb-0"><span class="text-gray-darker">En la UTEC ingeniería es</span> <span class="text-gray">bienestar.</span></h1>
	<h4 class="lead mt-0 mb-42">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
	<div class="anchor-img-grid anchor-img-grid-1 grid-block row ml-0">
    <div class="col-sm-6">
      <a href="#" class="anchor-1">
        <img src="assets/img/anchor-img-grid-sq.png" />
        <div class="overlay-bg"></div>
        <div class="overlay-content">
          <div>
            <span class="text-top mb-0">Texto superior</span>
            <span class="text-bottom">Texto inferior</span>
          </div>
        </div>
      </a>
    </div>
    <div class="col-sm-6">
      <div class="clearfix">
        <a href="#" class="anchor-2">
          <img src="assets/img/anchor-img-grid-rect.png" />
          <div class="overlay-bg overlay-bg-rect"></div>
          <div class="overlay-content">
            <div>
              <span class="text-top mb-0">Texto superior</span>
              <span class="text-bottom">Texto inferior</span>
            </div>
          </div>
        </a>
      </div>
      <div class="clearfix">
        <div class="col-sm-6">
          <a href="#" class="anchor-3">
            <img src="assets/img/anchor-img-grid-sq-1.png" />
            <div class="overlay-bg"></div>
            <div class="overlay-content">
              <div>
                <span class="text-top mb-0">Texto superior</span>
                <span class="text-bottom">Texto inferior</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-6">
          <a href="#" class="anchor-4">
            <img src="assets/img/anchor-img-grid-sq-2.png" />
            <div class="overlay-bg"></div>
            <div class="overlay-content">
              <div>
                <span class="text-top mb-0">Texto superior</span>
                <span class="text-bottom">Texto inferior</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>          
  </div>