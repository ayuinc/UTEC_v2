<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

  $titulo = $node->title;
  $field_introduccion_ven_utec‎ = $node->field_introduccion_ven_utec‎['und']['0']['value'];
  // print_r($fids);
  
?>

<div class="container-sm">
  <h1 class="light"><?php print $titulo ?></h1>
  <div class="separator-gray separator-sm"></div>
  <h3><?php print $field_introduccion_ven_utec‎ ?></h3>
  <div class="pv-ch-42">
    <!--FORMULARIO-->
  </div>
</div>