<?php 
	
	$titulo = $node->title;   
	$descripcion = $node->body['und']['0']['value'];
	$imagen = $node->field_image['und']['0']['uri'];
  // kpr($node->field_image);

?>

<div class="container-sm" id="studentlife">
  <h2 class="light"><?php print $titulo ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="p-ch-gray-dark">
    <div class="pv-ch-7">
      <?php print $descripcion ?>   
    </div>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="banner banner-label-bottom mb-7 ml-0">
          <div class="banner-pic" style="background-image: url(<?php print image_style_url($image_style, $imagen); ?>);">
          </div>
        </div>
      </div>
    </div>
    <!-- Controls --> 
  </div>
  <a class="scroll-down scroll-down-sq size lg" href="#testimonies" rel="nofollow"><i class="icon-arrows-down"></i></a>
</div>