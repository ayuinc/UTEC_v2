<?php 
	kpr($fields); 
	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_imagen']->content;
	$category = $fields['field_categor_a']->content;
	$texto_corto = $fields['field_texto_corto']->content;
	$path = $fields['path']->content;
	$user_id = $fields['uid']->content;

	global $user;
	$user_fields = user_load($user_id);
	$user_name = $user->name;
	$user_image = $user->picture;
?>
<div class="pv-21">
	<h2 class="lead medium mb-0"><span class="text-gray-darker">Blog</span> <span class="text-gray">UTEC</span></h2>
	<h4 class="lead mt-0 mb-56">Lorem ipsum sit amet, consectetur adipisicing elit.</h4>
	<div class="banner row ml-0" data-href="<?php print $path; ?>">
		<div class="col-sm-3 banner-pic" style="background-image: url(<?php print $image; ?>);"></div>
		<div class="col-sm-9 banner-content">
			<div>
  			<div class="user-card user-card-round">
  				<div class="user-pic"><img src="<?php print $user_image; ?>" alt=""></div>
  				<div class="user-info"><h4><?php print $user_name; ?></h4><small>Ingeniero Mecánico</small></div>
  			</div>
  			<h2><a href="#"><?php print $title; ?></a></h2>
				<p class="lead"><?php print $texto_corto; ?></p>
				<div class="text-right pv-14">
					<button class="see-more btn btn-lg btn-primary uppercase">Leer más</button>
				</div>
			</div>
		</div>
	</div>
</div>