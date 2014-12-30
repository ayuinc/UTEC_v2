<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/trabaja-utec/'); ?>
<?php $title = $node->title; ?>  
<?php $field_su_filosofia = $node->field_su_filosofia['und']['0']['value']; ?>
<?php $field_su_foto = $node->field_su_foto['und']['0']['filename']; ?>
<?php $field_su_universidad = $node->field_su_universidad['und']['0']['value']; ?>
<?php $field_transcendencia = $node->field_transcendencia['und']['0']['value']; ?>
<?php $field_excelencia = $node->field_excelencia['und']['0']['value']; ?>
<?php $field_su_creatividad = $node->field_su_creatividad['und']['0']['value']; ?>
<?php $field_su_contacto = $node->field_su_contacto['und']['0']['value']; ?>

<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-sm"></div>
	<div class="pv-ch-21 lead-ch p-ch-gray">
		<h3>Nuestra filosofía</h3>
		<p><?php print $field_su_filosofia ?></p>
		<img src="<?php print('/'.$pathfile.$field_su_foto)?>" class="img-responsive">
		<div>
			<h3>Universalidad</h3>
			<p><?php print $field_su_universidad ?></p>
		</div>
		<div>
			<h3>Trascendencia</h3>
			<p><?php print $field_transcendencia ?></p>
		</div>
		<div>
			<h3>Excelencia</h3>
			<p><?php print $field_excelencia ?></p>
		</div>
		<div>
			<h3>Creatividad</h3>
			<p><?php print $field_su_creatividad ?></p>
		</div>
		<div>
			<h3>Contacto</h3>
			<?php print $field_su_contacto ?>
		</div>
	</div>
</div>

