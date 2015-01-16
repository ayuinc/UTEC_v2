<?php 
// $video_name = $node->field_video['und']['0']['filename'];

$titulo = $node->title;   
$field_que_es_descripcion_cp = $node->field_que_es_descripcion_cp['und']['0']['value'];
$field_que_es_intro_cp = $node->field_que_es_intro_cp['und']['0']['value'];
$field_calendario_fecha = $node->field_calendario_fecha['und']['0']['value'];
$field_calendario_hora = $node->field_calendario_hora['und']['0']['value'];
$field_calendario_pago = $node->field_calendario_pago['und']['0']['value'];
$field_calendario_lugar = $node->field_calendario_lugar['und']['0']['value'];
$field_inscripcion_pre_extensive = $node->field_inscripcion_pre_extensive['und']['0']['value'];
$field_inscripcion_pre_intensiva = $node->field_inscripcion_pre_intensiva['und']['0']['value'];

?>
<div class="container">
	<div data-section-scroll="Cursos" class="section-scroll-content">
		<h3 class="lead thin text-center ml-70 mr-70"><?php print $field_que_es_intro_cp ?></h3>
		<div class="pt-42 ml-70 mr-70">
			<h3 class="thin lead ml-7"><?php print t('Courses') ?></h3>
			<ul class="grid-list grid-list-4 list-hover list-hover-gray-light">
				<li>
					<div>
						<h3 class="lead"><?php print t('Spatial Intelligence') ?></h3>
						<p><?php print t('Develop skills in Spatial Intelligence, Visualization and Perception.') ?></p>
					</div>
				</li>
				<li>
					<div>
						<h3 class="lead"><?php print t('Physical World') ?></h3>
						<p><?php print t('Develop skills in Spatial Intelligence, Visualization and Perception.') ?></p>
					</div>
				</li>
				<li>
					<div>
						<h3 class="lead"><?php print t('Universe and Materials') ?></h3>
						<p><?php print t('Develop skills in Spatial Intelligence, Visualization and Perception.') ?></p>
					</div>
				</li>
				<li>
					<div>
						<h3 class="lead"><?php print t('Mathematics') ?></h3>
						<p><?php print t('Develop skills in Spatial Intelligence, Visualization and Perception.') ?></p>
					</div>
				</li>
				<li>
					<div>
						<h3 class="lead"><?php print t('Tech Project') ?></h3>
						<p><?php print t('Develop skills in Spatial Intelligence, Visualization and Perception.') ?></p>
					</div>
				</li>
				<li>
					<div>
						<h3 class="lead"><?php print t('Creative Language') ?></h3>
						<p><?php print t('Develop skills in Spatial Intelligence, Visualization and Perception.') ?></p>
					</div>
				</li>
				<li>
					<div>
						<h3 class="lead"><?php print t('Talent Orientation') ?></h3>
						<p><?php print t('Develop skills in Spatial Intelligence, Visualization and Perception.') ?></p>
					</div>
				</li>
				<li>
					<div>
						<h3 class="lead"><?php print t('English') ?></h3>
						<p><?php print t('Develop skills in Spatial Intelligence, Visualization and Perception.') ?></p>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div data-section-scroll="Calendario" class="section-scroll-content">
		<div class="mr-70 ml-70">
			<h3 class="thin lead"><?php print t('Calendar') ?></h3>
			<h4 class="text-gray"><?php print t('Pre intensiva January - February 2015') ?></h4>
			<div class="list-custom-left normalize-text lead-ch mb-ch-21">
				<ul>
					<li class="bg-primary text-white uppercase text-center p-21">
						Fecha
					</li>
					<li class="pl-21">
						<p><?php print $field_calendario_fecha ?></p>
					</li>
				</ul>
				<ul>
					<li class="bg-gray text-white uppercase text-center p-21">
						Hora
					</li>
					<li class="pl-21">
						<p><?php print $field_calendario_hora ?></p>
					</li>
				</ul>
				<ul>
					<li class="bg-gray text-white uppercase text-center p-21">
						Pago
					</li>
					<li class="pl-21">
						<p><?php print $field_calendario_pago ?></p>
					</li>
				</ul>
				<ul>
					<li class="bg-gray text-white uppercase text-center p-21">
						Lugar
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
	<div data-section-scroll="Solicita informacion" class="container-sm section-scroll-content">
		<h3 class="thin lead mb-49 ml-70"><?php print t('Request information') ?></h3>
		<form action="">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="" class="sr-only"><?php print t('Name:') ?></label>
						<input type="text" class="form-control input-lg" placeholder="*Nombres">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="" class="sr-only"><?php print t('Last Name:') ?></label>
						<input type="text" class="form-control input-lg" placeholder="*Apellidos">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="" class="sr-only"><?php print t('Phone number:') ?></label>
						<input type="text" class="form-control input-lg" placeholder="*T-Fijo">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="" class="sr-only"><?php print t('School:') ?></label>
						<input type="text" class="form-control input-lg" placeholder="*Colegio">
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
				<textarea name="" id="" rows="5" class="form-control input-lg" placeholder="Consulta"></textarea>
			</div>
			<p class="help-block ml-70"><?php print t('(*) Required fields') ?>(*) Campos obligatorios</p>
			<div class="pv-21 text-center">
				<p class="lead"><?php print t('By clicking here you accept these') ?><a href="#"><?php print t('') ?><?php print t('conditions') ?></a> <button type="submit" class="btn btn-primary">Enviar</button></p>
			</div>
		</form>
	</div>
</div>


