<?php 

  $titulo = $node->title;
  $cuerpo = $node->body['und']['0']['value'];
  $logo = $node->field_image['und']['0']['filename'];
  $banner = $node->field_image_2['und']['0']['uri'];
  
?>

<div class="container-sm">
  <h1 class="light"><?php print $titulo ?></h1>
  <div class="separator-gray separator-sm"></div>
  <?php if ($banner!='')  { ?>
  <img class="img-responsive" src="<?php print image_style_url($image_style_2, $banner); ?>" alt="<?php print $titulo ?>">
  <?php } ?>
  <p><?php print $cuerpo ?></p>
</div>