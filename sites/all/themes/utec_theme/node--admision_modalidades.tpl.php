<?php global $language ?>
<?php 
// $video_name = $node->field_video['und']['0']['filename'];

$titulo = $node->title;   

?>
<div class="container-sm">
	<?php if ($language->prefix == 'en'): ?>
		<h1 class="light">Admissions</h1>
	<?php elseif ($language->prefix == 'es'): ?>
		<h1 class="light">Modalidades de admisión</h1>
	<?php endif ?>
	<div class="separator-gray separator-lg"></div>
	<ul class="grid-list grid-list-3 grid-list-1-xs grid-list-hover size sm">
		<?php if ($language->prefix == 'es'): ?>
		<li data-href="/modalidades-de-admision/primeros-puestos">
		<?php elseif ($language->prefix == 'en'): ?>
		<li data-href="/methods-of-admission/top-academic-rankings">
		<?php endif ?>
			<div>
				<h3 class="thin lead lh-lg"><?php print t('Top Academic Rankings') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-primeros-puestos"></i>
				</div>
			</div>
		</li>
		<?php if ($language->prefix == 'es'): ?>
		<li data-href="/modalidades-de-admision/alto-rendimiento">
		<?php elseif ($language->prefix == 'en'): ?>
		<li data-href="/methods-of-admission/high-performance-assessment">
		<?php endif ?>		
			<div>
				<h3 class="thin lead lh-lg"><?php print t('High Performance Assessment') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-alto-rendimiento"></i>
				</div>
			</div>
		</li>
		<?php if ($language->prefix == 'es'): ?>
		<li data-href="/modalidades-de-admision/traslados">
		<?php elseif ($language->prefix == 'en'): ?>
		<li data-href="/methods-of-admission/transfer-from-other-universities">
		<?php endif ?>				
			<div>
				<h3 class="thin lead lh-lg"><?php print t('Transfer') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-traslado"></i>
				</div>
			</div>
		</li>
		<?php if ($language->prefix == 'es'): ?>
		<li data-href="/modalidades-de-admision/centro-pre">
		<?php elseif ($language->prefix == 'en'): ?>
		<li data-href="methods-of-admission/pre-university-center">
		<?php endif ?>			
			<div>
				<h3 class="thin lead lh-lg"><?php print t('Pre University Center') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-centro-pre"></i>
				</div>
			</div>
		</li>
		<?php if ($language->prefix == 'es'): ?>
		<li data-href="/modalidades-de-admision/bachillerato-internacional">
		<?php elseif ($language->prefix == 'en'): ?>
		<li data-href="/methods-of-admission/international-baccalaureate">
		<?php endif ?>		
			<div>
				<h3 class="thin lead lh-lg"><?php print t('International Baccalaureate') ?></h3>
				<div class="size lg">
					<i class="icon-admisiones-bachillerato"></i>
				</div>
			</div>
		</li>
		<?php if ($language->prefix == 'es'): ?>
		<li data-href="/modalidades-de-admision/examen-de-admision">
		<?php elseif ($language->prefix == 'en'): ?>
		<li data-href="/methods-of-admission/admission-exam">
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


