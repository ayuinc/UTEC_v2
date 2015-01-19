<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;
	$titulo_usuario = $node->field_titulo_usuario['und']['0']['value'];
	$cuerpo = $node->body['und']['0']['value'];
	$mencion = $node->field_mencion['und']['0']['value'];
	$electivo = $node->field_electivo['und'];
	
	// print_r($node);
?>

<div class="container-sm">
	<h1 class="light"><?php print $titulo_usuario; ?></h1>
	<div clsass="separator-gray separator-lg"></div>
	<h3 class="thin text-gray pt-21 pb-56"><?php print t('Examen de admision') ?></h3>
</div>
<div class="container-sm form-custom">
	<form action="/registro.php" class="mb-ch-28" data-submit="Formulario de inscripcion" method="post">
		<input type="hidden" name="origen" value="<?php print $title; ?>">
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Nombres</label>
				<input  id="nombres" name="nombres" type="text" class="form-control" placeholder="Nombres">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Apellido paterno</label>
				<input  id="apellidop" name="apellidop" type="text" class="form-control" placeholder="Apellido paterno">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Apellido materno</label>
				<input  id="apellidom" name="apellidom" type="text" class="form-control" placeholder="Apellido materno">
			</div>
		</div>
		<div class="text-gray h3 thin">
			<label for="">Género:</label>
			<input  id="femenino" type="radio" checked name="genero" value="F"> Femenino
			<input  id="masculino" type="radio" name="genero" value="M"> Masculino
		</div>
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Carrera de interés</label>
				<select name="carrera" id="carrera" class="form-control select-override">
					<option value="Carrera de interés">Carrera de interés</option>
					<option value="15970"><?php print t('Industrial Engineering') ?></option>
		            <option value="14864"><?php print t('Mechanical Engineering') ?></option>
		            <option value="15968"><?php print t('Energy Engineering') ?></option>
		            <option value="15964"><?php print t('Electronic Engineering') ?></option>
		            <option value="15966"><?php print t('Industrial and Chemical Engineering') ?></option>					
				</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Documento</label>
				<select name="tipo-documento" id="tipo-documento" class="form-control select-override">
	            	<option value="">- Selecciona el tipo -</option>
	            	<option value="DNI">DNI</option>
	                <option value="CE">Carné de extranjería</option>
	                <option value="PA">Pasaporte</option>
	                <option value="OT">Otro</option>
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
				<input  id="pais" name="pais" type="text" class="form-control">
				<!--
				<select name="pais" id="pais" class="form-control select-override">
					<option value="País">País</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-6">
				<input  id="ciudad" name="ciudad" type="text" class="form-control">
				<!--
				<select name="ciudad" id="ciudad" class="form-control select-override">
					<option value="Ciudad">Ciudad</option>
				</select>
				-->
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="" class="block">Fecha de nacimiento</label>
			</div>
			<div class="form-group col-sm-4">
				<select name="dia" id="dia" class="form-control select-override">
					<option value="Día">Día</option>

					<option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option>
					<option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option>
					<option value="9">9</option> <option value="10">10</option> <option value="11">11</option> <option value="12">12</option>
					<option value="13">13</option> <option value="14">14</option> <option value="15">15</option> <option value="16">16</option>
					<option value="17">17</option> <option value="18">18</option> <option value="19">19</option> <option value="20">20</option>
					<option value="21">21</option> <option value="22">22</option> <option value="23">23</option> <option value="24">24</option>
					<option value="25">25</option> <option value="26">26</option> <option value="27">27</option> <option value="28">28</option>
					<option value="29">29</option> <option value="30">30</option> <option value="31">31</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="mes" id="mes" class="form-control select-override">
					<option value="Mes">Mes</option>
					<option value="Enero">Enero</option> <option value="Febrero">Febrero</option> <option value="Marzo">Marzo</option>
					<option value="Abril">Abril</option> <option value="Mayo">Mayo</option> <option value="Junio">Junio</option>
					<option value="Julio">Julio</option> <option value="Agosto">Agosto</option> <option value="Setiembre">Setiembre</option>
					<option value="Octubre">Octubre</option> <option value="Noviembre">Noviembre</option> <option value="Diciembre">Diciembre</option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="ano" id="ano" class="form-control select-override">
					<option value="Año">Año</option>
					<?php for ($x = 1970; $x <= 2015; $x++) { ?>
    					<?php echo "<option value='$x'>$x</option>";?> 
					<?php } ?>
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
					<option value="0">0</option>
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
