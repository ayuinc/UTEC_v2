<?php
	global $language; 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_imagen']->content;
	$category = $fields['field_categor_a']->content;
	$texto_corto = $fields['field_texto_corto']->content;
	$path = $fields['path']->content;
	$user_id = $fields['uid']->content;
	$blogger_id = $fields['field_blogger']->content;
	$blogger = user_load($blogger_id);
	$user_name = $blogger->name;
	$user_image = $blogger->picture->filename;
	$user_charge = $blogger->field_descripci_n['und']['0']['value'];


?>
<div class="pv-21">
	<div class="container">
		
		<?php if ($language->language != 'en'): ?>
		<h3 class="h2 lead medium mb-56"><span class="text-gray-darker">Blog</span> <span class="text-gray">UTEC</span></h3>
		<?php elseif ($language->language == 'en'): ?>
		<h3 class="h2 lead medium mb-56"><span class="text-gray">UTEC</span> <span class="text-gray-darker">Blog</span></h3>
		<?php endif ?>			
		<!--<h4 class="lead mt-0 mb-56">Lorem ipsum sit amet, consectetur adipisicing elit.</h4>-->
		<div class="banner ban-titulo" data-href="<?php print $path; ?>">
			<div class="col-sm-3 banner-pic" style="background-image: url(<?php print $image; ?>);"></div>
			<div class="col-sm-9 banner-content pv-14-xs pt-14-sm">
				<div>
	  			<div class="user-card user-card-round">
	  				<div class="user-pic"><img src="<?php print $pathfile.'pictures/'.$user_image; ?>" alt=""></div>
	  				<div class="user-info"><h4><?php print $user_name; ?></h4><small><?php print $user_charge ?></small></div>
	  			</div>
	  			<h3 class="h2"><a href="<?php print $path; ?>" class="banner-titulo"><?php print $title; ?></a></h3>
					<p class="lead"><?php print $texto_corto; ?></p>
					<div class="text-right pv-14">
					<?php if ($language->language != 'en'): ?>
					<a href="<?php print $path ?>" class="see-more btn btn-lg btn-primary uppercase banner-titulo">Leer más</a>
					<?php elseif ($language->language == 'en'): ?>
					<a href="<?php print $path ?>" class="see-more btn btn-lg btn-primary uppercase banner-titulo">Read more</a>
					<?php endif ?>							
					</div>
				</div>
			</div>
		</div>
	</div>
</div>