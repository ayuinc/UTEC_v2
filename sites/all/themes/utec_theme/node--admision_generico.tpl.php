<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/admision-generico/'); ?>

<?php $titulo = $node->title; ?>   
<?php $field_descripcion_corta_generica = $node->field_descripcion_corta_generica['und']['0']['value']; ?>
<?php $field_contenido_generica = $node->field_contenido_generica['und']['0']['value']; ?>
<?php $field_foto_generica_admision = $node->field_foto_generica_admision['und']['0']['filename']; ?>

<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<?php $end = end((explode('/', $url))); ?>

<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php if ($field_descripcion_corta_generica!='') { ?>
		<p class="lead"><?php print $field_descripcion_corta_generica ?></p>
	<?php } ?>
	<?php if ($field_foto_generica_admision!='') { ?>
		<img src="<?php print('/'.$pathfile.$field_foto_generica_admision)?>" class="img-responsive mb-35">
	<?php } ?>	
	<?php if ($field_contenido_generica!='') { ?>
		<p class="lead text-gray mb-42"><?php print $field_contenido_generica ?></p>
	<?php } ?>	
</div>

<?php if (($end!='charlas-informativas') AND ($end!='informacion-economica') AND ($end!='orientacion-vocacional') AND ($end!='orientacion-vocacional')) { ?>
<div class="container-sm form-custom mt-35"> 
	<h3>Modalidades de solicitud de admisión</h3>
	<form action="" data-submit="Formulario de inscripcion">
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
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only">Carrera de interés</label>
				<select name="" id="carrera" class="form-control select-override">
					<option value="Carrera de interés">Carrera de interés</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="" class="sr-only">Consulta</label>
			<textarea id="consulta" rows="3" class="form-control" placeholder="Escribe tu consulta"></textarea>
		</div>
		<div class="text-right">
			<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
		</div>
	</form>						
	<p class="text-gray pt-42">De conformidad con los artículos lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut at, veritatis tempore ipsa voluptate neque lorem exercitationem impedit aperiam? Veritatis recusandae dolorem, ullam repellendus minus expedita consequatur doloremque iusto fugiat maxime!</p>
</div>	
<?php } ?>

