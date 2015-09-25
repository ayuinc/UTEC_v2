<?php 
	
	$titulo = $node->title;   
  $descripcion = $node->body['und']['0']['value'];
	$imagenes = $node->field_image['und'];
  // kpr($node->field_image);

?>

<div class="container-sm">
  <h2 class="light"><?php print $titulo ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="p-ch-gray-dark">
    <div class="pv-ch-7">
      <?php print $descripcion ?>   
    </div>
    <!-- Wrapper for slides -->
    <div class="row">
      <?php foreach ($$imagenes as $key => $imagen): ?>
      <div class="col-md-3">
        <div class="banner banner-label-bottom mb-7 ml-0">
          <div class="banner-pic" style="background-image: url(<?php print image_style_url($image_style, $imagen); ?>);">
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>  
  </div>
</div>