<?php 

  $titulo = $node->title;
  $titulo_usuario = $node->field_titulo_usuario['und']['0']['value'];
  $cuerpo = $node->body['und']['0']['value'];
  $mencion = $node->field_mencion['und']['0']['value'];
  $electivo = $node->field_electivo['und'];
  $unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                              'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                              'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                              'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                              'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
  $titulo = strtr( $titulo, $unwanted_array );
?> 

<div class="container-sm mb-14">
  <h1 class="light"><?php print $title ?></h1>
  <div class="separator-gray separator-lg"></div>
  <?php print $cuerpo; ?>
</div>

<?php if ($titulo_usuario): ?>
<div class="container-sm">
  <h1 class="light"><?php print $titulo_usuario; ?></h1>
  <div clsass="separator-gray separator-lg"></div>
  <p class="lead"></p>
</div>
<?php endif; ?>

<div class="container-sm form-custom">
<?php 
  // Renderizar bloque
  $blockObject = block_load('netsuite_form_builder', 'information_request_university');
  $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
  print drupal_render($block);
?>
</div>
