<?php 
	
	$titulo = $node->title;   
	$descripcion = $node->body['und']['0']['value'];
	$imagen = $node->field_image['und']['0']['uri'];
  // kpr($node->field_image);

?>
<div class="hero-unit"> <!-- HERO -->
  <div class="scroll-down-white section-scroll-content bg-img-block bg-img-block-lg" style="background-image: url(<?php print image_style_url($image_style, $imagen); ?>);">
    <div class="overlay flex-middle">
      <div class="container-sm hero-text">
        <h2 class="light text-white"><?php print $titulo ?> </h2>
        <div class="separator-white separator-sm"></div>
        <div class="text-white light h4"><?php print $descripcion ?></div>
      </div>
    </div>
  </div>
</div> <!-- END:Hero -->