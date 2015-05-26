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
