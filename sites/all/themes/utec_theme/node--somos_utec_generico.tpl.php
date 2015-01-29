<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/somos-utec-generico/'); ?>

<?php $title = $node->title; ?>  
<?php $field_introduccion_su_generico = $node->field_introduccion_su_generico['und']['0']['value']; ?>
<?php $field_contenido_su_generico = $node->field_contenido_su_generico['und']['0']['value']; ?>
<?php $field_foto_su_generico = $node->field_foto_su_generico['und']['0']['filename']; ?>

<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<?php $end = end((explode('/', $url))); ?>

<div class="container-sm mb-35">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<p class="lead text-gray"><?php print $field_introduccion_su_generico ?></p>
	<?php if ($field_foto_su_generico!='') { ?>
		<img src="<?php print('/'.$pathfile.$field_foto_su_generico)?>" class="img-responsive mb-35" alt="<?php print $title ?>">
	<?php } ?>
	<?php print $field_contenido_su_generico ?>
	
	<!--SOLO PARA RESPALDO-->
	<?php //if ($end == 'respaldo') { ?>
	<!--<ul class="grid-list grid-list-2 grid-list-hover">
		<li data-href="/somos-utec/consejo-directivo">
			<div>
				<h3 class="thin lead h4">Consejo directivo</h3>
			</div>
		</li>
		<li data-href="/convenios">
			<div>
				<h3 class="thin lead h4">Gestión educativa interinstitucional</h3>
			</div>
		</li>
	</ul>-->
	<?php //} ?>
</div>