<?php

 $title = $node->title;  
 $field_introduccion_generico_edp = $node->field_introduccion_generico_edp['und']['0']['value'];
 $field_contenido_generico_edp = $node->field_contenido_generico_edp['und']['0']['value'];
 $field_foto_generico_edp = $node->field_image['und']['0']['uri'];

 $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 $end = end((explode('/', $url))); 
 ?>

<div class="container-sm mb-35">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<p class="lead text-gray"><?php print $field_introduccion_generico_edp ?></p>
	<?php if ($field_foto_generico_edp!='') { ?>
		<img src="<?php print image_style_url($image_style, $field_foto_generico_edp); ?>" class="img-responsive mb-35" alt="<?php print $title ?>">
	<?php } ?>
	<?php print $field_contenido_generico_edp ?>
</div>