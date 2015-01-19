<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/investigacion-proyectos');

	$titulo = $node->title;
	$tags = $node->field_tags['und'];		 		
	$profesor = $node->field_profesor['und']['0']['entity']->name;		 		
	$field_pdf_proyectos= $node->field_pdf_proyectos['und']['0']['value']['filename'];
	
	//print_r($node->field_tags);
?>


<!--<div>
	<img src="<?php print $pathfile.$image; ?>" alt="#" class="img-responsive">
</div>-->
<li>
	<h3>
		<?php if ($field_pdf_proyectos!='') { ?>
		<a href="<?php print $field_pdf_proyectos ?>" target="_blank">
		<?php } ?>
			<?php print $title ?>
		<?php if ($field_pdf_proyectos!='') { ?>
		</a>
		<?php } ?>
	</h3>
	<?php if ($profesor!='') { ?>
		<p>
			<span class="lead bold">Profesor: </span><span class="lead"><?php print profesor ?></span>
		</p>
	<?php } ?>
	<?php if ($tags!='') { ?>
		<p class="small text-gray-light">
			<span class="lead bold">Tags: </span>
			<?php foreach ($tags as $key => $value) : ?>
				<span class="lead"><?php print $value['taxonomy_term']->name; ?> -</span>
			<?php endforeach; ?>
		</p>
	<?php } ?>
</li>



