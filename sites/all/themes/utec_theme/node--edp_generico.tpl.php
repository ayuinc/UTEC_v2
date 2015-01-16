<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/edp-generico/'); ?>

<?php $titulo = $node->title; ?>   
<?php $body = $node->body['und']['0']['value']; ?>

<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<?php $end = end((explode('/', $url))); ?>

<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php if ($field_fotos_edp_generico!='') { ?>
		<img src="<?php print('/'.$pathfile.$field_fotos_edp_generico)?>" class="img-responsive mb-35">
	<?php } ?>	
	<?php print $body ?>	
</div>


<?php if (($end!='diplomados')) { ?>
<div class="container-sm form-custom"> 
	<form action="" data-submit="Formulario de inscripcion">
		<input type="hidden" name="origen" value="<?php print $title ?>">
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only">Nombres</label>
				<input id="nombres" type="text" class="form-control" placeholder="Nombres">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only">Apellidoss</label>
				<input id="apellidop" type="text" class="form-control" placeholder="Apellidos">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only">Email</label>
				<input id="email" type="text" class="form-control" placeholder="Email">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only">Teléfono</label>
				<input id="telefono" type="text" class="form-control" placeholder="Teléfono">
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
</div>	
<?php } 
