<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

  $titulo = $node->title;
  $cuerpo = $node->body['und']['0']['value'];
  $logo = $node->field_image['und']['0']['filename'];
  $banner = $node->field_banner['und']['0']['filename'];
  //$fids   = $node->field_convenio['und'];
  // print_r($node);
  
?>

<div class="container-sm">
  <h1 class="light"><?php print $titulo ?></h1>
  <div class="separator-gray separator-sm"></div>
  <?php if ($banner!='')  { ?>
  <img class="img-responsive" src="<?php print '/'.$pathfile.$banner ?>" alt="<?php print $titulo ?>">
  <?php } ?>
  <p><?php print $cuerpo ?></p>
</div>