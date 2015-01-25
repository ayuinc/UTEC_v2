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
				$term2 = taxonomy_term_load($tid);
				$translated_term = i18n_taxonomy_term_get_translation($term2, $langcode);

				$term = taxonomy_vocabulary_machine_name_load('blog_tags');
				$vid = $term->vid;
				$terms = taxonomy_get_tree($vid);
				kpr($translated_term);
			?>
			<?php foreach ($terms as $term): ?>
				<?php $name = $term->name; ?>
				<?php $tid = $term->tid; ?>
		    <li><a href="/blog-tags/<?php print $term->name; ?>"><?php print $name ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>