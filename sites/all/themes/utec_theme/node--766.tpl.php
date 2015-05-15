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
	<form action="/registro.php" class="mb-ch-28" data-submit="Formulario de inscripcion" method="post">
		<input type="hidden" name="origen" value="<?php print $titulo; ?>">
		<input type="hidden" name="idioma" value="<?php print $idioma; ?>">
		<div class="text-left">
			  <label>
						<?php print $cuerpo; ?>
			  </label>	
	    </div>	
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
		<div class="text-gray h4 thin">
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
				<label for="" class="block"><?php print t('Date of Birth') ?></label>
			</div>
			<div class="form-group col-sm-4">
				<select name="dia" id="dia" class="form-control select-override">
					<option value=""><?php print t('Day') ?></option>
					<?php for ($x = 1; $x <= 31; $x++) { ?>
    					<?php echo "<option value='$x'>$x</option>";?> 
					<?php } ?>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="mes" id="mes" class="form-control select-override">
					<option value=""><?php print t('Month') ?></option>
					<option value="<?php print t('January') ?>"><?php print t('January') ?></option>
					<option value="<?php print t('February') ?>"><?php print t('February') ?></option>
					<option value="<?php print t('March') ?>"><?php print t('March') ?></option>
					<option value="<?php print t('April') ?>"><?php print t('April') ?></option>
					<option value="<?php print t('May') ?>"><?php print t('May') ?></option>
					<option value="<?php print t('June') ?>"><?php print t('June') ?></option>
					<option value="<?php print t('July') ?>"><?php print t('July') ?></option>
					<option value="<?php print t('August') ?>"><?php print t('August') ?></option>
					<option value="<?php print t('September') ?>"><?php print t('September') ?></option>
					<option value="<?php print t('October') ?>"><?php print t('October') ?></option>
					<option value="<?php print t('November') ?>"><?php print t('November') ?></option>
					<option value="<?php print t('December') ?>"><?php print t('December') ?></option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<select name="ano" id="ano" class="form-control select-override">
					<option value=""><?php print t('Year') ?></option>
					<?php for ($x = 1970; $x <= 2015; $x++) { ?>
    					<?php echo "<option value='$x'>$x</option>";?> 
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="" class="block"><?php print t('Address') ?></label>
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t('Region') ?></label>
				<input  id="depto" name="depto" type="text" class="form-control" placeholder="<?php print t('Region') ?>">
				<!--
				<select name="depto" id="depto" class="form-control select-override">
					<option value="Dpto">Dpto</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t('Province') ?></label>
				<input  id="provincia" name="provincia" type="text" class="form-control" placeholder="<?php print t('Province') ?>">
				<!--
				<select name="provincia" id="provincia" class="form-control select-override">
					<option value="Provincia">Provincia</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t('District') ?></label>
				<input  id="distrito" name="distrito" type="text" class="form-control" placeholder="<?php print t('District') ?>">
				<!--
				<select name="distrito" id="distrito" class="form-control select-override">
					<option value="Distrito">Distrito</option>
				</select>
				-->
			</div>
			<div class="col-sm-12 form-group">
				<label for="" class="sr-only"><?php print t('Address') ?></label>
				<input  id="direccion-actual" name="direccion-actual" type="text" class="form-control" placeholder="<?php print t('Address') ?>">
			</div>
			<div class="col-sm-7 form-group">
				<input  id="email" name="email" type="email" class="form-control" placeholder="e-mail">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="" class="block"><?php print t('Phone') ?></label>
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t('Cell Phone 1') ?></label>
				<input  id="celular-1" name="celular-1" type="text" class="form-control" placeholder="<?php print t('Cell Phone 1') ?>">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t('Cell Phone 2') ?></label>
				<input  id="celular-2" name="celular-2" type="text" class="form-control" placeholder="<?php print t('Cell Phone 2') ?>">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t('Fix phone') ?></label>
				<input  id="telefono-fijo" name="telefono" type="text" class="form-control" placeholder="<?php print t('Fix phone') ?>">
			</div>
		</div>
		<h3 class="light"><?php print t('Studies') ?></h3>
		<div class="row">
			<div class="col-sm-12"><label for=""><?php print t('High school graduation year') ?></label></div>
			<div class="col-sm-3 form-group">
				<select name="ano-culminacion" id="ano-culminacion" class="form-control select-override">
					<option value=""><?php print t('year') ?></option>
					<?php for ($x = 1970; $x <= 2015; $x++) { ?>
    					<?php echo "<option value='$x'>$x</option>";?> 
					<?php } ?>
				</select>
			</div>
			<div class="col-sm-9 form-group">
				<label for="" class="sr-only"><?php print t('High School') ?></label>
				<input  id="colegio-procedencia" name="colegio" type="text" class="form-control" placeholder="<?php print t('High School') ?>">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t('Department') ?></label>
				<input  id="estudios-dpto" name="estudios-dpto" type="text" class="form-control" placeholder="<?php print t('Department') ?>">
				<!--
				<select name="estudios-dpto" id="estudios-dpto" class="form-control select-override">
					<option value="Dpto">Dpto</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t('Province') ?></label>
				<input  id="estudios-provincia" name="estudios-provincia" type="text" class="form-control" placeholder="<?php print t('Province') ?>">
				<!--
				<select name="estudios-provincia" id="estudios-provincia" class="form-control select-override">
					<option value="Provincia">Provincia</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t('District') ?></label>
				<input  id="estudios-distrito" name="estudios-distrito" type="text" class="form-control" placeholder="<?php print t('District') ?>">					
				<!--
				<select name="estudios-distrito" id="estudios-distrito" class="form-control select-override">
					<option value="Distrito">Distrito</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-7">
				<select name="estudios-rendimiento" id="estudios-rendimiento" class="form-control select-override">
					<option value="">- <?php print t('Academic Performance') ?> -</option>
          <option value="Primeros Puestos ( 1° y 2° )"><?php print t('First place ( 1° y 2° )') ?></option>
          <option value="Tercio superior"><?php print t('Third Superior') ?></option>
          <option value="Otro"><?php print t('Other') ?></option> 
				</select>
			</div>
			<div class="col-sm-12 form-group text-gray h4 thin">
				<label for=""><?php print t('Have you been a student of this university:') ?></label>
				<input  id="estudiante-si" type="radio" checked name="estudiante" value="S"> <?php print t('Yes') ?>
				<input  id="estudiante-no" type="radio" name="estudiante" value ="N"> No
			</div>
		</div>
		<div class="text-right">
			<button  id="" type="submit" class="btn btn-primary btn-lg" onclick="formulario_de_aplicacion()"><?php print t('Send') ?></button>
		</div>
		<div class="text-left">
			  <label>
						Al hacer clic en ENVIAR el usuario acepta <a href="http://app.utec.edu.pe/documentacion/terminos-y-condiciones.pdf" target="_blank">las condiciones de uso.</a>
			  </label>	
	    </div>		
	</form>						
</div>
<div class="container pt-42">
	<div class="col-md-1"></div>
	<div class="col-md-10">
	</div>
	<div class="col-md-1"></div>
</div>
