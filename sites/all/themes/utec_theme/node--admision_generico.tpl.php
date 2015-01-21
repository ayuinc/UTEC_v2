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

<div class="container-sm mb-35">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php if ($field_descripcion_corta_generica!='') { ?>
		<p class="lead"><?php print $field_descripcion_corta_generica ?></p>
	<?php } ?>
	<?php if ($field_foto_generica_admision!='') { ?>
		<img src="<?php print('/'.$pathfile.$field_foto_generica_admision)?>" class="img-responsive mb-35">
	<?php } ?>	
	<?php if ($field_contenido_generica!='') { ?>
		<?php if ($end=='primeros-puestos') { ?>
			<h3><?php print t('How to apply?') ?></h3>
		<?php } ?>
		<p class="lead text-gray mb-42"><?php print $field_contenido_generica ?></p>
	<?php } ?>	
</div>

<?php if (($end!='charlas-informativas') AND ($end!='informacion-economica') AND ($end!='orientacion-vocacional') AND ($end!='visita-utec') AND ($end!='eventos-utec') AND ($end!='events')) { ?>
<div class="container-sm form-custom mt-35"> 
	<h3><?php print t("For more information:") ?></h3>
	<form action="/registro.php" data-submit="Formulario de inscripcion" method="post">
		<input type="hidden" name="origen" value="<?php print $title ?>">
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t("Name") ?></label>
				<input id="nombres" name="nombres" type="text" class="form-control" placeholder="<?php print t("Name") ?>">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t("Middle Name") ?></label>
				<input id="apellidop" name="apellidop" type="text" class="form-control" placeholder="<?php print t("Middle Name") ?>">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t("Last Name") ?></label>
				<input id="apellidom" name="apellidom" type="text" class="form-control" placeholder="<?php print t("Last Name") ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t("Email") ?></label>
				<input id="email" name="email" type="text" class="form-control" placeholder="Email">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t('Phone') ?></label>
				<input id="telefono" name="telefono" type="text" class="form-control" placeholder="<?php print t('Phone') ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t('Path of Interest') ?></label>
				<select name="carrera" id="carrera" class="form-control select-override">
					<option value="Carrera de interés"><?php print t('Undergrad Program') ?></option>
			  	<option value="15970"><?php print t('Industrial Engineering') ?></option>
          <option value="14864"><?php print t('Mechanical Engineering') ?></option>
          <option value="15968"><?php print t('Energy Engineering') ?></option>
          <option value="15964"><?php print t('Electronic Engineering') ?></option>
          <option value="15966"><?php print t('Industrial and Chemical Engineering') ?></option>		            
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="" class="sr-only"><?php print t('Message') ?></label>
			<textarea id="consulta" name="consulta" rows="3" class="form-control" placeholder="<?php print t('Message') ?>"></textarea>
		</div>
		<div class="text-right">
			<button type="submit" class="btn btn-primary btn-lg"><?php print t('Send') ?></button>
		</div>
	</form>						
</div>	
<?php } ?>

<?php if (($end=='charlas-informativas') OR ($end=='visita-utec')) { ?>
<div class="container-sm">
	
	<?php if ($end=='visita-utec') { ?>
		<h3><?php print t('Sign up for a tour') ?></h1>
	<?php } else { ?>
		<h3><?php print t('Save a seat') ?></h1>
		<p><?php print t('Fill the form and we will contact you to reserve a seat.') ?></p>
	<?php } ?>
</div>
<div class="container-sm form-custom">
	<form action="/registro.php" data-submit="Formulario de inscripcion" method="post">
			<input type="hidden" name="origen" value="<?php print $title ?>">
			<div class="row">
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t('Name') ?></label>
					<input type="text" class="form-control" placeholder="<?php print t('Name') ?>" name="nombres" id="nombres">
				</div>
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t("Middle Name") ?></label>
					<input type="text" class="form-control" placeholder="<?php print t("Middle Name") ?>" name="apellidop" id="apellidop">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t("Last Name") ?></label>
					<input type="text" class="form-control" placeholder="<?php print t("Last Name") ?>" name="apellidom" id="apellidom">
				</div>
				<div class="col-sm-6 form-group">
					<label for="" class="sr-only"><?php print t('E-Mail') ?></label>
					<input type="email" class="form-control" placeholder="<?php print t('E-Mail') ?>" name="email" id="email">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t('Phone') ?></label>
					<input type="text" class="form-control" placeholder="<?php print t('Phone') ?>" name="telefono" id="telefono">
				</div>				
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t('Undergrad Program') ?></label>
					<select name="carrera" id="carrera" class="form-control select-override">
						<option value="Carrera de interés"><?php print t('Undergrad Program') ?></option>
					  	<option value="15970"><?php print t('Industrial Engineering') ?></option>
			            <option value="14864"><?php print t('Mechanical Engineering') ?></option>
			            <option value="15968"><?php print t('Energy Engineering') ?></option>
			            <option value="15964"><?php print t('Electronic Engineering') ?></option>
			            <option value="15966"><?php print t('Industrial and Chemical Engineering') ?></option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t('Message') ?></label>
					<textarea class="form-control" placeholder="<?php print t('Message') ?>" name="consulta" id="consulta"></textarea>
				</div>
			</div>
			<div class="text-left">
				<button type="submit" class="btn btn-primary btn-lg"><?php print t('Send') ?></button>
			</div>
	</form>						
</div>
<?php } ?>
