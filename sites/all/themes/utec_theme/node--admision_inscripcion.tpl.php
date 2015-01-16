<?php 
// $video_name = $node->field_video['und']['0']['filename'];

$titulo = $node->title;   
$field_pago_inscripcion = $node->field_pago_inscripcion['und']['0']['value'];
$field_forma_de_pago_inscripcion = $node->field_forma_de_pago_inscripcion['und']['0']['value'];
$field_detalles_inscripcion = $node->field_detalles_inscripcion['und']['0']['value'];
$field_condiciones_inscripcion = $node->field_condiciones_inscripcion['und']['0']['value'];



?>
<div class="container-sm">
	<h1 class="light"><?php print t('Registration') ?></h1>
	<div class="separator-gray separator-lg"></div>
	<div class="list-custom-left normalize-text lead-ch mb-ch-21">
		<ul>
			<li class="bg-primary text-white uppercase text-center p-21">
				<?php print t('Payment') ?>
			</li>
			<li class="pl-21">									
				<?php print $field_pago_inscripcion ?>
			</li>
		</ul>
		<ul>
			<li class="bg-gray text-white uppercase text-center p-21">
				<?php print t('Payment Method') ?>
			</li>
			<li class="pl-21">									
				<?php print $field_forma_de_pago_inscripcion ?>
			</li>
		</ul>
	</div>
	<div class="list-custom pv-42">
		<?php print $field_detalles_inscripcion ?>
		<a href="#" class="btn btn-primary see-more btn-lg uppercase"><?php print t('Complete the form') ?></a>
	</div>
	<div class="pb-42">
		<h3 class="thin"><?php print t('Conditions for admission') ?></h3>
		<p><?php print $field_condiciones_inscripcion ?></p>
	</div>
</div>
<!--<div class="lead-ch p-ch-gray li-ch-gray">
	<h3 class="thin">Formulario</h3>
	<p>Datos del participante:</p>
</div>
<div class="container-sm form-custom">
	<form action="" class="mb-ch-28" data-submit="Formulario de inscripcion">
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
				<select name="" id="carreras" class="form-control select-override">
					<option value="Carrera de interés">Carrera de interés</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Documento</label>
				<select name="" id="tipo-documento" class="form-control select-override">
					<option value="Documento">Documento</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Documento</label>
				<input  id="documento" type="text" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="">Lugar de nacimiento</label>
			</div>
			<div class="form-group col-sm-6">
				<select name="" id="pais" class="form-control select-override">
					<option value="País">País</option>
				</select>
			</div>
			<div class="form-group col-sm-6">
				<select name="" id="ciudad" class="form-control select-override">
					<option value="Ciudad">Ciudad</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="" class="block">Fecha de nacimiento</label>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="dia" class="form-control select-override">
					<option value="Día">Día</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="mes" class="form-control select-override">
					<option value="Mes">Mes</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="ano" class="form-control select-override">
					<option value="Año">Año</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="" class="block">Domicilio actual</label>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="depto" class="form-control select-override">
					<option value="Dpto">Dpto</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="provincia" class="form-control select-override">
					<option value="Provincia">Provincia</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="distrito" class="form-control select-override">
					<option value="Distrito">Distrito</option>
				</select>
			</div>
			<div class="col-sm-12 form-group">
				<label for="" class="sr-only">Dirección actual</label>
				<input  id="direccion-actual" type="text" class="form-control" placeholder="Ingresa tu dirección actual">
			</div>
			<div class="col-sm-7 form-group">
				<input  id="email" type="email" class="form-control" placeholder="e-mail">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="" class="block">Teléfonos</label>
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Celular 1</label>
				<input  id="celular-1" type="text" class="form-control" placeholder="Celular 1">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Celular 2</label>
				<input  id="celular-2" type="text" class="form-control" placeholder="Celular 2">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Teléfono fijo</label>
				<input  id="telefono-fijo" type="text" class="form-control" placeholder="Teléfono fijo">
			</div>
		</div>
		<h3 class="light">Estudios</h3>
		<div class="row">
			<div class="col-sm-12"><label for="">Año que culminó los estudios secundarios o bachillerato</label></div>
			<div class="col-sm-3 form-group">
				<select name="" id="ano-culminacion" class="form-control select-override">
					<option value="Año">Año</option>
				</select>
			</div>
			<div class="col-sm-9 form-group">
				<label for="" class="sr-only">Colegio de procedencia</label>
				<input  id="colegio-procedencia" type="text" class="form-control" placeholder="Colegio de procedencia">
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="estudios-dpto" class="form-control select-override">
					<option value="Dpto">Dpto</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="estudios-provincia" class="form-control select-override">
					<option value="Provincia">Provincia</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="" id="estudios-distrito" class="form-control select-override">
					<option value="Distrito">Distrito</option>
				</select>
			</div>
			<div class="form-group col-sm-7">
				<select name="" id="estudios-rendimiento" class="form-control select-override">
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
</div>-->


