<?php 

	$titulo = $node->title;	 		
	$cuerpo = $node->body['und']['0']['value'];
	$pdf = $node->field_archivo['und']['0']['filename'];

?>
<div class="container-sm">
	<h1 class="light"><?php print $titulo ?></h1>
	<div class="separator-gray separator-sm"></div>
	<div class="pv-ch-7 p-ch-gray">
		<p><?php print $cuerpo ?></p>
	</div>
	<?php if ($pdf) :?>
	<div class="pv-ch-7 p-ch-gray">
		<p><?php print t('See PDF:') ?></p>
		<p><a href="<?php print('/'.$pathfile.$pdf); ?>"><?php print $pdf ?></a></p>
	</div>
	<?php endif ?>
</div>
