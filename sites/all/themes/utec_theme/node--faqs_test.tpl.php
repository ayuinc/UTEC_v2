<?php

$titulo = $node->title;   
$carrera_txt = $node->body['und']['0']['value'];
$carrera_link = $node->field_carrera_link['und']['0']['value'];
$malla_titulo = $node->field_malla_curricular_titulo['und']['0']['value'];
$malla_txt = $node->field_malla_curricular_body['und']['0']['value'];
$malla_link = $node->field_malla_curricular_link ['und']['0']['value'];
$menciones_titulo = $node->field_menciones_titulo  ['und']['0']['value'];
$menciones_txt = $node->field_menciones_body['und']['0']['value'];
$menciones_link = $node->field_menciones_link  ['und']['0']['value'];
$profesor_titulo = $node->field_profesor['und']['0']['value'];
$profesor_txt = $node->field_profesor_texto['und']['0']['value'];
$profesor_link = $node->field_profesor_link ['und']['0']['value'];
$perfil_txt = $node->field_perfil_egresado_texto['und']['0']['value'];
$perfil_link = $node->field_perfil_egresado_link['und']['0']['value'];

?>
<div class="container-sm">
	<h1 class="light"><?php print t('Frequently Asked Questions') ?></h1>
	<div class="separator-gray separator-lg"></div>
	<div class="list-custom pv-42 lead-ch p-ch-gray">
	<ul>
		<li>
			<h5><?php print t('Where is the campus located?') ?></h5>
			<p><?php print t('Currenty, classes are held in Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste mollitia quibusdam esse enim recusandae labore eos magni saepe explicabo, possimus a, quae dolor, adipisci minus ipsum corporis harum neque at.') ?></p>
		</li>
		<li>
			<h5><?php print t('When will the campus located in Barranco be ready?') ?></h5>
			<p><?php print t('Currenty, classes are held in Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste mollitia quibusdam esse enim recusandae labore eos magni saepe explicabo, possimus a, quae dolor, adipisci minus ipsum corporis harum neque at.') ?></p>
		</li>
	</ul>
	</div>
</div>
