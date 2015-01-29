<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/centro-pre-interna/');

	$titulo = $node->title;
	$cuerpo = $node->body['und']['0']['value'];
	$dia = $node->field_dia['und']['0']['value'];
	$mes = $node->field_mes['und']['0']['value'];
	$lugar = $node->field_lugar['und']['0']['value'];

?>

<div class="container-sm">
	<h1 class="light"><?php print $titulo ?></h1>
	<div class="separator-gray separator-sm"></div>
	<div class="pv-ch-14 p-ch-gray mb-42">
		<?php print $cuerpo ?>
	</div>
	<div class="pv-ch-21">
		<div class="list-custom-left normalize-text lead-ch mb-ch-21">
		  <?php if ($dia != '') { ?>				
			<ul>
				<li class="bg-gray text-white uppercase text-center p-21">
					<?php print t('Day') ?>
				</li>
				<li class="pl-21">
					<p><?php print $dia ?></p>
				</li>
			</ul>
			<?php } ?>
		  <?php if ($mes != '') { ?>			
			<ul>
				<li class="bg-gray text-white uppercase text-center p-21">
					<?php print t('Month') ?>
				</li>
				<li class="pl-21">
					<p><?php print $mes ?></p>
				</li>
			</ul>
			<?php } ?>
		  <?php if ($lugar != '') { ?>
			<ul>
				<li class="bg-gray text-white uppercase text-center p-21">
					<?php print t('Place') ?>
				</li>
				<li class="pl-21">
					<p><?php print $lugar ?></p>
				</li>
			</ul>
			<?php } ?>
		</div>
	</div>
</div>

