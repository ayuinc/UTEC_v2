<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

  $titulo = $node->title;
  $cuerpo = $node->body['und']['0']['value'];
  $logo = $node->field_image['und']['0']['value']['filename'];
  $banner = $node->field_banner['und']['0']['value']['filename'];
  //$fids   = $node->field_convenio['und'];
  // print_r($fids);
  
?>

<div class="container-sm">
  <h1 class="light"><?php print $titulo ?></h1>
  <div class="separator-gray separator-sm"></div>
  <img class="img-responsive" src="<?php print '/'.$pathfile.$banner ?>" alt="#">
  <h3><?php print $cuerpo ?></h3>
</div>