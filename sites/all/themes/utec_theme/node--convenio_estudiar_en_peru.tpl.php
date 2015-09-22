<?php 
	
	$titulo = $node->title;   
	$descripcion = $node->body['und']['0']['value'];


	$imagen = $node->field_image['und']['0']['uri'];
  kpr($node->field_image);

?>
<div class="hero-unit"> <!-- HERO -->
  <div class="scroll-down-white section-scroll-content bg-img-block bg-img-block-lg" style="background-image: url(<?php print image_style_url($image_style, $field_carrera_imagen); ?>);">
    <div class="overlay flex-middle">
      <div class="container-sm hero-text" data-href="<?php print $carrera_link ?>">
        <h2 class="light text-white"><?php print $titulo ?> </h2>
        <div class="separator-gray separator-sm"></div>
        <hr class="hr-white">
        <div class="row mt-28">
          <div class="col-sm-3 hidden-xs">
            <div class="size xl">
              <i class="icon-carreras-que-es text-white"></i>
              <span class="btn btn-white btn-outline see-more bold mt-7"><?php print t('See more') ?></span>
            </div>
          </div>
          <div class="col-sm-9">
            <h2 class="lead thin text-white h5 mt-0"><?php print $carrera_txt ?></h2>
            <span class="btn btn-white btn-outline see-more bold mt-7 visible-xs-inline-block mt-14"><?php print t('See more') ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- END:Hero -->





