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
	// print_r($node);
	//ALTO RENDIMIENTO
?> 

<div class="container-sm mb-35">
	<h1 class="light"><?php print $titulo_usuario; ?></h1>
	<div class="separator-gray separator-lg"></div>
	<p class="lead"></p>
</div>
<div class="container-sm form-custom">
	<form action="/registro.php" class="mb-ch-28" data-submit="Formulario de inscripcion" method="post" id="formRegistro" name="formRegistro">
		<input type="hidden" name="origen" value="<?php print $title; ?>">
		<input type="hidden" name="idioma" value="<?php print $idioma; ?>">
		<div class="text-left">
			  <label>
						<?php print $cuerpo; ?>
			  </label>	
	    </div>

		<div class="row">
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Name</label>
				<input  id="nombres" name="nombres" type="text" class="form-control" placeholder="Name">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Middle Name</label>
				<input  id="apellidop" name="apellidop" type="text" class="form-control" placeholder="Middle Name">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Last Name</label>
				<input  id="apellidom" name="apellidom" type="text" class="form-control" placeholder="Last Name">
			</div>
		</div>
		<div class="text-gray h4 thin">
			<label for="">Gender:</label>
			<input  id="femenino" type="radio" checked name="genero" value="F"> Female
			<input  id="masculino" type="radio" name="genero" value="M"> Male
		</div>
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Undergrad Program</label>
				<select name="carrera" id="carrera" class="form-control select-override">
					<option value="">Undergrad Program</option>
					<option value="15970"><?php print t('Industrial Engineering') ?></option>
		            <option value="14864"><?php print t('Mechanical Engineering') ?></option>
		            <option value="15968"><?php print t('Energy Engineering') ?></option>
		            <option value="15964"><?php print t('Electronic Engineering') ?></option>
		            <option value="15966"><?php print t('Industrial and Chemical Engineering') ?></option>					
				</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Document Type</label>
				<select name="tipo-documento" id="tipo-documento" class="form-control select-override">
	            	<option value="">- Document type -</option>
	            	<option value="DNI"><?php print t('DNI') ?></option>
	                <option value="CE"><?php print t('Residence card') ?></option>
	                <option value="PA"><?php print t('Passport') ?></option>
	                <option value="OT"><?php print t('DNI') ?></option>
				</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Document</label>
				<input  id="documento" name="documento" type="text" class="form-control" placeholder="Document">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for=""><?php print t('Place of Birth') ?></label>
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t('Country') ?></label>
				<input  id="pais" name="pais" type="text" class="form-control" placeholder="<?php print t('Country') ?>">
				<!--
				<select name="pais" id="pais" class="form-control select-override">
					<option value="País">País</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t('City') ?></label>
				<input  id="ciudad" name="ciudad" type="text" class="form-control" placeholder="<?php print t('City') ?>">
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
				<label for="" class="sr-only">High School</label>
				<input  id="colegio-procedencia" name="colegio" type="text" class="form-control" placeholder="High School">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only"><?php print t('Region') ?></label>
				<input  id="estudios-dpto" name="estudios-dpto" type="text" class="form-control" placeholder="<?php print t('Region') ?>">
				<!--
				<select name="estudios-dpto" id="estudios-dpto" class="form-control select-override">
					<option value="Dpto">Dpto</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Province</label>
				<input  id="estudios-provincia" name="estudios-provincia" type="text" class="form-control" placeholder="Province">
				<!--
				<select name="estudios-provincia" id="estudios-provincia" class="form-control select-override">
					<option value="Provincia">Provincia</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">District</label>
				<input  id="estudios-distrito" name="estudios-distrito" type="text" class="form-control" placeholder="District">				
				<!--
				<select name="estudios-distrito" id="estudios-distrito" class="form-control select-override">
					<option value="Distrito">Distrito</option>
				</select>
				-->
			</div>
			<div class="form-group col-sm-7">
				<select name="estudios-rendimiento" id="estudios-rendimiento" class="form-control select-override">
					<option value="">- Academic Performance -</option>
	                <option value="Primeros Puestos ( 1° y 2° )">First place ( 1° y 2° )</option>
	                <option value="Tercio superior">Third Superior</option>
	                <option value="Otro">Other</option>
				</select>
			</div>
			<div class="col-sm-12 form-group text-gray h4 thin">
				<label for="">Have you been a student of this university?:</label>
				<input  id="estudiante-si" type="radio" checked name="estudiante" value="S"> Yes
				<input  id="estudiante-no" type="radio" name="estudiante" value ="N"> No
			</div>
		</div>
		<div class="row errordiv">
			<div id="errordiv" class="col-sm-12 form-group"></div>			
		</div>			
		<div class="text-right">
			<button  id="" type="submit" class="btn btn-primary btn-lg"><?php print t('Send') ?></button>
		</div>
		<div class="text-left">
			  <label>
						Al hacer clic en ENVIAR el usuario acepta <a href="http://app.utec.edu.pe/admision/terminos-y-condiciones.pdf" target="_blank">las condiciones de uso.</a>
			  </label>	
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
			"ano-culminacion": { required: true }, "colegio": { required: true }, 
			"estudios-dpto": { required: true }, "estudios-provincia": { required: true },
	        "estudios-distrito": { required: true }, "estudios-rendimiento": { required: true }
	      },
	      messages: {
		    "nombres": { required: "Fill in your name. <br />" }, "apellidop": { required: "Fill in your middle name. <br /> " },
		    "apellidom": { required: "Fill in your last name. <br /> " }, "carrera": { required: "Select you carreer <br /> " },
		    "tipo-documento": { required: "Select your document type. <br /> " }, "documento": { required: "Fill in your document. <br /> " },
		    "pais": { required: "Fill in your country. <br /> " }, "ciudad": { required: "Fill in your city. <br /> " },
		    "dia": { required: "Fill in your day of birth. <br /> " }, "mes": { required: "Fill in your month of birth. <br /> " },
		    "ano": { required: "Fill in your year of birth. <br /> " }, "depto": { required: "Fill in your region. <br /> " },
		    "provincia": { required: "Fill in your province. <br /> " }, "distrito": { required: "Fill in your district. <br /> " },
		    "direccion-actual": { required: "Fill in your address. <br /> " }, "email": { required: "Fill in your e-mail. <br /> " },
	      	"celular-1": { required: "Fill in your cellphone 1. <br /> " }, "ano-culminacion": { required: "Select your year of completion. <br /> " }, 
	      	"colegio": { required: "Fill in your school of origin. <br /> " },
		    "estudios-dpto": { required: "Fill in the region of your school. <br /> " }, "estudios-provincia": { required: "Fill in the province of your school. <br /> " },
		    "estudios-distrito": { required: "Fill in the district of your school. <br /> " }, "estudios-rendimiento": { required: "Select your academic performance. <br /> " }
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