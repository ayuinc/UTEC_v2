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
	<h1 class="light"><?php print t('Inscripción Examen de Admisión') ?></h1>
	<div clsass="separator-gray separator-lg"></div>
	<h3 class="thin text-gray pt-21 pb-56"><?php  ?><?php print t('Applicant Information') ?></h3>
</div>
<div class="container-sm form-custom">
	<form action="/registro.php" class="mb-ch-28" data-submit="Formulario de inscripcion" method="post">
		<input type="hidden" name="origen" value="Inscripcion Examen">
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Nombres</label>
				<input  id="nombres" type="text" class="form-control" placeholder="Nombres">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Apellido paterno</label>
				<input  id="apellidop" type="text" class="form-control" placeholder="Apellido paterno">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Apellido materno</label>
				<input  id="apellidom" type="text" class="form-control" placeholder="Apellido materno">
			</div>
		</div>
		<div class="text-gray h3 thin">
			<label for="">Género:</label>
			<input  id="femenino" type="radio" checked name="genre"> Femenino
			<input  id="masculino" type="radio" name="genre"> Masculino
		</div>
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Carrera de interés</label>
				<select name="carrera" id="carreras" class="form-control select-override">
					<option value="Carrera de interés">Carrera de interés</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Documento</label>
				<select name="tipo-documento" id="tipo-documento" class="form-control select-override">
					<option value="Documento">Documento</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Documento</label>
				<input  id="documento" name="documento" type="text" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="">Lugar de nacimiento</label>
			</div>
			<div class="form-group col-sm-6">
				<select name="pais" id="pais" class="form-control select-override">
					<option value="País">País</option>
				</select>
			</div>
			<div class="form-group col-sm-6">
				<select name="ciudad" id="ciudad" class="form-control select-override">
					<option value="Ciudad">Ciudad</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="" class="block">Fecha de nacimiento</label>
			</div>
			<div class="form-group col-sm-4">
				<select name="dia" id="dia" class="form-control select-override">
					<option value="Día">Día</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="mes" id="mes" class="form-control select-override">
					<option value="Mes">Mes</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="ano" id="ano" class="form-control select-override">
					<option value="Año">Año</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="" class="block">Domicilio actual</label>
			</div>
			<div class="form-group col-sm-4">
				<select name="depto" id="depto" class="form-control select-override">
					<option value="Dpto">Dpto</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="provincia" id="provincia" class="form-control select-override">
					<option value="Provincia">Provincia</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="distrito" id="distrito" class="form-control select-override">
					<option value="Distrito">Distrito</option>
				</select>
			</div>
			<div class="col-sm-12 form-group">
				<label for="" class="sr-only">Dirección actual</label>
				<input  id="direccion-actual" name="direccion-actual" type="text" class="form-control" placeholder="Ingresa tu dirección actual">
			</div>
			<div class="col-sm-7 form-group">
				<input  id="email" name="email" type="email" class="form-control" placeholder="e-mail">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="" class="block">Teléfonos</label>
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Celular 1</label>
				<input  id="celular-1" name="celular-1" type="text" class="form-control" placeholder="Celular 1">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Celular 2</label>
				<input  id="celular-2" name="celular-2" type="text" class="form-control" placeholder="Celular 2">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Teléfono fijo</label>
				<input  id="telefono-fijo" name="telefono" type="text" class="form-control" placeholder="Teléfono fijo">
			</div>
		</div>
		<h3 class="light">Estudios</h3>
		<div class="row">
			<div class="col-sm-12"><label for="">Año que culminó los estudios secundarios o bachillerato</label></div>
			<div class="col-sm-3 form-group">
				<select name="ano-culminacion" id="ano-culminacion" class="form-control select-override">
					<option value="Año">Año</option>
				</select>
			</div>
			<div class="col-sm-9 form-group">
				<label for="" class="sr-only">Colegio de procedencia</label>
				<input  id="colegio-procedencia" name="colegio" type="text" class="form-control" placeholder="Colegio de procedencia">
			</div>
			<div class="form-group col-sm-4">
				<select name="estudios-dpto" id="estudios-dpto" class="form-control select-override">
					<option value="Dpto">Dpto</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="estudios-provincia" id="estudios-provincia" class="form-control select-override">
					<option value="Provincia">Provincia</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="estudios-distrito" id="estudios-distrito" class="form-control select-override">
					<option value="Distrito">Distrito</option>
				</select>
			</div>
			<div class="form-group col-sm-7">
				<select name="estudios-rendimiento" id="estudios-rendimiento" class="form-control select-override">
					<option value="Rendimiento académico">Rendimiento académico</option>
				</select>
			</div>
			<div class="col-sm-12 form-group text-gray h3 thin">
				<label for="">Es o ha sido estudiante de esta universidad:</label>
				<input  id="estudiante-si" type="radio" checked name="is-student"> Sí
				<input  id="estudiante-no" type="radio" name="is-student"> No
			</div>
		</div>
		<div class="text-right">
			<button  id="" type="submit" class="btn btn-primary btn-lg">Enviar</button>
		</div>
	</form>						
	<p class="text-gray">De conformidad con los artículos lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut at, veritatis tempore ipsa voluptate neque lorem exercitationem impedit aperiam? Veritatis recusandae dolorem, ullam repellendus minus expedita consequatur doloremque iusto fugiat maxime!</p>
</div>
<div class="container pt-42">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<p class="text-gray"><?php print t('De conformidad con los artículos lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut at, veritatis tempore ipsa voluptate neque lorem exercitationem impedit aperiam? Veritatis recusandae dolorem, ullam repellendus minus expedita consequatur doloremque iusto fugiat maxime!') ?></p>
	</div>
	<div class="col-md-1"></div>
</div>