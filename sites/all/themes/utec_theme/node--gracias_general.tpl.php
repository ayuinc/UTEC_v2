<?php $titulo = $node->title; ?>   
<?php $body = $node->body['und']['0']['value']; ?>


<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php print $body ?>	
</div>

