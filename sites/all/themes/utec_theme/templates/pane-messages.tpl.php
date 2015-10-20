<?php if (!empty($tabs)): ?>
  <?php print render($tabs); ?>
<?php endif; ?>

<?php if ($action_links): ?>
  <ul class="action-links">
    <?php print render($action_links); ?>
  </ul>
<?php endif; ?>

<?php if (!empty($messages)): ?>
  <?php //print $messages; ?>
	<!-- Button trigger modal -->
	<button style="display:none" id="button" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  Launch demo modal
	</button>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h1 class="modal-title medium text-center" id="myModalLabel">Thanks for contacting us</h1>
	      </div>
	      <div class="modal-body text-center">
	      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
	      	<a href="#" class="text-primary">Back to homepage</a>
				  <?php 
				  	$node = node_load(1382);
				  	$title = $node->title;
				  	$description = $node->body['und']['0']['value'];
				  	// print_r($variables);

				  	print_r($node);
				  ?>
	        <?php $path_i18 = drupal_get_path_alias('', $language->language); ?>
	        <div class="carlos"><?php print $variables['page']['content']['metatags']['global']['og:title']; ?></div>
	        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php print $url.'/'.$language->language.'/'.$path_i18; ?>"><img src="$directory/sites/all/themes/utec_theme/assets/img/facebook.png"></a>
	      	<a href="https://twitter.com/home?status=<?php print $og_description ?>"><img src="$directory/sites/all/themes/utec_theme/assets/img/twitter.png"></a>
	      	<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php print $url.'/'.$language->language.'/'.$path_i18; ?>&title=<?php print $og_title ?>&summary=&source="><img src="$directory/sites/all/themes/utec_theme/assets/img/linkedin.png"></a>
	      	<a href="https://plus.google.com/share?url=<?php print $url ?>"><img src="$directory/sites/all/themes/utec_theme/assets/img/gplus.png"></a>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
<?php endif; ?>

<?php if (!empty($help)): ?>
  <?php print $help; ?>
<?php endif; ?>
