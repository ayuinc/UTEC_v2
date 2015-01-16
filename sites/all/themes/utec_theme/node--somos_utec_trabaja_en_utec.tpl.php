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

<div class="container-sm form-custom"> 
	<h3>Aplica a UTEC</h3>
	<form action="" data-submit="Formulario de inscripcion">
		<input type="hidden" name="origen" value="<?php print $title ?>">
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Nombres</label>
				<input id="nombres" type="text" class="form-control" placeholder="Nombres">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Apellidos Paterno</label>
				<input id="apellidop" type="text" class="form-control" placeholder="Apellido paterno">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Apellido Materno</label>
				<input id="apellidom" type="text" class="form-control" placeholder="Apellido materno">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Email</label>
				<input id="email" type="text" class="form-control" placeholder="Email">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Teléfono</label>
				<input id="telefono" type="text" class="form-control" placeholder="Teléfono">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Colegio</label>
				<input id="colegio" type="text" class="form-control" placeholder="Colegio">
			</div>
		</div>
		<div class="form-group">
			<label for="" class="sr-only">Consulta</label>
			<textarea id="consulta" rows="3" class="form-control" placeholder="Escribe tu consulta"></textarea>
		</div>
		<div class="form-group">
			<label>Adjunta un documento</label>
			<input id="documento" type="file" class="form-control" placeholder="Colegio">
		</div>
		<div class="text-right">
			<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
		</div>
	</form>						
	<p class="text-gray pt-42 pb-56">De conformidad con los artículos lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut at, veritatis tempore ipsa voluptate neque lorem exercitationem impedit aperiam? Veritatis recusandae dolorem, ullam repellendus minus expedita consequatur doloremque iusto fugiat maxime!</p>
</div>	

