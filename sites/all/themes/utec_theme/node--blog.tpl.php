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
	$share_blog = $node->field_share_blog['und']['0']['value'];

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
			<?php print _addthis_create_button($node); ?>
			<!-- <div class="addthis_toolbox addthis_default_style"
				addthis:title="<?php $share_blog[0]["attributes"]["addthis:title"]; ?>"
				addthis:url="<?php $share_blog[0]["attributes"]["addthis:url"]; ?>">
				<a href="http://www.addthis.com/bookmark.php?v=300" class="addthis_button_facebook at300b" title="Facebook">
					<span class="at16nc at300bs at15nc at15t_facebook at16t_facebook"><span class="at_a11y">Share on facebook</span></span>
				</a>
				<a href="http://www.addthis.com/bookmark.php?v=300" class="addthis_button_twitter at300b" title="Tweet">
				<span class="at16nc at300bs at15nc at15t_twitter at16t_twitter"><span class="at_a11y">Share on twitter</span></span>
				</a>
				<div class="atclear"></div>
			</div> -->
		</ul>
	</div>
</div>
<img class="img-responsive" src="<?php print '/'.$pathfile.'blog/'.$imagen ?>" alt="#">
<h3 class="lead"><?php //print $title ?></h3>
<p><?php print $cuerpo ?></p>

