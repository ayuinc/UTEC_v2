<?php global $language ?>
<?php global $base_url; ?>
<?php global $theme_path; ?>

<?php 
global $language; 
$idioma = $language->language;	
?>

<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/centro-pre/'); ?>


<?php
$titulo = $node->title;   
$field_que_es_descripcion_cp = $node->field_que_es_descripcion_cp['und']['0']['value'];
$field_que_es_intro_cp = $node->field_que_es_intro_cp['und']['0']['value'];
$field_calendario_fecha = $node->field_calendario_fecha['und']['0']['value'];
$field_calendario_hora = $node->field_calendario_hora['und']['0']['value'];
$field_calendario_pago = $node->field_calendario_pago['und']['0']['value'];
$field_calendario_lugar = $node->field_calendario_lugar['und']['0']['value'];
$field_inscripcion_pre_extensive = $node->field_inscripcion_pre_extensive['und']['0']['value'];
$field_inscripcion_pre_intensiva = $node->field_inscripcion_pre_intensiva['und']['0']['value'];
$field_fotos_centro_pre = $node->field_fotos_centro_pre['und']['0']['filename'];
?>


<?php
	$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
	                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
	                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
	                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
	                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
	$titulo = strtr( $titulo, $unwanted_array );		
?>


	<div class="hero-unit"> <!-- HERO -->
	  <?php if ($language->prefix == 'en'): ?>
	  <div data-section-scroll="Overview" id="que-es" class="section-scroll-content bg-img-block bg-img-block-lg" style="background-image: url(<?php print('/'.$pathfile.$field_fotos_centro_pre)?>);">
	  <?php elseif ($language->prefix == 'es'): ?>
	  <div data-section-scroll="Acerca de" id="que-es" class="section-scroll-content bg-img-block bg-img-block-lg" style="background-image: url(<?php print('/'.$pathfile.$field_fotos_centro_pre)?>);">
	  <?php endif ?>
	    <div class="overlay flex-middle">
	      <div class="container-sm hero-text">
	        <h1 class="thin text-white mt-0"><?php print $titulo ?></h1>
	        <hr class="hr-white">
	        <div class="row">
	          <div class="col-sm-3 hidden-xs">
	            <div class="size xl">
	              <i class="icon-carreras-que-es text-white"></i>
	              <!--<a href="<?php print $carrera_link ?>" class="btn btn-white btn-outline see-more mt-7"><?php print t('See more') ?></a>-->
	            </div>
	          </div>
	          <div class="col-sm-9">
	            <h2 class="lead thin text-white h5 mt-0"><?php print $field_que_es_descripcion_cp ?></h2>
	          </div>
	        </div>
	      </div>
	      <a class="scroll-down scroll-down-sq size lg" href="#malla-curricular" rel="nofollow">
	        <i class="icon-arrows-down bg-white-op text-gray"></i>
	      </a>
	    </div>
	  </div>
	</div> <!-- END:Hero -->
	<div data-section-scroll="<?php print t('Courses') ?>" class="section-scroll-content pb-0">
		<div class="container-sm">
			<h3 class="lead thin text-center"><?php print $field_que_es_intro_cp ?></h3>
		</div>
		<div class="pt-42">
			<div class="container">
				<h3 class="thin lead"><?php print t('Courses') ?></h3>
				<ul class="grid-list grid-list-4 list-hover list-hover-gray-light">
					<li>
						<div>
							<h3 class="lead"><?php print t('Spatial Intelligence') ?></h3>
							<p><?php print t('Understanding of physical phenomena and applying fundamentals to the real world laws.') ?></p>
						</div>
					</li>
					<li>
						<div>
							<h3 class="lead"><?php print t('Physical World') ?></h3>
							<p><?php print t('Interpret chemical phenomena in the world around us, and understand how they affect our quality of life.') ?></p>
						</div>
					</li>
					<li>
						<div>
							<h3 class="lead"><?php print t('Universe and Materials') ?></h3>
							<p><?php print t('To interpret chemical phenomena in the world around us, and understand how they affect our quality of life.') ?></p>
						</div>
					</li>
					<li>
						<div>
							<h3 class="lead"><?php print t('Mathematics') ?></h3>
							<p><?php print t('It identifies and applies the concepts, principles and mathematical laws to solve real world problems.') ?></p>
						</div>
					</li>
					<li>
						<div>
							<h3 class="lead"><?php print t('Tech Project') ?></h3>
							<p><?php print t('Students will live experiences where acquire the knowledge, practice and develop the skills necessary for carrying out project activities aptitudes. The sections are divided into two groups for technology experiences.') ?></p>
						</div>
					</li>
					<li>
						<div>
							<h3 class="lead"><?php print t('Creative Language') ?></h3>
							<p><?php print t('Develops basic language and communication skills in the areas of speaking and writing, to understand and develop short, consistent, correct texts, copies and appropriate.') ?></p>
						</div>
					</li>
					<li>
						<div>
							<h3 class="lead"><?php print t('Talent Orientation') ?></h3>
							<p><?php print t('You are able to discover and develop talent for achieving personal goals defined in a plan of life. Study methods practiced to improve learning ability.') ?></p>
						</div>
					</li>
					<li>
						<div>
							<h3 class="lead"><?php print t('English') ?></h3>
							<p><?php print t('The English Language is necessary for learning in engineering careers and personal and professional development. In the first week a review of initial evaluation will be conducted according to the results study groups were formed.') ?></p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div data-section-scroll="<?php print t('Calendar') ?>" class="section-scroll-content pt-0">
		<div class="container-sm">
			<h3 class="thin lead"><?php print t('Calendar') ?></h3>
			<h4 class="text-gray"><?php print t('Pre intensiva January - February 2015') ?></h4>
			<div class="list-custom-left normalize-text lead-ch mb-ch-21">
				<ul>
					<li class="bg-primary text-white uppercase text-center p-21">
						<?php print t('Date') ?>
					</li>
					<li class="pl-21">
						<p><?php print $field_calendario_fecha ?></p>
					</li>
				</ul>
				<ul>
					<li class="bg-gray text-white uppercase text-center p-21">
						<?php print t('Time') ?>
					</li>
					<li class="pl-21">
						<p><?php print $field_calendario_hora ?></p>
					</li>
				</ul>
				<ul>
					<li class="bg-gray text-white uppercase text-center p-21">
						<?php print t('Payment') ?>
					</li>
					<li class="pl-21">
						<p><?php print $field_calendario_pago ?></p>
					</li>
				</ul>
				<ul>
					<li class="bg-gray text-white uppercase text-center p-21">
						<?php print t('Place') ?>
					</li>
					<li class="pl-21">
						<p><?php print $field_calendario_lugar ?></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--<div data-section-scroll="Inscripcion" class="container-sm section-scroll-content">
		<h3 class="thin lead ml-70 mr-70">Inscripción</h3>
		<div class="list-custom lead-ch">
			<ul>
				<li>
					<p><strong>Pre extensiva:</strong> ser estudiante lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia deserunt cum voluptates laudantium consequuntur nobis magni, assumenda officia dolorem non, laboriosam ratione in, repellat qui dicta, maxime cupiditate eligendi aliquam!</p>
				</li>
				<li>
					<p><strong>Pre intensiva:</strong> ser estudiante lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia deserunt cum voluptates laudantium consequuntur nobis magni, assumenda officia dolorem non, laboriosam ratione in, repellat qui dicta, maxime cupiditate eligendi aliquam!</p>
				</li>
			</ul>
		</div>
		<a href="#" class="btn btn-lg btn-primary see-more uppercase ml-70 mr-70">Ver Requisitos</a>
	</div>-->
	<div data-section-scroll="<?php print t('Request info') ?>" class="container-sm section-scroll-content pt-0">
		<div class="container-sm">
			<h3><?php print t("For more information:") ?></h3>
			<form action="/registro.php" data-submit="Formulario de inscripcion" method="post" id="formRegistro" name="formRegistro">
				<input type="hidden" name="origen" value="<?php print $titulo; ?>">
				<input type="hidden" name="idioma" value="<?php print $idioma; ?>">		

				<div class="row">
					<div class="form-group col-sm-6">
						<label for="" class="sr-only"><?php print t("Name") ?></label>
						<input id="nombres" name="nombres" type="text" class="form-control" placeholder="Nombres">
					</div>
					<div class="form-group col-sm-6">
						<label for="" class="sr-only"><?php print t("Middle Name") ?></label>
						<input id="apellidop" name="apellidop" type="text" class="form-control" placeholder="Apellido paterno">
					</div>

				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="" class="sr-only"><?php print t("Last Name") ?></label>
						<input id="apellidom" name="apellidom" type="text" class="form-control" placeholder="Apellido materno">
					</div>			
					<div class="form-group col-sm-6">
						<label for="" class="sr-only"><?php print t('E-Mail') ?></label>
						<input id="email" name="email" type="text" class="form-control" placeholder="Email">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="" class="sr-only"><?php print t('Phone') ?></label>
						<input id="telefono" name="telefono" type="text" class="form-control" placeholder="Teléfono">
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
					<button type="submit" class="btn btn-primary btn-lg" onclick="centro_pre();">Enviar</button>
				</div>
			</form>		
		</div>
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



<div id="section-scroll" class="hidden-sm hidden-xs">
  <ul></ul>
  <div class="text-right pv-21 btn-apply animated">
		<?php if ($language->prefix == 'es'): ?>
			<a href="/<?php print $language->prefix ?>/modalidades-de-admision/alto-rendimiento/formulario-de-inscripcion" class="btn btn-primary uppercase"><?php print t('Apply') ?></a>								
		<?php elseif ($language->prefix == 'en'): ?>
			<a href="/<?php print $language->prefix ?>/formulario/high-performance-assessment-aplication-form" class="btn btn-primary uppercase"><?php print t('Apply') ?></a>		
		<?php endif ?>	  
  </div>
</div>


