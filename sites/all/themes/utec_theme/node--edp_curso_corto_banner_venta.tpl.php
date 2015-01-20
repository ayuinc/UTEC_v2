<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$imagen = $node->field_banner['und']['0']['filename'];

	// print_r($node);
?>

<div class="lead-ch p-ch-gray">
	<div id="carousel-custom" class="carousel carousel-custom slide mb-42" data-ride="carousel">
		<!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	  	<div class="item active">
		  	<div class="banner banner-label-bottom mb-14 ml-0">
					<div class="banner-pic" style="background-image: url(/sites/default/files/<?php print $image ?>);">
					</div>
				</div>
		  </div>
		</div>
	</div>
</div>
