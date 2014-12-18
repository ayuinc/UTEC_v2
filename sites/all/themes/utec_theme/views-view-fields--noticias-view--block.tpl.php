<?php //die(print_r($fields)); ?>
<?php 
	// kpr($fields); 
	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_imagen']->content;
	$category = $fields['field_categor_a']->content;
	$texto_corto = $fields['field_texto_corto']->content;
	$count = 0;
?>
<?php if ($count == 0) :?>
<div class="banner row mb-14 ml-0" data-href="//link">
	<div class="col-sm-3 banner-pic" style="background-image: url(<?php print $image ?>);">
		<div class="banner-label bg-gray-darker text-white"><span><?php print $category ?></span></div>
	</div>
	<div class="col-sm-9 banner-content">
		<div>
			<h2><a href="#"><?php print $title ?></a></h2>
			<p class="lead"><?php print $texto_corto ?></p>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if ($count == 1) :?>
<div class="banner row ml-0 mb-14" data-href="//link">
	<div class="col-sm-9 banner-content">
		<div>
			<h2><a href="#"><?php print $title ?></a></h2>
			<p class="lead"><?php print $texto_corto ?></p>
		</div>
	</div>
	<div class="col-sm-3 banner-pic" style="background-image: url(<?php print $image ?>);">
		<div class="banner-label bg-gray-darker text-white"><span><?php print $category ?></span></div>
	</div>
</div>
<?php endif; ?>
<?php $count = 1; ?>