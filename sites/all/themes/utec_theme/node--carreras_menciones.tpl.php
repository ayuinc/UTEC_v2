<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;
	$cuerpo = $node->body['und']['0']['value'];
	$mencion = $node->field_mencion['und']['0']['value'];
	$electivo = $node->field_electivo['und'];
	
	print_r($node);
?>
<div class="container-sm">
	<h1 class="light">Menciones</h1>
	<div class="separator-gray separator-sm"></div>
	<h3><?php print $cuerpo ?></h3>
	<div class="pv-ch-42">
		<div class="table-responsive table-custom pv-42">
			<table class="table">
				<thead>
					<tr>
						<td>Mención</td>
						<td>Electivo</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($electivo as $key => $value) : ?>
					<tr>
						<td class="highlight text-center"><?php print $mencion ?></td>
						<td><?php print $value['value'] ?></td>
					</tr>
					<?php endforeach; ?>	
				</tbody>
			</table>
		</div>
	</div>
</div>

