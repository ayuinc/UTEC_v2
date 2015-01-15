<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;
	$tags = $node->field_tags['und']['0']['value'];		 		
	$profesor = $node->field_profesor['und']['0']['value'];		 		
	$image = $node->field_image['und']['0']['value']['filename'];
	
	print_r($node->tags);
?>

<li>
	<div>
		<img src="<?php print $pathfile.$image; ?>" alt="#" class="img-responsive">
	</div>
	<div>
		<h3 class="bold"><?php print $title ?></h3>
		<h3><?php print $profesor ?></h3>
		<h3><?php print $tags ?></h3>
	</div>
</li>



