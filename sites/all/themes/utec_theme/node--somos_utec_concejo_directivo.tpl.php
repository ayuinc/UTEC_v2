<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/'); ?>
<?php $title = $node->title; ?>  
<?php $field_introduccion_concejo = $node->field_introduccion_concejo['und']['0']['value']; ?>

<div class="container-sm">
	<h1 class="light"><?php print t('Board') ?></h1>
	<div class="separator-gray separator-lg"></div>
	<p class="lead text-gray"><?php print $field_introduccion_concejo ?></p>
	<ul class="grid-list grid-list-4 grid-list-centered grid-list-anchors pv-21">
    <?php foreach ($node->field_lista_concejo['und'] as $key => $value) :?>
    <?php $name = $value['entity']->name; ?>   
		<?php $pic = $value['entity']->picture->filename; ?>
    <?php $desc = $value['entity']->field_descripci_n['und'][0]['value']; ?>		
			<li class="mb-ch-14">
				<div class="grid-list-pic"><img src="/<?php if($pic != ''){print($pathfile.'pictures/'.$pic);} else {print($pathfile.'pictures/'.'user.jpg'); }?>" alt="" width="98px" height="auto" class="img-circle"></div>
				<div>
					<!--<a href="#">Rosa María Llosa Demartini</a>-->
					<?php print $name ?> 					
					<span><?php print $desc?></span>
				</div>
			</li>
		<?php endforeach ?>	
	</ul>	
</div>

