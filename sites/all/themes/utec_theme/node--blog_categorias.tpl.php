<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>	

<div class="sidebar-block">
	<div>
		<div class="title">
			
			<?php if ($language->language != 'en'): ?>
			<h3>Explora<br><span>por</span> temas</h3>
			<?php elseif ($language->language == 'en'): ?>
			<h3>Explore<br><span>by</span> topics</h3>
			<?php endif ?>				
		</div>
		<ul class="categories-list">
			<?php 
				$term = taxonomy_vocabulary_machine_name_load('blog_tags');
				$vid = $term->vid;
				$terms = taxonomy_get_tree($vid);
				//print_r($terms);
			?>
			<?php foreach ($terms as $term): ?>
				<?php $name = $term->name; ?>
				<?php $tid = $term->tid; ?>
		    <li><a href=""><?php print $name ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>