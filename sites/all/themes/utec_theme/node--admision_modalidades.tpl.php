<?php
	$titulo = $node->title;   
	$cuerpo = $node->body['und']['0']['value']; 
	$modalidades = $node->field_texo['und']; 
	$clases = $node->field_nombre['und']; 
	$links = $node->field_link['und'];
	$field_link_a_formulario_es = $node->field_link_a_formulario_es['und']['0']['value'];  
	$field_link_formulario_en = $node->field_link_formulario_en['und']['0']['value'];  
?> 

<div class="container-sm">
		<h1 class="light"><?php print $titulo; ?></h1>
	<div class="separator-gray separator-lg"></div>
	<ul class="grid-list grid-list-3 grid-list-1-xs grid-list-hover size sm">
	<?php foreach ($modalidades as $key => $modalidad) : ?>	
		<li data-href="<?php if ($language->language!="es") {print '/'.$language->language;} print '/'.$links[$key]['value']; ?>" class="atm-blog text-gray-dark text-hover-white">
			<div>
				<a href="<?php if ($language->language!="es") {print '/'.$language->language;} print '/'.$links[$key]['value']; ?>">
					<h2 class="thin h4 lead lh-lg"><?php print $modalidad['value']; ?></h2>
				</a>
				<div class="size lg">
					<i class="<?php print $clases[$key]['value']; ?>"></i>
				</div>
			</div>
		</li>
	<?php endforeach; ?>
	</ul>
	<h3><?php print $cuerpo ?></h3>
	<a href="<?php print $field_link_a_formulario_es ?>" class="btn btn-primary btn-lg uppercase see-more mvp-7"><?php print t('See results here.') ?></a>
</div>


