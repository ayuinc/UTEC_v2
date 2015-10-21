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
  <?php 
  	$node = node_load(1382);
  	$title = $node->title;
  	$description = $node->field_link['und']['0']['value'];
  	$twitter = $node->field_link['und']['0']['value'];
  	// print_r($variables);

  	// kpr($node);
  	$path_img = $directory.'/assets/img/';
  ?>
	<!-- Button trigger modal -->
	<button style="display:none" id="button" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  Launch demo modal
	</button>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h1 class="modal-title medium text-center mt-56 lead" id="myModalLabel"><?php print $title; ?></h1>
	      </div>
	      <div class="modal-body text-center php-21">
	      	<p class="mb-21"><?php print $description; ?></p>
	      	<a href="#" class="text-primary">Back to homepage</a>
	      	<h4 class="text-center mv-21 medium">Share your experience</h4>
				  
	        <?php $path_i18 = drupal_get_path_alias('', $language->language); ?>
	        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php print $url.'/'.$language->language.'/'.$path_i18; ?>"><img src="<?php print $path_img.'facebook.png' ?>"></a>
	      	<a href="https://twitter.com/home?status=<?php print $twitter; ?>"><img src="<?php print $path_img.'twitter.png' ?>"></a>
	      	<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php print $url.'/'.$language->language.'/'.$path_i18; ?>&title=<?php print $og_title ?>&summary=&source="><img src="<?php print $path_img.'linkedin.png' ?>"></a>
	      	<a href="https://plus.google.com/share?url=<?php print $url ?>"><img src="<?php print $path_img.'gplus.png' ?>"></a>
	      </div>
	      <div class="modal-footer pb-42">
	        <a href="#" class="text-gray mh-35 text-uppercase">Lorem ipsum dolor</a>
	        <a href="#" class="text-gray mh-35 text-uppercase">Lorem ipsum dolor</a>
	        <a href="#" class="text-gray mh-35 text-uppercase">Lorem ipsum dolor</a>

	      </div>
	    </div>
	  </div>
	</div>
<?php endif; ?>

<?php if (!empty($help)): ?>
  <?php print $help; ?>
<?php endif; ?>
