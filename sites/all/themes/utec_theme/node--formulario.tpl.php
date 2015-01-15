<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;
	$cuerpo = $node->body['und']['0']['value'];
	$mencion = $node->field_mencion['und']['0']['value'];
	$electivo = $node->field_electivo['und'];
	
	// print_r($node);
?>

<div class="container-sm">
	<h1 class="light">Formulario</h1>
	<div clsass="separator-gray separator-lg"></div>
	<h3 class="thin text-gray pt-21 pb-56">Datos del participante:</h3>
</div>
<div class="container-sm form-custom">
	<form action="/sites/themes/utec_theme/registro.php" class="mb-ch-28" data-submit="Formulario de inscripcion">
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only">Nombres</label>
					<input type="text" class="form-control" placeholder="Nombres" name="nombres" id="nombres">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only">Apellidos</label>
					<input type="text" class="form-control" placeholder="Apellidos" name="apellidos" id="apellidos">
				</div>
			</div>		
			<div class="row">
				<div class="col-sm-7 form-group">
					<label for="" class="sr-only">E-Mail</label>
					<input type="email" class="form-control" placeholder="e-mail" name="email" name="email" id="email">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only">Tel&eacute;fono</label>
					<input type="text" class="form-control" placeholder="Telefono" name="telefono" id="telefono">
				</div>
			</div>			
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only">Carrera de interés</label>
					<select name="carrera" id="carrera" class="form-control select-override">
						<option value="Carrera de interés">Carrera de interés</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only">Consulta</label>
					<textarea class="form-control" placeholder="Consulta" name="consulta" id="consulta"></textarea>
				</div>
			</div>

			<div class="text-right">
				<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
			</div>
	</form>						
</div>
<div class="container pt-42">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<p class="text-gray">De conformidad con los artículos lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut at, veritatis tempore ipsa voluptate neque lorem exercitationem impedit aperiam? Veritatis recusandae dolorem, ullam repellendus minus expedita consequatur doloremque iusto fugiat maxime!</p>
	</div>
	<div class="col-md-1"></div>
</div>