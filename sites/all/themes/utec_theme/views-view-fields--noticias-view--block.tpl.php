<?php 

	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_image']->content;
	$category = $fields['field_cate']->content;
	$texto_corto = $fields['field_texto_corto']->content;
	$path = $fields['path']->content;
	$dest = $fields['field_destacado']->content;

?>
<?php //print_r($zebra) ?>
<div class="mb-ch-14">
		<?php if ($zebra == 'odd') :?>
		<div class="banner ban-titulo" data-href="<?php print $path; ?>">
			<div class="col-sm-3 banner-pic" style="background-image: url(<?php print $image ?>);">
				<div class="banner-label bg-gray-darker text-white"><span><?php print $category ?></span></div>
			</div>
			<div class="col-sm-9 banner-content">
				<div>
					<h3 class="h2 medium text-gray-dark"><a href="<?php print $path; ?>" class="banner-titulo"><?php print $title ?></a></h3>
					<p class="lead text-gray"><?php print $texto_corto ?></p>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if ($zebra == 'even') :?>
		<div class="banner hidden-xs ban-titulo" data-href="<?php print $path; ?>">
			<div class="col-sm-9 banner-content">
				<div>
					<h3 class="h2 medium text-gray-dark"><a href="<?php print $path; ?>" class="banner-titulo"><?php print $title ?></a></h3>
					<p class="lead text-gray"><?php print $texto_corto ?></p>
				</div>
			</div>
			<div class="col-sm-3 banner-pic" style="background-image: url(<?php print $image ?>); min-height: 299px;">
				<div class="banner-label bg-gray-darker text-white"><span><?php print $category ?></span></div>
			</div>
		</div>
		<?php endif; ?>
</div>