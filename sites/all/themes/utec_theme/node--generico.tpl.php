<?php 
// $video_name = $node->field_video['und']['0']['filename'];

$titulo = $node->title;   
$field_descripcion_corta_generica = $node->field_descripcion_corta_generica['und']['0']['value'];
$field_contenido_generica = $node->field_contenido_generica['und']['0']['value'];


?>
<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<div>
		<?php print $field_contenido_generica ?>
	</div>
</div>


