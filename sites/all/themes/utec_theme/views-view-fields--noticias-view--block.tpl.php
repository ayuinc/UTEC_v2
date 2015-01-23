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
<div class="mb-ch-14">
<?php if ($zebra == 'odd') :?>
	<div class="banner" data-href="<?php print $path; ?>">
		<div class="col-sm-3 banner-pic" style="background-image: url(<?php print $image ?>);">
			<div class="banner-label bg-gray-darker text-white">
				<?php if ($catgory=='Institucional') { ?>
					<span><?php print t('Institutional') ?></span>
				<?php } else { ?>
					<span><?php print t('Innovation') ?></span>	
				<?php } ?>
			</div>
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
	<div class="banner hidden-xs" data-href="<?php print $path; ?>">
		<div class="col-sm-9 banner-content">
			<div>
				<h2 class="medium text-gray-dark"><a href="<?php print $path; ?>"><?php print $title ?></a></h2>
				<p class="lead text-gray"><?php print $texto_corto ?></p>
			</div>
		</div>
		<div class="col-sm-3 banner-pic" style="background-image: url(<?php print $image ?>); min-height: 299px;">
			<div class="banner-label bg-gray-darker text-white">
				<?php if ($catgory=='Institucional') { ?>
					<span><?php print t('Institutional') ?></span>
				<?php } else { ?>
					<span><?php print t('Innovation') ?></span>	
				<?php } ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>