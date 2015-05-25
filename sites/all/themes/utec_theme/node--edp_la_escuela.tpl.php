<?php 

 $titulo = $node->title;   
 $body = $node->body['und']['0']['value'];
 $field_fotos = $node->field_image['und']['0']['uri']; 

 ?>


<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php if ($field_fotos!='') { ?>
		<img src="<?php print image_style_url($image_style, $field_fotos); ?>" class="img-responsive mb-35" alt="<?php print $title ?>">
	<?php } ?>
	<?php print $body ?>		
</div>

