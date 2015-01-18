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
	<div>
		<h3><?php print t('Our philosophy') ?></h3>
		<p><?php print $field_su_filosofia ?></p>
		<img src="<?php print('/'.$pathfile.$field_su_foto)?>" class="img-responsive">
		<div>
			<h3><?php print t('University') ?></h3>
			<p><?php print $field_su_universidad ?></p>
		</div>
		<div>
			<h3><?php print t('Transcendence') ?></h3>
			<p><?php print $field_transcendencia ?></p>
		</div>
		<div>
			<h3><?php print t('Excellence') ?></h3>
			<p><?php print $field_excelencia ?></p>
		</div>
		<div>
			<h3><?php print t('Creativity') ?></h3>
			<p><?php print $field_su_creatividad ?></p>
		</div>
		<div>
			<h3><?php print t('Contact') ?></h3>
			<?php print $field_su_contacto ?>
		</div>
	</div>
</div>

<div class="container-sm form-custom"> 
	<h3><?php print t('Apply') ?></h3>
	<form action="/registro.php" data-submit="Formulario de inscripcion" method="post">
		<input type="hidden" name="origen" value="<?php print $title ?>">
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t('Name') ?></label>
				<input id="nombres" name="nombres" type="text" class="form-control" placeholder="<?php print t('Name') ?>">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t('Middle name') ?></label>
				<input id="apellidop" name="apellidop" type="text" class="form-control" placeholder="<?php print t('Middle name') ?>">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t('Last name') ?></label>
				<input id="apellidom" name="apellidom" type="text" class="form-control" placeholder="<?php print t('Last name') ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Email</label>
				<input id="email" name="email" type="text" class="form-control" placeholder="Email">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t('Phone') ?></label>
				<input id="telefono" name="telefono" type="text" class="form-control" placeholder="<?php print t('Phone') ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="" class="sr-only"><?php print t('Write a message') ?></label>
			<textarea id="consulta" name="consulta" rows="3" class="form-control" placeholder="<?php print t('Write a message') ?>"></textarea>
		</div>
		<div class="form-group">
			<label><?php print t('Attach a document') ?></label>
			<input id="documento" type="file" class="form-control" placeholder="<?php print t('Attach a document') ?>">
		</div>
		<div class="text-right">
			<button type="submit" class="btn btn-primary btn-lg"><?php print t('Send') ?></button>
		</div>
	</form>						
</div>	

