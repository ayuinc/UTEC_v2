<?php 

	$titulo = $node->title;   
	$titulo_usuario = $node->field_titulo_gracias['und']['0']['value'];
	$body = $node->body['und']['0']['value']; 

?>

<div class="container-sm mb-56">
	<h1 class="light"><?php print $titulo_usuario ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php print $body ?>	
</div>

