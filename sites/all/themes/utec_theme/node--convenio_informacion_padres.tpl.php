<?php 
	
	$titulo = $node->title;   
  $descripcion = $node->body['und']['0']['value'];
	$contenido = $node->field_contenido['und']['0']['value'];
	$imagen = $node->field_image['und']['0']['uri'];
  // kpr($node->field_image);

?>

<div class="container-sm section-scroll-content  pt-21 pb-63" id="parents">
  <div class="mh-21">
    <h2 class="light"><?php print $titulo ?></h2>
    <div class="separator-gray separator-sm"></div>
    <div class="p-ch-gray-dark">
      <div class="pv-ch-7">
        <?php print $descripcion ?>   
      </div>
      <!-- Wrapper for slides -->
      <?php if ($imagen): ?>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="banner banner-label-bottom mb-7 ml-0">
            <div class="banner-pic mb-28 img-student-utec" style="background-image: url(<?php print image_style_url($image_style, $imagen); ?>);">
            </div>
          </div>
        </div>
      </div>
      <?php endif ?>
      <div class="pv-ch-7">
        <?php print $contenido ?>   
      </div>
    </div>
    <a class="scroll-down scroll-down-sq size lg" href="#internship" rel="nofollow"><i class="icon-arrows-down"></i></a>
  </div>
</div>