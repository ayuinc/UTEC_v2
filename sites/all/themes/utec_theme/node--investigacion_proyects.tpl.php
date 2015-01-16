<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/investigacion-proyectos');

	$titulo = $node->title;
	$tags = $node->field_tags['und']['0']['value'];		 		
	$profesor = $node->field_profesor['und']['0']['value'];		 		
	$field_pdf_proyectos= $node->field_pdf_proyectos['und']['0']['value']['filename'];
	
	print_r($node->tags);
?>


<!--<div>
	<img src="<?php print $pathfile.$image; ?>" alt="#" class="img-responsive">
</div>-->
<div class="pb-7">
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
		<div><span class="lead bold">Profesor: </span><span class="lead"><?php print $profesor ?></span></div>
	<?php } ?>
	<?php if ($tags!='') { ?>
		<div><span class="lead bold">Tags: </span><span class="lead"><?php print $tags ?></span></div>
	<?php } ?>
</div>


