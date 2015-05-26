<?php

	$titulo = $fields['title']->content;
	$sub_titulo = $fields['field_subtitulo']->content;
	$imagen = $fields['field_image']->content;
	$path = $fields['path']->content;

?>
<li data-href="<?php print $path; ?>" class="ban-titulo">
	<div>
		<?php if ($imagen == '') :?>
			<img src="<?php print('/'.$pathfile)?>img.png" alt="<?php print $titulo; ?>" class="img-responsive">
		<?php else :?>
			<img src="<?php print($imagen)?>" alt="<?php print $titulo; ?>" class="img-responsive">
		<?php endif; ?>	
	</div>
	<div>
		<h2 class="bold text-gray"><a href="<?php print $path; ?>" class="banner-titulo"><?php print $titulo ?></a></h2>
		<p><?php print $sub_titulo ?></p>
	</div>
</li>








