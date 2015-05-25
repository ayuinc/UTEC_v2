<?php 

	$titulo = $node->title;
	$cuerpo = $node->body['und']['0']['value'];
	$mencion = $node->field_mencion['und']['0']['value'];
	$electivo = $node->field_electivo['und'];

?>

<div class="container-sm">
	<h1 class="light"><?php print t('Form') ?></h1>
	<div clsass="separator-gray separator-lg"></div>
	<h3 class="thin text-gray pt-21 pb-56"><?php  ?><?php print t('Applicant Information') ?></h3>
</div>
<div class="container-sm form-custom">
	<form action="/registro.php" data-submit="Formulario de inscripcion" method="post">
			<input type="hidden" name="origen" value="<?php print $title ?>">
			<input type="hidden" name="origen2" value="<?php print $title ?>">
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only"><?php print t('Names') ?></label>
					<input type="text" class="form-control" placeholder="<?php print t('Names') ?>" name="nombres" id="nombres">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only"><?php print t('Last Name') ?></label>
					<input type="text" class="form-control" placeholder="<?php print t('Last Name') ?>" name="apellidop" id="apellidop">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7 form-group">
					<label for="" class="sr-only"><?php print t('E-Mail') ?></label>
					<input type="email" class="form-control" placeholder="<?php print t('E-Mail') ?>" name="email" id="email">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only"><?php print t('Phone') ?></label>
					<input type="text" class="form-control" placeholder="<?php print t('Phone') ?>" name="telefono" id="telefono">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only"><?php print t('Undergrad Program') ?></label>
					<select name="carrera" id="carrera" class="form-control select-override">
						<option value="Carrera de interés"><?php print t('Undergrad Program') ?></option>
					  <option value="15970"><?php print t('Industrial Engineering') ?></option>
            <option value="14864"><?php print t('Industrial Mechanical') ?></option>
            <option value="15968"><?php print t('Energy Engineering') ?></option>
            <option value="15964"><?php print t('Electronic Engineering') ?></option>
            <option value="15966"><?php print t('Industrial Chemical Engineering') ?></option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only"><?php print t('Check') ?></label>
					<textarea class="form-control" placeholder="Consulta" name="<?php print t('Check') ?>" id="consulta"></textarea>
				</div>
			</div>

			<div class="text-right">
				<button type="submit" class="btn btn-primary btn-lg" onclik="formulario_de_aplicacion()"><?php print t('Send') ?></button>
			</div>
	</form>						
</div>
