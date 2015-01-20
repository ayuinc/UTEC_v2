<?php 
  $titulo = $node->title;
  $field_introduccion_ven_utec‎ = $node->field_introduccion_ven_utec‎['und']['0']['value'];
?>

<div class="container-sm">
  <h1 class="light"><?php print $titulo ?></h1>
  <div class="separator-gray separator-sm"></div>
  <p><?php print $field_introduccion_ven_utec‎ ?></p>
</div>

<div class="container-sm">
	<h3><?php print t('Fill the form') ?></h1>
	<p><?php print t('Applicant Information') ?></p>
</div>
<div class="container-sm form-custom">
	<form action="/registro.php" data-submit="Formulario de inscripcion" method="post">
			<input type="hidden" name="origen" value="<?php print $title ?>">
			<div class="row">
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t('Names') ?></label>
					<input type="text" class="form-control" placeholder="Nombres" name="nombres" id="nombres">
				</div>
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t('Last Name') ?></label>
					<input type="text" class="form-control" placeholder="Apellidos" name="apellidop" id="apellidop">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t('Last Name') ?></label>
					<input type="text" class="form-control" placeholder="Apellidos" name="apellidom" id="apellidom">
				</div>				
				<div class="col-sm-6 form-group">
					<label for="" class="sr-only"><?php print t('E-Mail') ?></label>
					<input type="email" class="form-control" placeholder="e-mail" name="email" id="email">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t('Phone') ?></label>
					<input type="text" class="form-control" placeholder="Telefono" name="telefono" id="telefono">
				</div>
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t('Undergrad Program') ?></label>
					<select name="carrera" id="carrera" class="form-control select-override">
						<option value="Carrera de interés"><?php print t('Undergrad Program') ?></option>
					  <option value="15970">Ingeniería Industrial</option>
            <option value="14864">Ingeniería Mecánica</option>
            <option value="15968">Ingeniería de la Energía</option>
            <option value="15964">Ingeniería Electrónica</option>
            <option value="15966">Ingeniería Química Industrial</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t('Check') ?></label>
					<textarea class="form-control" placeholder="Consulta" name="consulta" id="consulta"></textarea>
				</div>
			</div>
			<div class="text-left">
				<button type="submit" class="btn btn-primary btn-lg"><?php print t('Send') ?></button>
			</div>
	</form>						
	<p class="text-gray pt-42">De conformidad con los artículos lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut at, veritatis tempore ipsa voluptate neque lorem exercitationem impedit aperiam? Veritatis recusandae dolorem, ullam repellendus minus expedita consequatur doloremque iusto fugiat maxime!</p>
</div>