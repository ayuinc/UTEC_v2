<?php 
  global $base_url;
  global $theme_path;
  global $language;   
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;
	$titulo_usuario = $node->field_titulo_usuario['und']['0']['value'];
	$cuerpo = $node->body['und']['0']['value'];
	$mencion = $node->field_mencion['und']['0']['value'];
	$electivo = $node->field_electivo['und'];
	$idioma = $language->language;		

	$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
	                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
	                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
	                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
	                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
	$titulo = strtr( $titulo, $unwanted_array );

	// print_r($node);
	//EXAMEN ADMISION
?>

<div class="container-sm mb-35">
	<h1 class="light"><?php print $titulo_usuario; ?></h1>
	<div class="separator-gray separator-lg"></div>
	<p class="lead"></p>
</div>
<div class="container-sm form-custom">
	<form action="/registro.php" class="mb-ch-28" data-submit="Formulario de inscripcion" method="post" id="formRegistro" name="formRegistro">
		<input type="hidden" name="origen" value="<?php print $titulo; ?>">
		<input type="hidden" name="idioma" value="<?php print $idioma; ?>">
			
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
					<option value="">Carrera de interés</option>
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
		<div class="row errordiv">
			<div id="errordiv" class="col-sm-12 form-group"></div>			
		</div>			
		<div class="text-right">
			<button  id="" type="submit" class="btn btn-primary btn-lg" onclick="examen_admision()"><?php print t('Send') ?></button>
		</div>
	</form>						
</div>

<script type="text/javascript">
jQuery(function() {                        
    jQuery('#formRegistro').validate( {
	      rules: {
	        "nombres": { required: true }, "apellidop": { required: true }, "apellidom": { required: true }, "carrera": { required: true },	
	        "tipo-documento": { required: true }, "documento": { required: true }, "pais": { required: true }, "ciudad": { required: true },	
	        "dia": { required: true }, "mes": { required: true }, "ano": { required: true }, "depto": { required: true }, "provincia": { required: true },	
	        "distrito": { required: true }, "direccion-actual": { required: true },	"email": { required: true }, "celular-1": { required: true },	
			"universidad": { required: true }, "ano-culminacion": { required: true }, "colegio-procedencia": { required: true }, 
			"estudios-dpto": { required: true }, "estudios-provincia": { required: true },
	        "estudios-distrito": { required: true }, "estudios-rendimiento": { required: true }
	      },
	      messages: {
		    "nombres": { required: "Completa tus nombres. <br />" }, "apellidop": { required: "Completa tu apellido paterno. <br /> " },		
		    "apellidom": { required: "Completa tu apellido materno. <br /> " }, "carrera": { required: "Selecciona tu carrera. <br /> " },	
		    "tipo-documento": { required: "Selecciona tu tipo de documento. <br /> " }, "documento": { required: "Completa tu documento. <br /> " },	
		    "pais": { required: "Completa tu país. <br /> " }, "ciudad": { required: "Completa tu ciudad. <br /> " }, 
		    "dia": { required: "Completa tu día de nacimiento. <br /> " }, "mes": { required: "Completa tu mes de nacimiento. <br /> " },
		    "ano": { required: "Completa tu año de nacimiento. <br /> " }, "depto": { required: "Completa tu departamento. <br /> " },
		    "provincia": { required: "Completa tu provincia. <br /> " }, "distrito": { required: "Completa tu distrito. <br /> " },
		    "direccion-actual": { required: "Completa tu domicilio. <br /> " }, "email": { required: "Completa tu e-mail. <br /> " },
	      	"celular-1": { required: "Completa tu celular 1. <br /> " }, "ano-culminacion": { required: "Completa tu año de culminación. <br /> " }, 
	      	"colegio-procedencia": { required: "Completa tu colegio de procedencia. <br /> " },
		    "estudios-dpto": { required: "Completa el departamento de tu colegio. <br /> " }, "estudios-provincia": { required: "Completa la provincia de tu colegio. <br /> " },
		    "estudios-distrito": { required: "Completa el distrito de tu colegio. <br /> " }, "estudios-rendimiento": { required: "Selecciona tu rendimiento académico. <br /> " }
		  },
	      errorPlacement: function( error, element ) {
	        	error.insertAfter( '#errordiv' );
	      },
	      submitHandler: function( form ) {                                                 
	      		form.submit();
	      }
    });
});
</script>