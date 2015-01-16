<?php 
// $video_name = $node->field_video['und']['0']['filename'];

$titulo = $node->title;   

?>
<div class="container-sm">
	<h1 class="light">Modalidades de admisión</h1>
	<div class="separator-gray separator-lg"></div>
	<ul class="grid-list grid-list-3 grid-list-hover size sm">
		<li data-href="/admision/modalidades/primeros-puestos">
			<div>
				<h3 class="thin lead lh-lg"><?php print t('Top Academic Rankings') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-primeros-puestos"></i>
				</div>
			</div>
		</li>
		<li data-href="/admision/alto-rendimiento">
			<div>
				<h3 class="thin lead lh-lg"><?php print t('High Performance Assessment') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-alto-rendimiento"></i>
				</div>
			</div>
		</li>
		<li data-href="/admision/modalidades/traslados">
			<div>
				<h3 class="thin lead lh-lg"><?php print t('Transfer') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-traslado"></i>
				</div>
			</div>
		</li>
		<li data-href="/admision/centro-pre">
			<div>
				<h3 class="thin lead lh-lg"><?php print t('Centro PRE') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-centro-pre"></i>
				</div>
			</div>
		</li>
		<li data-href="/admision/bachillerato-internacional">
			<div>
				<h3 class="thin lead lh-lg"><?php print t('International Baccalaureate') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-bachillerato"></i>
				</div>
			</div>
		</li>
		<li data-href="/admision/examen-de-admision">
			<div>
				<h3 class="thin lead lh-lg"><?php print t('Admission Exam') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-examen"></i>
				</div>
			</div>
		</li>
	</ul>
	<h3><?php print t('If you applied via one of these paths, check your results here.') ?></h3>
	<a href="#" class="btn btn-primary btn-lg uppercase see-more"><?php print t('See results here.') ?></a>
</div>


