
<?php global $base_url; ?>
<?php global $theme_path; ?>
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
	<div class="hero-unit"> <!-- HERO -->
	  <div data-section-scroll="Overview" id="que-es" class="section-scroll-content bg-img-block bg-img-block-lg" style="background-image: url(<?php print('/'.$pathfile.$field_fotos_centro_pre)?>);">
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
	<div data-section-scroll="Cursos" class="section-scroll-content pb-0">
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
	<div data-section-scroll="Calendario" class="section-scroll-content pt-0">
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
	<div data-section-scroll="Solicita informacion" class="container-sm section-scroll-content pt-0">
		<div class="container-sm">
			<h3 class="thin lead mb-49"><?php print t('Request information') ?></h3>
			<form action="">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="sr-only"><?php print t('Name:') ?></label>
							<input type="text" class="form-control input-lg" placeholder="*<?php print t('Name:') ?>">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="sr-only"><?php print t('Last Name:') ?></label>
							<input type="text" class="form-control input-lg" placeholder="*<?php print t('Last Name:') ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="sr-only"><?php print t('Phone number:') ?></label>
							<input type="text" class="form-control input-lg" placeholder="*<?php print t('Phone number:') ?>">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="sr-only"><?php print t('School:') ?></label>
							<input type="text" class="form-control input-lg" placeholder="*<?php print t('School:') ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="sr-only"><?php print t('Career of interest:') ?></label>
							<select name="" id="" class="form-control select-override input-lg">
								<option value="Carrera de interés"><?php print t('Career of interest:') ?></option>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="sr-only"><?php print t('E-mail:') ?></label>
							<input type="email" class="form-control input-lg" placeholder="*E-mail">
						</div>
					</div>
				</div>
				<div class="form-group">
					<textarea name="" id="" rows="5" class="form-control input-lg" placeholder="<?php print t('Write a Message') ?>"></textarea>
				</div>
				<p class="help-block ml-70"><?php print t('(*) Required fields') ?>(*) <?php print t('Required fields') ?></p>
				<div class="pv-21 text-right">
					<p class="lead"><?php print t('By clicking here you accept these') ?> <a href="#"><?php print t('') ?><?php print t('conditions') ?></a> <button type="submit" class="btn btn-primary btn-lg"><?php print t('Send') ?></button></p>
				</div>
			</form>
		</div>
	</div>

<div id="section-scroll" class="hidden-sm hidden-xs">
  <ul></ul>
  <div class="text-right pv-21 btn-apply animated">
    <a href="#" class="btn btn-primary uppercase"><?php print t('Apply') ?></a>
  </div>
</div>


