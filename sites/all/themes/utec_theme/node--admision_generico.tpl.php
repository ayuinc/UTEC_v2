<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php 
		global $language; 
		$idioma = $language->language;	
?>



<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/admision-generico/'); ?>

<?php $titulo = $node->title; ?>   
<?php $field_descripcion_corta_generica = $node->field_descripcion_corta_generica['und']['0']['value']; ?>
<?php $field_contenido_generica = $node->field_contenido_generica['und']['0']['value']; ?>
<?php $field_foto_generica_admision = $node->field_foto_generica_admision['und']['0']['filename']; ?>
<?php $field_tiene_formulario = $node->field_tiene_formulario['und']['0']['value']; ?>


<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<?php $end = end((explode('/', $url))); ?>

<?php
	$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
	                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
	                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
	                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
	                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
	$titulo = strtr( $titulo, $unwanted_array );		
?>

<div class="container-sm mb-35">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php if ($field_descripcion_corta_generica!='') { ?>
		<p class="lead"><?php print $field_descripcion_corta_generica ?></p>
	<?php } ?>
	<?php if ($field_foto_generica_admision!='') { ?>
		<img src="<?php print('/'.$pathfile.$field_foto_generica_admision)?>" class="img-responsive mb-35">
	<?php } ?>	
	<?php if ($field_contenido_generica!='') { ?>
		<p class="lead text-gray mb-42"><?php print $field_contenido_generica ?></p>
	<?php } ?>	
	

	<?php if (($end=='traslado-externo') AND ($end=='transfer-from-other-universities')) { ?> 
	
	<div class="gbo calendar">
		<h3><?php print t('Calendar:') ?></h3>
		<div class="table-responsive table-custom pv-42">
			<table class="table">
				<thead>
					<tr>
						<td><?php print t('Event') ?></td>
						<td><?php print t('Date') ?></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="highlight text-center"><?php print t('Registration starts') ?></td>
						<td>01/04/2014</td>
					</tr>
					<tr>
						<td class="highlight text-center"><?php print t('Registration ends') ?></td>
						<td>01/03/2015</td>
					</tr>
					<tr>
						<td class="highlight text-center"><?php print t('Admissions Exam') ?></td>
						<td>04/03/2015</td>
					</tr>
				</tbody>
		    </table>
	    </div>
	</div>
	<?php } ?>	
		
</div>

<?php if ($field_tiene_formulario == "Si-carreras") { ?>
<div class="container-sm form-custom mt-35"> 
	<h3><?php print t("For more information:") ?></h3>
	<form action="/registro.php" data-submit="Formulario de inscripcion" method="post" id="formRegistro" name="formRegistro">
		<input type="hidden" name="origen" value="<?php print $titulo; ?>">
		<input type="hidden" name="idioma" value="<?php print $idioma; ?>">

		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Name") ?></label>
				<input id="nombres" name="nombres" type="text" class="form-control" placeholder="<?php print t("Name") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Middle Name") ?></label>
				<input id="apellidop" name="apellidop" type="text" class="form-control" placeholder="<?php print t("Middle Name") ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Last Name") ?></label>
				<input id="apellidom" name="apellidom" type="text" class="form-control" placeholder="<?php print t("Last Name") ?>">
			</div>			
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Email") ?></label>
				<input id="email" name="email" type="text" class="form-control" placeholder="<?php print t("Email") ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t('Phone') ?></label>
				<input id="telefono" name="telefono" type="text" class="form-control" placeholder="<?php print t('Phone') ?>">
			</div>			
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t('Path of Interest') ?></label>
				<select name="carrera" id="carrera" class="form-control select-override">
					  <option value=""><?php print t('Undergrad Program') ?></option>
					  <option value="15970"><?php print t('Industrial Engineering') ?></option>
			          <option value="14864"><?php print t('Mechanical Engineering') ?></option>
			          <option value="15968"><?php print t('Energy Engineering') ?></option>
			          <option value="15964"><?php print t('Electronic Engineering') ?></option>
			          <option value="15966"><?php print t('Industrial and Chemical Engineering') ?></option>		            
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-12">
				<label for="" class="sr-only"><?php print t('Message') ?></label>
				<textarea class="form-control" placeholder="<?php print t('Message') ?>" name="consulta" id="consulta"></textarea>
			</div>
		</div>
		<div class="row errordiv">
			<div id="errordiv" class="col-sm-12 form-group"></div>			
		</div>				
		<div class="text-right">
			<button type="submit" class="btn btn-primary btn-lg"><?php print t('Send') ?></button>
		</div>
	</form>						
</div>	
<?php } ?>

<?php if ($field_tiene_formulario == "Si") { ?>
<div class="container-sm form-custom">
	<h3><?php print t("For more information:") ?></h3>
	<form action="/registro.php" data-submit="Formulario de inscripcion" method="post" id="formRegistro" name="formRegistro">
			<input type="hidden" name="origen" value="<?php print $titulo; ?>">
			<input type="hidden" name="idioma" value="<?php print $idioma; ?>">			

			<div class="row">
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t('Name') ?></label>
					<input type="text" class="form-control" placeholder="<?php print t('Name') ?>" name="nombres" id="nombres">
				</div>
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t("Middle Name") ?></label>
					<input type="text" class="form-control" placeholder="<?php print t("Middle Name") ?>" name="apellidop" id="apellidop">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t("Last Name") ?></label>
					<input type="text" class="form-control" placeholder="<?php print t("Last Name") ?>" name="apellidom" id="apellidom">
				</div>
				<div class="col-sm-6 form-group">
					<label for="" class="sr-only"><?php print t('E-Mail') ?></label>
					<input type="email" class="form-control" placeholder="<?php print t('E-Mail') ?>" name="email" id="email">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<label for="" class="sr-only"><?php print t('Phone') ?></label>
					<input type="text" class="form-control" placeholder="<?php print t('Phone') ?>" name="telefono" id="telefono">
				</div>				
			</div>
			<div class="row">
				<div class="form-group col-sm-12">
					<label for="" class="sr-only"><?php print t('Message') ?></label>
					<textarea class="form-control" placeholder="<?php print t('Message') ?>" name="consulta" id="consulta"></textarea>
				</div>
			</div>
			<div class="row errordiv">
				<div id="errordiv" class="col-sm-12 form-group"></div>			
			</div>				
			<div class="text-right">
				<button type="submit" class="btn btn-primary btn-lg"><?php print t('Send') ?></button>
			</div>
	</form>						
</div>
<?php } ?>


<script type="text/javascript">
jQuery(function() {                        
    jQuery('#formRegistro').validate( {
	      rules: {
	        "nombres": { required: true }, "apellidop": { required: true }, "apellidom": { required: true }, "carrera": { required: true },	
	        "tipo-documento": { required: true }, "documento": { required: true }, "pais": { required: true }, "ciudad": { required: true },	
	        "dia": { required: true }, "mes": { required: true }, "ano": { required: true }, "depto": { required: true }, "provincia": { required: true },	
	        "distrito": { required: true }, "direccion-actual": { required: true },	"email": { required: true }, "telefono": { required: true },	
			"ano-culminacion": { required: true }, "colegio-procedencia": { required: true }, 
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
	      	"telefono": { required: "Completa tu telefono. <br /> " }, "ano-culminacion": { required: "Completa tu año de culminación. <br /> " }, 
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