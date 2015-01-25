<?php
global $language;
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
				$tree = taxonomy_get_tree($vid);
			?>
			<?php foreach ($tree as $term): ?>
				<?php $name = $term->name; ?>
				<?php $tid = $term->tid; ?>
				<?php if (module_exists('i18n_taxonomy')) : ?> 
			    <?php $term = i18n_taxonomy_localize_terms($term); ?>
			    <li><a href="/blog-tags/<?php print $term->name; ?>"><?php print $name ?></a></li>
					kpr($term);
			  <?php endif ?>
			<?php endforeach; ?>
		</ul>
	</div>
</div>