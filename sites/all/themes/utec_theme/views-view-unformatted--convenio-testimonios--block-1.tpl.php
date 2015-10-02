<div class="pv-21">
	<div class="container-sm">
		<h2 class="light"><?php print $view->get_title(); ?></h2>
		<div class="separator-gray separator-sm"></div>
			<ul class="grid-list grid-list-3 grid-list-1-xs text-center">
		    <?php foreach ($rows as $id => $row): ?>
			    <?php print $row;?>
		    <?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>


































