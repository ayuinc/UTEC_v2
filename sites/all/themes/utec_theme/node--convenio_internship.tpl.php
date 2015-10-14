<?php 
	
	$titulo = $node->title;   
  $descripcion = $node->body['und']['0']['value'];
	$imagenes = $node->field_image['und'];
  // kpr($node->field_image);

?>

<div class="container-sm section-scroll-content" id="internship">
  <h2 class="light"><?php print $titulo ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="p-ch-gray-dark">
    <div class="pv-ch-7">
      <?php print $descripcion ?>   
    </div>
    <!-- Wrapper for slides -->
    <div class="row">
      <?php foreach ($imagenes as $key => $imagen): ?>
      <?php if ($imagen): ?>
      <div class="col-md-3">
        <div class="banner banner-label-bottom mb-28 ml-0">
          <div class="banner-pic" style="background-image: url(<?php print image_style_url($image_style, $imagen['uri']); ?>); border: #ddd 1px solid; min-height: 250px !important; ">
          </div>
        </div>
      </div>
      <?php endif ?>
      <?php endforeach ?>
    </div>  
  </div>
</div>