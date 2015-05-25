<?php 

	$titulo = $node->title;
	$tags = $node->field_tags['und'];		 		
	$profesor = $node->field_profesor['und'];		
	$field_pdf_proyectos= $node->field_pdf_proyectos['und']['0']['value']['filename'];

?>

<li data-href="<?php print $field_pdf_proyectos ?>">
	<h4 class="mb-14">
		<?php if ($field_pdf_proyectos!='') { ?>
		<a href="<?php print $field_pdf_proyectos ?>" class="banner-titulo" target="_blank">
		<?php } ?>
			<?php print $title ?>
		<?php if ($field_pdf_proyectos!='') { ?>
		</a>
		<?php } ?>
	</h4>
	<?php if ($profesor!='') { ?>
		<p>
			<span class="lead bold"><?php print t('Teacher:') ?></span>
			<?php $count = 0; ?>
			<?php foreach ($profesor as $key => $value): ?>
			<?php if ($count > 0): ?>
				-
			<?php endif ?>
			<span class="lead"><?php print $value['entity']->name; ?></span>
			<?php $count++; ?>
			<?php endforeach ?>
		</p>
	<?php } ?>
	<?php if ($tags!='') { ?>
		<p class="small text-gray-light">
			<span class="bold"></span>
			<?php $count = 0; ?>
			<?php foreach ($tags as $key => $value) : ?>
			<?php if ($count > 0): ?>
				-
			<?php endif ?>
			<span><?php print $value['taxonomy_term']->name; ?></span>
			<?php $count++; ?>
			<?php endforeach; ?>
		</p>
	<?php } ?>
</li>



