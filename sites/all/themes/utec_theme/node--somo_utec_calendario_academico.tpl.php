<?php

 $title = $node->title;  
 $field_titulo_del_evento = $node->field_titulo_del_evento['und']['0']['value'];
 $field_introduccion = $node->field_introduccion['und']['0']['value'];
 $field_foto = $node->field_image['und']['0']['uri'];
 $field_contenido = $node->field_contenido['und']['0']['value']; 
 
?>

<div class="container-sm">
	<h1 class="light"><?php print $title; ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php if ($field_titulo_del_evento!='') { ?>
	<div class="pv-42 lead-ch">
		<h3><?php print $field_titulo_del_evento ?></h3>
	</div>
	<?php } ?>
	<?php if ($field_foto!='') { ?>
	<div>
		<img src="<?php print image_style_url($image_style, $field_foto); ?>" class="img-responsive" alt="<?php print t('Academic Calendar') ?>">
	</div>
	<?php } ?>
	<div class="lead-ch p-ch-gray">
		<?php print $field_introduccion ?>
		<?php if ($field_contenido!='') { ?>
		<?php print $field_contenido ?>
		<?php } ?>
	</div>
	<div class="pv-42 lead-ch">

	</div>
</div>

