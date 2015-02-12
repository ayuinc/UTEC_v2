<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/edp-generico/'); ?>

<?php $title = $node->title; ?>  
<?php $field_introduccion_generico_edp = $node->field_introduccion_generico_edp['und']['0']['value']; ?>
<?php $field_contenido_generico_edp = $node->field_contenido_generico_edp['und']['0']['value']; ?>
<?php $field_foto_generico_edp = $node->field_foto_generico_edp['und']['0']['filename']; ?>

<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<?php $end = end((explode('/', $url))); ?>

<div class="container-sm mb-35">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<p class="lead text-gray"><?php print $field_introduccion_generico_edp ?></p>
	<?php if ($field_foto_generico_edp!='') { ?>
		<img src="<?php print('/'.$pathfile.$field_foto_generico_edp)?>" class="img-responsive mb-35" alt="<?php print $title ?>">
	<?php } ?>
	<?php print $field_contenido_generico_edp ?>
	
	<!--SOLO PARA RESPALDO-->
	<?php //if ($end == 'calendario'||$end == 'calendar') { ?>
		<!--<h3 class="mt-35 mb-0">Short courses</h3>
		<div class="table-responsive">
			<table class="table mt-35">
				<thead>
					<tr>
						<td class="medium">Program</td>
						<td class="medium">Speaker</td>
						<td class="medium">Date</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="highlight">Cutoff Grade Optimization in Mining Operations</td>
						<td class="text-gray">Antonio Nieto, PhD</td>
						<td class="text-gray">November 26th, 27th and 28th, 2014</td>
					</tr>
					<tr>
						<td class="highlight">Risk Management in Infrastructure Projects (Completed)​​</td>
						<td class="text-gray">Edgardo Mímica, PhD., Francisco Vallés.</td>
						<td class="text-gray">October 2nd and 3rd, 2014</td>
					</tr>
					<tr>
						<td class="highlight">Intelligent Mining Operations Management and Sustainable Mine Closure (Completed)​</td>
						<td class="text-gray">Thomas Baumgartl, PhD., Mansour Edraki, PhD., Oscar Matallana-Tost, doctorando</td>
						<td class="text-gray">September 3rd, 4th and 5th, 2014</td>
					</tr>																																							
				</tbody>
			</table>
		</div>-->
	<?php //} ?>
</div>