<?php 
	
	$titulo = $node->title;   
  $titulos = $node->field_texo['und'];
  $contenido = $node->field_cuerpo['und'];
  $descripcion = $node->body['und']['0']['value'];
  $imagen1 = $node->field_image['und']['0']['uri'];
  $imagen2 = $node->field_imagen_mutliple_1['und']['0']['uri'];
  $imagen3 = $node->field_imagen_3['und']['0']['uri'];
  $imagen4 = $node->field_imagen_4['und']['0']['uri'];
  $imagen5 = $node->field_imagen_5['und']['0']['uri'];
	$imagen6 = $node->field_imagen_6['und']['0']['uri'];
  // kpr($node);
  
?>

<div class="container-sm section-scroll-content pt-28 pb-70" id="studyabroad">
  <h2 class="light mh-21"><?php print $titulo ?></h2>
  <div class="separator-gray separator-sm ml-21"></div>
  <div class="p-ch-gray-dark">
    <div class="pv-ch-7 mh-21">
      <?php print $descripcion ?>   
    </div> 
  </div>
  <div class="anchor-img-grid anchor-img-grid-1 ph-21" id="grid-six">
    <div class="col-md-4">
      <div class="anchor-block-4 grid-six-movil grid-1">    
        <div class="pic" style="background-image: url(<?php print image_style_url($image_style, $imagen1); ?>);"></div>
        <div class="overlay-grid-six" style="background-color: rgba(0,0,0,0.2); opacity: 1; padding: 14px;">
          <h5 class="bold text-title text-left mb-7 mt-56"><?php print $titulos['0']['value']; ?></h5>
          <div class="separator-white mt-7 separator-xs "></div>
          <h5 class="thin text-content text-left lh-1-xs"><?php print $contenido['0']['value']; ?></h5>
        </div>
      </div>
      <div class="anchor-block-4 grid-six-movil grid-3">    
        <div class="pic" style="background-image: url(<?php print image_style_url($image_style_3, $imagen3); ?>);"></div>
        <div class="overlay-grid-six" style="background-color: rgba(0,0,0,0.2); opacity: 1; padding: 14px;">
          <h5 class="bold text-title text-left mb-7 mt-70"><?php print $titulos['2']['value']; ?></h5>
          <div class="separator-white mt-7 separator-xs "></div>
          <h5 class="thin text-content text-left lh-1-xs"><?php print $contenido['2']['value']; ?> </h5>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="anchor-block-2 grid-six-movil grid-2">    
        <div class="pic" style="background-image: url(<?php print image_style_url($image_style_mul, $imagen2); ?>);"></div>
        <div class="overlay-grid-six" style="background-color: rgba(0,0,0,0.2); opacity: 1; padding: 14px;">
          <h5 class="bold text-title text-left mb-7 "><?php print $titulos['1']['value']; ?></h5>
          <div class="separator-white mt-7 separator-xs "></div>
          <h5 class="thin text-content text-left lh-1-xs"><?php print $contenido['1']['value']; ?></h5>
        </div>
      </div>
      <div class="anchor-block-3 grid-six-movil grid-1">    
        <div class="pic" style="background-image: url(<?php print image_style_url($image_style_4, $imagen4); ?>);"></div>
        <div class="overlay-grid-six" style="background-color: rgba(0,0,0,0.2); opacity: 1; padding: 14px;">
          <h5 class="bold text-title text-left mb-7 "><?php print $titulos['3']['value']; ?> </h5>
          <div class="separator-white mt-7 separator-xs "></div>
          <h5 class="thin text-content text-left lh-1-xs"><?php print $contenido['3']['value']; ?></h5>
        </div>
      </div>
      <div class="anchor-block-4 grid-six-movil grid-1">    
        <div class="pic" style="background-image: url(<?php print image_style_url($image_style_5, $imagen5); ?>);"></div>
        <div class="overlay-grid-six" style="background-color: rgba(0,0,0,0.2); opacity: 1; padding: 14px;">
          <h5 class="bold text-title text-left mb-7 "><?php print $titulos['4']['value']; ?></h5>
          <div class="separator-white mt-7 separator-xs "></div>
          <h5 class="thin text-content text-left lh-1-xs"><?php print $contenido['4']['value']; ?></h5>
        </div>
      </div>
      <div class="anchor-block-2 grid-six-movil grid-2" style="float: left;">    
        <div class="pic" style="background-image: url(<?php print image_style_url($image_style_6, $imagen6); ?>);"></div>
        <div class="overlay-grid-six" style="background-color: rgba(0,0,0,0.2); opacity: 1; padding: 14px;">
          <h5 class="bold text-title text-left mb-7 "><?php print $titulos['5']['value']; ?></h5>
          <div class="separator-white mt-7 separator-xs "></div>
          <h5 class="thin text-content text-left lh-1-xs"><?php print $contenido['5']['value']; ?> </h5>
        </div>
      </div>
    </div>   
  </div> 
  <a class="scroll-down scroll-down-sq size lg" href="#studyinutec" rel="nofollow"><i class="icon-arrows-down"></i></a>
</div>
        
  
