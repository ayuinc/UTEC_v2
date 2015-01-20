<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$imagen = $node->field_banner['und']['0']['filename'];

	// print_r($node);
?>

<div class="hero-unit"> <!-- HERO -->
  <div data-section-scroll="Acerca de" id="acercade" class="section-scroll-content bg-img-block bg-img-block-lg section-scroll-0" style="background-image: url(/sites/default/files/<?php print $imagen; ?>);">
    <div class="overlay flex-middle">
    </div>
  </div>
</div>
