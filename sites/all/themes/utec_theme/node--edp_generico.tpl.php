<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/edp-generico/'); ?>

<?php $titulo = $node->title; ?>   
<?php $body = $node->body['und']['0']['value']; ?>
<?php $field_fotos_edp_generico = $node->field_fotos_edp_generico['und']['0']['filename']; ?>

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


<?php //if (($end!='diplomados') AND ($end!='cursos-adhoc')) { ?>
<div class="container-sm form-custom mt-35"> 
	<form action="/registro.php" data-submit="Formulario de inscripcion" method="post" id="formRegistro" name="formRegistro">
		<input type="hidden" name="origen" value="<?php print $title; ?>">
		<input type="hidden" name="idioma" value="<?php print $idioma; ?>">		

		<h3><?php print t("Contact EDP") ?></h3>	
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Name") ?></label>
				<input id="nombres" name="nombres" type="text" class="form-control" placeholder="<?php print t("Name") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Middle Name") ?></label>
				<input id="apellidop" name="apellidop" type="text" class="form-control" placeholder="<?php print t("Middle Name") ?>">
			</div>

		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Last Name") ?></label>
				<input id="apellidom" name="apellidom" type="text" class="form-control" placeholder="<?php print t("Last Name") ?>">
			</div>			
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t('E-Mail') ?></label>
				<input id="email" name="email" type="text" class="form-control" placeholder="<?php print t('E-Mail') ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t('Phone') ?></label>
				<input id="telefono" name="telefono" type="text" class="form-control" placeholder="<?php print t('Phone') ?>">
			</div>
		</div>		
		<div class="row">
			<div class="form-group col-sm-12">
				<label for="" class="sr-only"><?php print t('Message') ?></label>
				<textarea class="form-control" placeholder="<?php print t('Message') ?>" name="consulta" id="consulta"></textarea>
			</div>
		</div>
		<div class="row errordiv">
			<div id="errordiv" class="col-sm-12 form-group"></div>			
		</div>		
		<div class="text-right">
			<button type="submit" class="btn btn-primary btn-lg" onclick="contacto_general();">Enviar</button>
		</div>
	</form>							
</div>	
<?php //} ?>
