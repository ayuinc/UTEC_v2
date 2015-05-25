<?php 
	$titulo = $node->title;	 		
	$cuerpo = $node->body['und']['0']['value'];	
	$imagen = $node->field_image['und']['0']['uri'];
	$blogger_name = $node->field_blogger['und']['0']['entity']->name;
	$blogger_cargo = $node->field_blogger['und']['0']['entity']->field_descripci_n['und']['0']['value'];
	$created = $node->created;
	$formatted = format_date($created, 'custom', t('j F Y', array(), array('context' => 'php date format')));
	$addblock = module_invoke('addthis','block_view','addthis_block');
?>
<h1 class="lead h3">
	<?php print $title ?>
</h1>
<div>
	<em class="h5"><?php print $blogger_name ?></em><br><span class="text-gray"><?php print $blogger_cargo ?></span>
</div>
<div class="flex-space-between">
	<div class="left">
		<em class="text-gray-light"><?php print t('Posted : ').$formatted ?></em>
	</div>
	<div class="right">
		<ul class="social-links">
			<!-- Go to www.addthis.com/dashboard to customize your tools -->
			<div class="addthis_sharing_toolbox"></div>
		</ul>
	</div>
</div>
<?php if($imagen!='') : ?>
<!-- <img class="img-responsive" src="<?php print '/'.$pathfile.'blog/'.$imagen ?>" alt="#"> -->
<img class="img-responsive" src="<?php print image_style_url($image_style, $imagen); ?>" alt="<?php print $title ?>" />
<?php endif ?>
<h2 class="lead h3"><?php //print $title ?></h2>
<p><?php print $cuerpo ?></p>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54b856007af4c9e3" async="async"></script>
