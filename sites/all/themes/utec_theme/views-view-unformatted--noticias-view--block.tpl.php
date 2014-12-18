<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="pv-35" id="noticias">
	<h2 class="lead medium mb-0"><span class="text-gray-darker">Noticias: Al día con la</span> <span class="text-gray">UTEC</span></h2>
	<h4 class="lead mb-56 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
    <?php foreach ($rows as $id => $row): ?>
		    <?php
			    print $row;
		    ?>
		<?php endforeach; ?>
	<div>
		<button class="btn btn-lg btn-primary see-more uppercase">Ver más noticias</button>
	</div>
</div>