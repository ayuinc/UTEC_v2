<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="pv-28" id="noticias">
	<h3 class="lead medium mb-0"><span class="text-gray-darker"><?php print t('New: Up to date with') ?></span> <span class="text-gray">UTEC</span></h3>
	<h4 class="lead mb-56 mt-0"><a href="/somos-utec/noticias" data-href="/somos-utec/noticias"><?php print t('We encourage entrepreneurship and innovation.') ?></a></h4>
		<?php //global $count; ?>
    <?php foreach ($rows as $id => $row): ?>
		    <?php
		    	$count = 0;
			    print $row;
			    $count = 1;
		    ?>
		<?php endforeach; ?>
</div>
