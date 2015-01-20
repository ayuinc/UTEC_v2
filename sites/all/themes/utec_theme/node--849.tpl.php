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
</div>
<div class="container-sm form-custom">
	<form action="/registro.php" class="mb-ch-28" data-submit="Formulario de inscripcion" method="post" id="formRegistro" name="formRegistro">
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
				<input  id="documento" name="documento" type="text" class="form-control" placeholder="Documento">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="">Lugar de nacimiento</label>
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only">Pais</label>
				<input  id="pais" name="pais" type="text" class="form-control" placeholder="Pais">
				<!--
				<select name="pais" id="pais" class="form-control select-override">
					<option value="País">País</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only">Ciudad</label>
				<input  id="ciudad" name="ciudad" type="text" class="form-control" placeholder="Ciudad">
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
					<?php for ($x = 1; $x <= 31; $x++) { ?>
    					<?php echo "<option value='$x'>$x</option>";?> 
					<?php } ?>
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
				<label for="" class="sr-only">Departamento</label>
				<input  id="depto" name="depto" type="text" class="form-control" placeholder="Departamento">
				<!--
				<select name="depto" id="depto" class="form-control select-override">
					<option value="Dpto">Dpto</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Provincia</label>
				<input  id="provincia" name="provincia" type="text" class="form-control" placeholder="Provincia">
				<!--
				<select name="provincia" id="provincia" class="form-control select-override">
					<option value="Provincia">Provincia</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Distrito</label>
				<input  id="distrito" name="distrito" type="text" class="form-control" placeholder="Distrito">
				<!--
				<select name="distrito" id="distrito" class="form-control select-override">
					<option value="Distrito">Distrito</option>
				</select>
				-->
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
			<div class="col-sm-12 form-group">
				<label for="" class="sr-only">Universidad de Procedencia</label>
				<input  id="universidad" name="universidad" type="text" class="form-control" placeholder="Universidad de Procedencia">
			</div>

			<div class="col-sm-12"><label for="">Año que culminó los estudios secundarios o bachillerato</label></div>
			<div class="col-sm-3 form-group">
				<select name="ano-culminacion" id="ano-culminacion" class="form-control select-override">
					<option value="Año">Año</option>
					<?php for ($x = 1970; $x <= 2015; $x++) { ?>
    					<?php echo "<option value='$x'>$x</option>";?> 
					<?php } ?>
				</select>
			</div>
			<div class="col-sm-9 form-group">
				<label for="" class="sr-only">Colegio de procedencia</label>
				<input  id="colegio-procedencia" name="colegio" type="text" class="form-control" placeholder="Colegio de procedencia">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Departamento</label>
				<input  id="estudios-dpto" name="estudios-dpto" type="text" class="form-control" placeholder="Departamento">
				<!--
				<select name="estudios-dpto" id="estudios-dpto" class="form-control select-override">
					<option value="Dpto">Dpto</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Provincia</label>
				<input  id="estudios-provincia" name="estudios-provincia" type="text" class="form-control" placeholder="Provincia">
				<!--
				<select name="estudios-provincia" id="estudios-provincia" class="form-control select-override">
					<option value="Provincia">Provincia</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Distrito</label>
				<input  id="estudios-distrito" name="estudios-distrito" type="text" class="form-control" placeholder="Distrito">				
				<!--
				<select name="estudios-distrito" id="estudios-distrito" class="form-control select-override">
					<option value="Distrito">Distrito</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-7">
				<select name="estudios-rendimiento" id="estudios-rendimiento" class="form-control select-override">
					<option value="">- Rendimiento Académico -</option>
	                <option value="Primeros Puestos ( 1° y 2° )">Primeros Puestos ( 1° y 2° )</option>
	                <option value="Tercio superior">Tercio superior</option>
	                <option value="Otro">Otro</option>
				</select>
			</div>
			<div class="col-sm-12 form-group text-gray h3 thin">
				<label for="">Es o ha sido estudiante de esta universidad:</label>
				<input  id="estudiante-si" type="radio" checked name="estudiante" value="S"> Sí
				<input  id="estudiante-no" type="radio" name="estudiante" value ="N"> No
			</div>
		</div>
		<div id="errordiv" style="display: inline; margin-bottom: 10px; color: #ff0000;"></div>

		<div class="text-right">
			<button  id="" type="submit" class="btn btn-primary btn-lg">Enviar</button>
		</div>
	</form>						
</div>



<script type="text/javascript">
$(function() {                        
    $('#formRegistro').validate( {
	      rules: {
	        nombres: {
	          required: true,
	          //minlength: 4
	        },
	      },
	      messages: {
		        nombres: {
		          required: "Completa tus nombres <br /> ",
		          //minlength: "10 Digitos"
		      },
		      errorPlacement: function( error, element ) {
		        	error.insertAfter( '#errordiv' );
		      },
		      submitHandler: function( form ) {                                                 
		      		form.submit();
		      }
		  }
    });
});
</script>
