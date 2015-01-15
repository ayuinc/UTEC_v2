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
	<form action="" class="mb-ch-28" data-submit="Formulario de inscripcion">
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only">Nombres</label>
				<input type="text" class="form-control" placeholder="Nombres">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only">Apellidos</label>
				<input type="text" class="form-control" placeholder="Apellidos">
			</div>
		</div>
		<div class="text-gray h3 thin">
			<label for="">Género:</label>
			<input type="radio" checked name="genre"> Femenino
			<input type="radio" name="genre"> Masculino
		</div>
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Carrera de interés</label>
				<select name="" id="" class="form-control select-override">
					<option value="Carrera de interés">Carrera de interés</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Documento</label>
				<select name="" id="" class="form-control select-override">
					<option value="Documento">Documento</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Documento</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="">Lugar de nacimiento</label>
			</div>
			<div class="form-group col-sm-6">
				<select name="" id="" class="form-control select-override">
					<option value="País">País</option>
				</select>
			</div>
			<div class="form-group col-sm-6">
				<select name="" id="" class="form-control select-override">
					<option value="Ciudad">Ciudad</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="" class="block">Fecha de nacimiento</label>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="" class="form-control select-override">
					<option value="Día">Día</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="" class="form-control select-override">
					<option value="Mes">Mes</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="" class="form-control select-override">
					<option value="Año">Año</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="" class="block">Domicilio actual</label>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="" class="form-control select-override">
					<option value="Dpto">Dpto</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="" class="form-control select-override">
					<option value="Provincia">Provincia</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="" class="form-control select-override">
					<option value="Distrito">Distrito</option>
				</select>
			</div>
			<div class="col-sm-12 form-group">
				<label for="" class="sr-only">Dirección actual</label>
				<input type="text" class="form-control" placeholder="Ingresa tu dirección actual">
			</div>
			<div class="col-sm-7 form-group">
				<input type="email" class="form-control" placeholder="e-mail">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="" class="block">Teléfonos</label>
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Celular 1</label>
				<input type="text" class="form-control" placeholder="Celular 1">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Celular 2</label>
				<input type="text" class="form-control" placeholder="Celular 2">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Teléfono fijo</label>
				<input type="text" class="form-control" placeholder="Teléfono fijo">
			</div>
		</div>
		<h3 class="light">Estudios</h3>
		<div class="row">
			<div class="col-sm-12"><label for="">Año que culminó los estudios secundarios o bachillerato</label></div>
			<div class="col-sm-3 form-group">
				<select name="" id="" class="form-control select-override">
					<option value="Año">Año</option>
				</select>
			</div>
			<div class="col-sm-9 form-group">
				<label for="" class="sr-only">Colegio de procedencia</label>
				<input type="text" class="form-control" placeholder="Colegio de procedencia">
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="" class="form-control select-override">
					<option value="Dpto">Dpto</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="" class="form-control select-override">
					<option value="Provincia">Provincia</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="" class="form-control select-override">
					<option value="Distrito">Distrito</option>
				</select>
			</div>
			<div class="form-group col-sm-7">
				<select name="" id="" class="form-control select-override">
					<option value="Rendimiento académico">Rendimiento académico</option>
				</select>
			</div>
			<div class="col-sm-12 form-group text-gray h3 thin">
				<label for="">Es o ha sido estudiante de esta universidad:</label>
				<input type="radio" checked name="is-student"> Sí
				<input type="radio" name="is-student"> No
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


