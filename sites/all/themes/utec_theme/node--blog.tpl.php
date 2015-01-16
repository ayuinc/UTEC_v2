<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;	 		
	$cuerpo = $node->body['und']['0']['value'];	
	$imagen = $node->field_imagen['und']['0']['filename'];
	$blogger_name = $node->field_blogger['und']['0']['entity']->name;
	$blogger_cargo = $node->field_blogger['und']['0']['entity']->field_descripci_n['und']['0']['value'];
	$created = date('d F Y', strtotime($node->created));
	$addblock = module_invoke('addthis','block_view','addthis_block');

	// print_r($node);
?>

<h3 class="lead"><?php print $title ?></h3>
<div>
	<em class="h5"><?php print $blogger_name ?></em><br><span class="text-gray"><?php print $blogger_cargo ?></span>
</div>
<div class="flex-space-between">
	<div class="left">
		<em class="text-gray-light"><?php print t('Posted : ').$created ?></em>
	</div>
	<div class="right">
		<ul class="social-links">
			<!-- Go to www.addthis.com/dashboard to customize your tools -->
			<div class="addthis_sharing_toolbox"></div>
		</ul>
	</div>
</div>
<img class="img-responsive" src="<?php print '/'.$pathfile.'blog/'.$imagen ?>" alt="#">
<h3 class="lead"><?php //print $title ?></h3>
<p><?php print $cuerpo ?></p>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54b856a63c788032" async="async"></script>
