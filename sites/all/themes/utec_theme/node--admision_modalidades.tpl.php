<?php global $language ?>
<?php 
// $video_name = $node->field_video['und']['0']['filename'];

$titulo = $node->title;   
$banner = $node->field_banner['und']['0']['uri']; 
$field_link_a_formulario_es = $node->field_link_a_formulario_es['und']['0']['value'];  
$field_link_formulario_en = $node->field_link_formulario_en['und']['0']['value'];  

?>

<div class="container-sm">
	<?php if ($language->language == 'en'): ?>
		<h1 class="light">Methods of Admission</h1>
	<?php elseif ($language->language  != 'en'): ?>
		<h1 class="light">Modalidades de admisión</h1>
	<?php endif ?>
	<div class="separator-gray separator-lg"></div>
	<?php //if ($banner): ?>
	<!--<img class="img-responsive mb-35" src="<?php print file_create_url($banner); ?>" alt="Modalidades de admisión" />-->
	<?php //endif; ?>
	<ul class="grid-list grid-list-3 grid-list-1-xs grid-list-hover size sm">
		<?php if ($language->language  != 'en'): ?>
		<li data-href="/modalidades-de-admision/primeros-puestos" class="atm-blog text-gray-dark text-hover-white" id="primeros-puestos">
		<?php elseif ($language->language == 'en'): ?>
		<li data-href="/en/methods-of-admission/top-academic-rankings" class="atm-blog text-gray-dark text-hover-white" id="primeros-puestos">
		<?php endif ?>
			<div>
				<?php if ($language->language  != 'en'): ?>
					<a href="/modalidades-de-admision/primeros-puestos">
						<h2 class="thin h4 lead lh-lg"><?php print t('Primeros Puestos') ?></h2>
					</a>
				<?php elseif ($language->language == 'en'): ?>
					<a href="/en/methods-of-admission/top-academic-rankings">
						<h2 class="thin h4 lead lh-lg"><?php print t('Top Academic Rankings') ?></h2>
					</a>
				<?php endif ?>
				<div class="size lg">
					<i class="icon-admisiones-primeros-puestos"></i>
				</div>
			</div>
		</li>
		<?php if ($language->language  != 'en'): ?>
		<li data-href="/modalidades-de-admision/alto-rendimiento" class="atm-blog text-gray-dark text-hover-white" id="alto-rendimiento">
		<?php elseif ($language->language == 'en'): ?>
		<li data-href="/en/methods-of-admission/high-performance-assessment" class="atm-blog text-gray-dark text-hover-white" id="alto-rendimiento">
		<?php endif ?>		
			<div>
				<?php if ($language->language  != 'en'): ?>
					<a href="/modalidades-de-admision/alto-rendimiento">
						<h2 class="thin h4 lead lh-lg"><?php print t('Alto Rendimiento') ?></h2>
					</a>
				<?php elseif ($language->language == 'en'): ?>
					<a href="/en/methods-of-admission/high-performance-assessment">
						<h2 class="thin h4 lead lh-lg"><?php print t('High Performance Assessment') ?></h2>
					</a>
				<?php endif ?>
				<div class="size lg">
					<i class="icon-admisiones-alto-rendimiento"></i>
				</div>
			</div>
		</li>
		<?php if ($language->language  != 'en'): ?>
		<li data-href="/modalidades-de-admision/traslado-externo" class="atm-blog text-gray-dark text-hover-white" id="traslado">
		<?php elseif ($language->language == 'en'): ?>
		<li data-href="/en/methods-of-admission/transfer-students" class="atm-blog text-gray-dark text-hover-white" id="traslado">
		<?php endif ?>				
			<div>
				<?php if ($language->language  != 'en'): ?>
					<a href="/modalidades-de-admision/traslado-externo">
						<h2 class="thin h4 lead lh-lg"><?php print t('Traslado Externo') ?></h2>
					</a>
				<?php elseif ($language->language == 'en'): ?>
					<a href="/en/methods-of-admission/transfer-students">
						<h2 class="thin h4 lead lh-lg"><?php print t('Transfer Students') ?></h2>
					</a>
				<?php endif ?>
				<div class="size lg">
					<i class="icon-admisiones-traslado"></i>
				</div>
			</div>
		</li>
		<?php if ($language->language  != 'en'): ?>
		<li data-href="/modalidades-de-admision/centro-pre" class="atm-blog text-gray-dark text-hover-white" id="centro-pre">
		<?php elseif ($language->language == 'en'): ?>
		<li data-href="/en/methods-of-admission/pre-university-center" class="atm-blog text-gray-dark text-hover-white" id="centro-pre">
		<?php endif ?>			
			<div>
				<?php if ($language->language  != 'en'): ?>
					<a href="/modalidades-de-admision/centro-pre">
						<h2 class="thin h4 lead lh-lg"><?php print t('Centro Pre') ?></h2>
					</a>
				<?php elseif ($language->language == 'en'): ?>
					<a href="/en/methods-of-admission/pre-university-center">
						<h2 class="thin h4 lead lh-lg"><?php print t('Pre University Center') ?></h2>
					</a>
				<?php endif ?>
				<div class="size lg">
					<i class="icon-admisiones-centro-pre"></i>
				</div>
			</div>
		</li>
		<?php if ($language->language  != 'en'): ?>
		<li data-href="/modalidades-de-admision/bachillerato-internacional" class="atm-blog text-gray-dark text-hover-white" id="bachillerato-internacional">
		<?php elseif ($language->language == 'en'): ?>
		<li data-href="/en/methods-of-admission/international-baccalaureate" class="atm-blog text-gray-dark text-hover-white" id="bachillerato-internacional">
		<?php endif ?>		
			<div>
				<?php if ($language->language  != 'en'): ?>
					<a href="/modalidades-de-admision/bachillerato-internacional">
						<h2 class="thin h4 lead lh-lg"><?php print t('Bachillerato Internacional') ?></h2>
					</a>
				<?php elseif ($language->language == 'en'): ?>
					<a href="/en/methods-of-admission/international-baccalaureate">
						<h2 class="thin h4 lead lh-lg"><?php print t('International Baccalaureate') ?></h2>
					</a>
				<?php endif ?>
				<div class="size lg">
					<i class="icon-admisiones-bachillerato"></i>
				</div>
			</div>
		</li>
		<?php if ($language->language  != 'en'): ?>
		<li data-href="/modalidades-de-admision/examen-de-admision" class="atm-blog text-gray-dark text-hover-white" id="examen-de-admision">
		<?php elseif ($language->language == 'en'): ?>
		<li data-href="/en/methods-of-admission/admissions-exam" class="atm-blog text-gray-dark text-hover-white" id="examen-de-admision">
		<?php endif ?>			
			<div>
				<?php if ($language->language  != 'en'): ?>
					<a href="/modalidades-de-admision/examen-de-admision">
						<h2 class="thin h4 lead lh-lg"><?php print t('Admissions Exam') ?></h2>
					</a>
				<?php elseif ($language->language == 'en'): ?>
					<a href="/en/methods-of-admission/admissions-exam">
						<h2 class="thin h4 lead lh-lg"><?php print t('Admissions Exam') ?></h2>
					</a>
				<?php endif ?>
				<div class="size lg">
					<i class="icon-admisiones-examen"></i>
				</div>
			</div>
		</li>
	</ul>
	<h3><?php print t('If you applied via one of these paths, check your results here.') ?></h3>
	<?php if ($language->language  != 'en'): ?>
	<a href="<?php print $field_link_a_formulario_es ?>" class="btn btn-primary btn-lg uppercase see-more mvp-7"><?php print t('See results here.') ?></a>
	<?php elseif ($language->language == 'en'): ?>
	<a href="<?php print $field_link_formulario_en ?>" class="btn btn-primary btn-lg uppercase see-more mvp-7"><?php print t('See results here.') ?></a>
	<?php endif ?>	

</div>


