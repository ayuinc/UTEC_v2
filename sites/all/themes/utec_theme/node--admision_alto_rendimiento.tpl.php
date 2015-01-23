<?php 
// $video_name = $node->field_video['und']['0']['filename'];

$titulo = $node->title;   
$field_descripcion_corta_alto = $node->field_descripcion_corta_alto['und']['0']['value'];
$field_como_postular_alto = $node->field_como_postular_alto['und']['0']['value'];
$field_opcion_1_alto = $node->field_opcion_1_alto['und']['0']['value'];
$field_opcion_2_alto = $node->field_opcion_1_alto['und']['0']['value'];
$field_opcion_3_alto = $node->field_opcion_1_alto['und']['0']['value'];
$field_opcion_4_alto = $node->field_opcion_1_alto['und']['0']['value'];
$field_opcion_5_alto = $node->field_opcion_1_alto['und']['0']['value'];
$field_opcion_6_alto = $node->field_opcion_1_alto['und']['0']['value'];
$field_costa_alto = $node->field_costa_alto['und']['0']['value'];
$field_temario_alto = $node->field_temario_alto['und']['0']['value'];


global $language; 
$idioma = $language->language;		

?>
	<div class="container-sm">
	<div>
		<h1 class="light"><?php print t('High Performance Assessment'); ?></h1>
		<div class="separator-gray separator-md"></div>
		<div>
		<p class="lead text-gray"><?php print $field_descripcion_corta_alto ?></p>
		<div class="mb-ch-42">
			<div>
				<h3><?php print t('How to apply?') ?></h3>
				<?php  print $field_como_postular_alto ?>
			</div>
			<div>
				<h3><?php print t('Costs:') ?></h3>
					<div class="list-custom">
						<ul><li><?php print $field_costa_alto ?></li></ul>
					</div>
			</div>
			<div>
				<h3><?php print t('Agenda:') ?></h3>
				<div class="list-custom">
					<?php print $field_temario_alto ?>
				</div>
			</div>
			<div class="gbo calendar">
				<h3><?php print t('Calendar:') ?></h3>
					<div class="row">
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Registration Start') ?></span>
							</div>
							<div class="date">
								<span>4/1/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>4/30/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>5/26/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>6/26/2014, 12:00:00 AM</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>8/28/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>9/25/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>10/30/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>11/27/2014, 12:00:00 AM</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>1/29/2015, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>2/20/2015</span>
							</div>
						</div>
					</div>
			</div>
			</div>
		</div>
	</div>

	<h3><?php print t("For more information:") ?></h3>
	<form action="/registro.php" data-submit="Formulario de inscripcion" method="post" id="formRegistro" name="formRegistro">
		<input type="hidden" name="origen" value="<?php print $title; ?>">
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
				<label for="" class="sr-only"><?php print t('E-Mail') ?></label>
				<input id="email" name="email" type="text" class="form-control" placeholder="<?php print t('E-Mail') ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t('Phone') ?></label>
				<input id="telefono" name="telefono" type="text" class="form-control" placeholder="<?php print t('Phone') ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t('Undergrad Program') ?></label>
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
	      <?php if ($idioma == "es") { ?>
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
		  <?php } ?>

	      <?php if ($idioma == "en") { ?>
	      messages: {
		    "nombres": { required: "Fill in your name. <br />" }, "apellidop": { required: "Fill in your middle name. <br /> " },
		    "apellidom": { required: "Fill in your last name. <br /> " }, "carrera": { required: "Select you carreer <br /> " },
		    "tipo-documento": { required: "Select your document type. <br /> " }, "documento": { required: "Fill in your document. <br /> " },
		    "pais": { required: "Fill in your country. <br /> " }, "ciudad": { required: "Fill in your city. <br /> " },
		    "dia": { required: "Fill in your day of birth. <br /> " }, "mes": { required: "Fill in your month of birth. <br /> " },
		    "ano": { required: "Fill in your year of birth. <br /> " }, "depto": { required: "Fill in your department. <br /> " },
		    "provincia": { required: "Fill in your province. <br /> " }, "distrito": { required: "Fill in your district. <br /> " },
		    "direccion-actual": { required: "Fill in your address. <br /> " }, "email": { required: "Fill in your e-mail. <br /> " },
	      	"celular-1": { required: "Fill in your cellphone 1. <br /> " }, "ano-culminacion": { required: "Select your year of completion. <br /> " }, 
	      	"colegio-procedencia": { required: "Fill in your school of origin. <br /> " },
		    "estudios-dpto": { required: "Fill in the department of your school. <br /> " }, "estudios-provincia": { required: "Fill in the province of your school. <br /> " },
		    "estudios-distrito": { required: "Fill in the district of your school. <br /> " }, "estudios-rendimiento": { required: "Select your academic performance. <br /> " }
		  },
		  <?php } ?>


	      errorPlacement: function( error, element ) {
	        	error.insertAfter( '#errordiv' );
	      },
	      submitHandler: function( form ) {                                                 
	      		form.submit();
	      }
    });
});
</script>
