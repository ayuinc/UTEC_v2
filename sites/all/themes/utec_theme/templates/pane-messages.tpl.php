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
	        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      </div>
	      <div class="modal-body">
				  <?php 
				  	$node = node_load(1382);
				  	$title = $node->title;
				  	$description = $node->body['und']['0']['value'];
				  	print_r($variables);
				  ?>
	        <?php $path_i18 = drupal_get_path_alias('', $language->language); ?>
	        <div class="carlos"><?php print $variables['page']['content']['metatags']['global']['og:title']; ?></div>
	        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php print $url.'/'.$language->language.'/'.$path_i18; ?>">Share on Facebook</a>
	      	<a href="https://twitter.com/home?status=<?php print $og_description ?>">Share on Twitter</a>
	      	<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php print $url.'/'.$language->language.'/'.$path_i18; ?>&title=<?php print $og_title ?>&summary=&source=">Share on LinkedIn</a>
	      	<a href="https://plus.google.com/share?url=<?php print $url ?>">Share on Google+</a>
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
