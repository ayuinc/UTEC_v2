<?php

	$title = $node->title; 
	$field_introduccion_su_profesores = $node->field_introduccion_su_profesores['und']['0']['value']; 

?>

<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<p class="lead text-gray"><?php print $field_introduccion_su_profesores ?></p>
	<ul class="grid-list grid-list-3 grid-list-1-xs isotope-grid grid-list-item-height grid-list-anchors pv-21 text-center">
    <?php foreach ($node->field_lista_profesores['und'] as $key => $value) :?>
    <?php $name = $value['entity']->name; ?>   
    <?php $status = $value['entity']->status; ?>   
		<?php $pic = $value['entity']->picture->filename; ?>
		<?php $uid = $value['entity']->uid; ?>
    <?php $desc = $value['entity']->field_descripci_n['und'][0]['value']; ?>		
    <?php $desc_ingles = $value['entity']->field_descripci_n_ingles['und']['0']['value']; ?>
			<?php 
	      if ($language->language == 'en') {
	        $profesor_url = "/" . $language->prefix . "/" . drupal_get_path_alias('page/30/profesores/'.$uid, $language->language); 
	      }else
	        $profesor_url = "/" . drupal_get_path_alias('page/30/profesores/'.$uid, $language->language); 
	    ?> 
	    <?php if ($status == 1) : ?>
      <li class="mb-ch-14" data-href="<?php print $profesor_url; ?>">
				<div class="grid-list-pic"><img src="/<?php if($pic != ''){print($pathfile.'pictures/'.$pic);} else {print($pathfile.'pictures/'.'user.jpg'); }?>" alt="<?php print $name ?>" width="180px" height="auto" class="img-circle"></div>
				<div>
					<a href="<?php print $profesor_url; ?>"><?php print $name ?></a>
				</div>
			</li>
			<?php endif; ?>
		<?php endforeach ?>	
	</ul>	
</div>

