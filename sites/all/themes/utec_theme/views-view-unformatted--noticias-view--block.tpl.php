<?php
/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="pv-28" id="noticias">
	<div class="container">
			<h2 class="lead h3 medium mb-0"><span class="text-gray-darker"><?php print $view->get_title(); ?></span></h2>
			<h4 class="lead mb-56 mt-0"><?php print t($view->display['block']->display_options['header']['area']['content']); ?></h4>
			<?php //global $count; ?>
	    <?php foreach ($rows as $id => $row): ?>
			    <?php print $row; ?>
			<?php endforeach; ?>
		<div>
			<?php if ($language->language != 'en'): ?>
				<a href="/noticias" data-href="/noticias" class="btn btn-lg btn-primary see-more uppercase"><?php print t('More news') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/en/news" data-href="/en/news" class="btn btn-lg btn-primary see-more uppercase"><?php print t('More news') ?></a>
			<?php endif ?>
		</div>
	</div>
</div>
