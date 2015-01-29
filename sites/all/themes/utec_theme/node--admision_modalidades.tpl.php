<?php global $language ?>
<?php 
// $video_name = $node->field_video['und']['0']['filename'];

$titulo = $node->title;   
$banner = $node->field_banner['und']['0']['uri'];  

?>
<div class="container-sm">
	<?php if ($language->language == 'en'): ?>
		<h1 class="light">Methods of Admission</h1>
	<?php elseif ($language->language  != 'en'): ?>
		<h1 class="light">Modalidades de admisión</h1>
	<?php endif ?>
	<div class="separator-gray separator-lg"></div>
	<?php if ($banner): ?>
	<img class="img-responsive mb-35" src="<?php print file_create_url($banner); ?>" alt="Modalidades de admisión" />
	<?php endif; ?>
	<ul class="grid-list grid-list-3 grid-list-1-xs grid-list-hover size sm">
		<?php if ($language->language  != 'en'): ?>
		<li data-href="/modalidades-de-admision/primeros-puestos" class="atm-blog" id="primeros-puestos">
		<?php elseif ($language->language == 'en'): ?>
		<li data-href="/en/methods-of-admission/top-academic-rankings" class="atm-blog" id="primeros-puestos">
		<?php endif ?>
			<div>
				<h3 class="thin lead lh-lg"><?php print t('Top Academic Rankings') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-primeros-puestos"></i>
				</div>
			</div>
		</li>
		<?php if ($language->language  != 'en'): ?>
		<li data-href="/modalidades-de-admision/alto-rendimiento" class="atm-blog" id="alto-rendimiento">
		<?php elseif ($language->language == 'en'): ?>
		<li data-href="/en/methods-of-admission/high-performance-assessment" class="atm-blog" id="alto-rendimiento">
		<?php endif ?>		
			<div>
				<h3 class="thin lead lh-lg"><?php print t('High Performance Assessment') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-alto-rendimiento"></i>
				</div>
			</div>
		</li>
		<?php if ($language->language  != 'en'): ?>
		<li data-href="/modalidades-de-admision/traslado-externo" class="atm-blog" id="traslado">
		<?php elseif ($language->language == 'en'): ?>
		<li data-href="/en/methods-of-admission/transfer-from-other-universities" class="atm-blog" id="traslado">
		<?php endif ?>				
			<div>
				<h3 class="thin lead lh-lg"><?php print t('Transfer') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-traslado"></i>
				</div>
			</div>
		</li>
		<?php if ($language->language  != 'en'): ?>
		<li data-href="/modalidades-de-admision/centro-pre" class="atm-blog" id="centro-pre">
		<?php elseif ($language->language == 'en'): ?>
		<li data-href="/en/methods-of-admission/pre-university-center" class="atm-blog" id="centro-pre">
		<?php endif ?>			
			<div>
				<h3 class="thin lead lh-lg"><?php print t('Pre University Center') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-centro-pre"></i>
				</div>
			</div>
		</li>
		<?php if ($language->language  != 'en'): ?>
		<li data-href="/modalidades-de-admision/bachillerato-internacional" class="atm-blog" id="bachillerato-internacional">
		<?php elseif ($language->language == 'en'): ?>
		<li data-href="/en/methods-of-admission/international-baccalaureate" class="atm-blog" id="bachillerato-internacional">
		<?php endif ?>		
			<div>
				<h3 class="thin lead lh-lg"><?php print t('International Baccalaureate') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-bachillerato"></i>
				</div>
			</div>
		</li>
		<?php if ($language->language  != 'en'): ?>
		<li data-href="/modalidades-de-admision/examen-de-admision" class="atm-blog" id="examen-de-admision">
		<?php elseif ($language->language == 'en'): ?>
		<li data-href="/en/methods-of-admission/admission-exam" class="atm-blog" id="examen-de-admision">
		<?php endif ?>			
			<div>
				<h3 class="thin lead lh-lg"><?php print t('Admission Exam') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-examen"></i>
				</div>
			</div>
		</li>
	</ul>
	<h3><?php print t('If you applied via one of these paths, check your results here.') ?></h3>
	<a href="https://utec.desire2learn.com/" target="_blank" class="btn btn-primary btn-lg uppercase see-more mvp-7"><?php print t('See results here.') ?></a>
</div>


