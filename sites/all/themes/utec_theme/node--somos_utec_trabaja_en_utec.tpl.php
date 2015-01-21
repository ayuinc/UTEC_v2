<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php 
		global $language; 
		$idioma = $language->prefix;	
?>

<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/trabaja-utec/'); ?>
<?php $title = $node->title; ?>  
<?php $field_su_filosofia = $node->field_su_filosofia['und']['0']['value']; ?>
<?php $field_su_foto = $node->field_su_foto['und']['0']['filename']; ?>
<?php $field_su_universidad = $node->field_su_universidad['und']['0']['value']; ?>
<?php $field_transcendencia = $node->field_transcendencia['und']['0']['value']; ?>
<?php $field_excelencia = $node->field_excelencia['und']['0']['value']; ?>
<?php $field_su_creatividad = $node->field_su_creatividad['und']['0']['value']; ?>
<?php $field_su_contacto = $node->field_su_contacto['und']['0']['value']; ?>

<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-sm"></div>
	<div>
		<h3><?php print t('Our philosophy') ?></h3>
		<p><?php print $field_su_filosofia ?></p>
		<img src="<?php print('/'.$pathfile.$field_su_foto)?>" class="img-responsive">
		<div>
			<h3><?php print t('University') ?></h3>
			<p><?php print $field_su_universidad ?></p>
		</div>
		<div>
			<h3><?php print t('Transcendence') ?></h3>
			<p><?php print $field_transcendencia ?></p>
		</div>
		<div>
			<h3><?php print t('Excellence') ?></h3>
			<p><?php print $field_excelencia ?></p>
		</div>
		<div>
			<h3><?php print t('Creativity') ?></h3>
			<p><?php print $field_su_creatividad ?></p>
		</div>
		<div>
			<h3><?php print t('Contact') ?></h3>
			<?php print $field_su_contacto ?>
		</div>
	</div>
</div>

<div class="container-sm form-custom"> 
	<h3><?php print t('Apply') ?></h3>
	<form action="/registro.php" data-submit="Formulario de inscripcion" method="post"  id="formRegistro" name="formRegistro">
		<input type="hidden" name="origen" value="<?php print $title; ?>">
		<input type="hidden" name="idioma" value="<?php print $idioma; ?>">	

		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t('Name') ?></label>
				<input id="nombres" name="nombres" type="text" class="form-control" placeholder="<?php print t('Name') ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t('Middle name') ?></label>
				<input id="apellidop" name="apellidop" type="text" class="form-control" placeholder="<?php print t('Middle name') ?>">
			</div>

		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t('Last name') ?></label>
				<input id="apellidom" name="apellidom" type="text" class="form-control" placeholder="<?php print t('Last name') ?>">
			</div>			
			<div class="form-group col-sm-6">
				<label for="" class="sr-only">Email</label>
				<input id="email" name="email" type="text" class="form-control" placeholder="Email">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t('Phone') ?></label>
				<input id="telefono" name="telefono" type="text" class="form-control" placeholder="<?php print t('Phone') ?>">
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