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

<div class="container-sm section-scroll-content" id="studyabroad">
  <h2 class="light"><?php print $titulo ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="p-ch-gray-dark">
    <div class="pv-ch-7">
      <?php print $descripcion ?>   
    </div> 
  </div>
  <div class="anchor-img-grid anchor-img-grid-1 ph-21">
    <div class="col-md-4">
      <div class="anchor-block-4" style="width: 245px; height: 242px;">    
        <div class="pic" style="background-image: url(<?php print image_style_url($image_style, $imagen1); ?>);"></div>
        <div class="overlay" style="background-color: rgba(0,0,0,0.50); opacity: 1; padding: 14px;">
          <h5 class="medium"><?php print $titulos['0']['value']; ?></h5>
          <h5><?php print $contenido['0']['value']; ?></h5>
        </div>
      </div>
      <div class="anchor-block-4" style="width: 245px; height: 484px;">    
        <div class="pic" style="background-image: url(<?php print image_style_url($image_style_3, $imagen3); ?>);"></div>
        <div class="overlay" style="background-color: rgba(0,0,0,0.50); opacity: 1; padding: 14px;">
          <h5 class="medium"><?php print $titulos['2']['value']; ?></h5>
          <h5><?php print $contenido['2']['value']; ?> </h5>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="anchor-block-2" style="width: 487px; height: 242px;">    
        <div class="pic" style="background-image: url(<?php print image_style_url($image_style_mul, $imagen2); ?>);"></div>
        <div class="overlay" style="background-color: rgba(0,0,0,0.50); opacity: 1; padding: 14px;">
          <h5 class="medium"><?php print $titulos['1']['value']; ?></h5>
          <h5><?php print $contenido['1']['value']; ?></h5>
        </div>
      </div>
      <div class="anchor-block-3" style="width: 243px; height: 242px;">    
        <div class="pic" style="background-image: url(<?php print image_style_url($image_style_4, $imagen4); ?>);"></div>
        <div class="overlay" style="background-color: rgba(0,0,0,0.50); opacity: 1; padding: 14px;">
          <h5 class="medium"><?php print $titulos['3']['value']; ?> s</h5>
          <h5><?php print $contenido['3']['value']; ?></h5>
        </div>
      </div>
      <div class="anchor-block-4" style="width: 243px; height: 242px;">    
        <div class="pic" style="background-image: url(<?php print image_style_url($image_style_5, $imagen5); ?>);"></div>
        <div class="overlay" style="background-color: rgba(0,0,0,0.50); opacity: 1; padding: 14px;">
          <h5 class="medium"><?php print $titulos['4']['value']; ?></h5>
          <h5><?php print $contenido['4']['value']; ?></h5>
        </div>
      </div>
      <div class="anchor-block-2" style=" float: left; width: 487px; height: 242px;">    
        <div class="pic" style="background-image: url(<?php print image_style_url($image_style_6, $imagen6); ?>);"></div>
        <div class="overlay" style="background-color: rgba(0,0,0,0.50); opacity: 1; padding: 14px;">
          <h5 class="medium"><?php print $titulos['5']['value']; ?></h5>
          <h5><?php print $contenido['5']['value']; ?> </h5>
        </div>
      </div>
    </div>   
  </div> 

  <!-- PRUEBA TABS -->

  

  <a class="scroll-down scroll-down-sq size lg" href="#studyinutec" rel="nofollow"><i class="icon-arrows-down"></i></a>
</div>
        
  
