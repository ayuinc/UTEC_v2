<?php 
	
	$titulo = $node->title;   
  $titulos = $node->field_texo['und'];
  $contenido = $node->field_cuerpo['und'];
  $imagen1 = $node->field_image['und']['0']['uri'];
  $imagen2 = $node->field_imagen_mutliple_1['und']['0']['uri'];
  $imagen3 = $node->field_imagen_3['und']['0']['uri'];
  $imagen4 = $node->field_imagen_4['und']['0']['uri'];
  $imagen5 = $node->field_imagen_5['und']['0']['uri'];
	$imagen6 = $node->field_imagen_6['und']['0']['uri'];
  kpr($node);

?>


<div class="row">
  <div class="col-md-4"><?php print image_style_url($image_style, $imagen1); ?></div>
  <div class="col-md-8"><?php print image_style_url($image_style_mul, $imagen2); ?></div>
</div>
<div class="row">
  <div class="col-md-4"><?php print image_style_url($image_style_3, $imagen3); ?></div>
  <div class="col-md-8">
    <div class="row">
      <div class="col-md-6"><?php print image_style_url($image_style_4, $imagen4); ?></div>
      <div class="col-md-6"><?php print image_style_url($image_style_5, $imagen5); ?></div>
    </div>
    <div class="row">
      <div class="col-md-12"><?php print image_style_url($image_style_6, $imagen6); ?></div>
    </div>
  </div>
</div>  