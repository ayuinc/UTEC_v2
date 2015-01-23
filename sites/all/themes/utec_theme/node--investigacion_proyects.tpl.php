<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/investigacion-proyectos');

	$titulo = $node->title;
	$tags = $node->field_tags['und'];		 		
	// $profesor = $node->field_profesor['und']['0']['entity']->name;		 		
	$profesor = $node->field_profesor['und'];		
	$texto_intro = $node->field_texto_inttroduccion['und']['0']['value']; 		
	$field_pdf_proyectos= $node->field_pdf_proyectos['und']['0']['value']['filename'];
	
	//print_r($node->field_tags);
?>


<!--<div>
	<img src="<?php print $pathfile.$image; ?>" alt="#" class="img-responsive">
</div>-->
<?php $count = 0;?>
<?php if ($count == 0) : ?>
	<li style="width:100%"><?php print $texto_intro ?></li>
	<?php $count++; ?>
<?php endif ?>
<li>
	<h4 class="mb-14">
		<?php if ($field_pdf_proyectos!='') { ?>
		<a href="<?php print $field_pdf_proyectos ?>" target="_blank">
		<?php } ?>
			<?php print $title ?>
		<?php if ($field_pdf_proyectos!='') { ?>
		</a>
		<?php } ?>
	</h4>
	<?php if ($profesor!='') { ?>
		<p>
			<span class="lead bold">Profesor: </span>
			<?php $count = 0; ?>
			<?php foreach ($profesor as $key => $value): ?>
			<?php if ($count > 0): ?>
				-
			<?php endif ?>
			<span class="lead"><?php print $value['entity']->name; ?></span>
			<?php $count++; ?>
			<?php endforeach ?>
		</p>
	<?php } ?>
	<?php if ($tags!='') { ?>
		<p class="small text-gray-light">
			<span class="bold"></span>
			<?php $count = 0; ?>
			<?php foreach ($tags as $key => $value) : ?>
			<?php if ($count > 0): ?>
				-
			<?php endif ?>
			<span><?php print $value['taxonomy_term']->name; ?></span>
			<?php $count++; ?>
			<?php endforeach; ?>
		</p>
	<?php } ?>
</li>



