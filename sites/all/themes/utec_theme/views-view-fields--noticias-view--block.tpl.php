<?php 
	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_imagen']->content;
	$category = $fields['field_categor_a']->content;
	$texto_corto = $fields['field_texto_corto']->content;
	$path = $fields['path']->content;
	global $count;
?>
<?php //print_r($zebra) ?>
<?php if ($zebra == 'odd') :?>
<div class="banner row mb-56 ml-0" data-href="<?php print $path; ?>">
	<div class="col-sm-3 banner-pic" style="background-image: url(<?php print $image ?>);">
		<div class="banner-label bg-gray-darker text-white"><span><?php print $category ?></span></div>
	</div>
	<div class="col-sm-9 banner-content">
		<div>
			<h2 class="medium text-gray-dark"><a href="<?php print $path; ?>"><?php print $title ?></a></h2>
			<p class="lead text-gray"><?php print $texto_corto ?></p>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if ($zebra == 'even') :?>
<div class="banner row ml-0 mb-14" data-href="<?php print $path; ?>">
	<div class="col-sm-9 banner-content">
		<div>
			<h2 class="medium text-gray-dark"><a href="<?php print $path; ?>"><?php print $title ?></a></h2>
			<p class="lead text-gray"><?php print $texto_corto ?></p>
		</div>
	</div>
	<div class="col-sm-3 banner-pic" style="background-image: url(<?php print $image ?>);">
		<div class="banner-label bg-gray-darker text-white"><span><?php print $category ?></span></div>
	</div>
</div>
<?php endif; ?>