<?php 
	global $language; 

	$tree = menu_tree_all_data('main-menu'); 
	$menus = menu_tree_output(i18n_menu_localize_tree($tree));

  //kpr($menus);

  $tree_quick = menu_tree_all_data('menu-top-menu'); 
  $menus_quick = menu_tree_output(i18n_menu_localize_tree($tree_quick));

  $tree_quick_right = menu_tree_all_data('menu-top-menu-right'); 
  $menus_quick_right = menu_tree_output(i18n_menu_localize_tree($tree_quick_right));

  $tree_intranet = menu_tree_all_data('menu-top-menu-right-intranet'); 
  $menus_intranet = menu_tree_output(i18n_menu_localize_tree($tree_intranet));

	$fields_esp = $node->field_menu_content_esp['und'];
	$fields_ing = $node->field_menu_content_ing['und'];


?>

<div class="mobile-nav-display-triggers"> 
	<ul>
    <?php $counter = 1; ?>
    <?php foreach ($menus as $index => $menu) :?>
    <?php $classes = $menu['#localized_options']['attributes']['class']; ?>
    <?php if ($menu['#title']) : ?>
		<li>
      <a href="#mobile-nav-display-<?php print $counter; ?>" class="atm-menu-principal-movil"><?php print $menu['#title']; ?></a>
    </li>
    <?php $counter++; ?>
    <?php endif; ?>
    <?php endforeach; ?>
	</ul>
</div>
<?php $count = 1; ?>
<?php kpr($fields_esp); ?>
<?php foreach ($fields_esp as $index => $fid) : ?>
	<?php 
	  // print_r($fid['value']);
	  $num_esp = $fid['value'];
	  $num_ing = $fields_ing[$index]['value'];
	  $field_esp = entity_load('field_collection_item', array($num_esp));
	  $field_ing = entity_load('field_collection_item', array($num_ing));

	  $titulo_esp = $field_esp[$num_esp]->field_titulo_menu['und'][0]['value'];
	  $cuerpo_esp = $field_esp[$num_esp]->field_cuerpo['und'][0]['value'];
	  
	  $titulo_ing = $field_ing[$num_ing]->field_titulo_menu['und'][0]['value'];
	  $cuerpo_ing = $field_ing[$num_ing]->field_cuerpo['und'][0]['value'];
	?>
	<div class="mobile-nav-display" id="mobile-nav-display-<?php print $count; ?>">
	  <a class="back"><?php print t('Go Back'); ?></a>
		<?php if ($language->language == 'es'): ?>
			<?php print $titulo_esp ?>
			<?php print $cuerpo_esp ?>
		<?php elseif ($language->language == 'en'): ?>
			<?php print $titulo_ing ?>
			<?php print $cuerpo_ing ?>
		<?php endif ?>
		<ul>
		<?php foreach ($menus as $index => $menu) :?>
	  <?php if ($menu['#href']) : ?>
			<?php $count2 = 0; ?>
			<?php foreach ($menu['#below'] as $child) : ?>
	    <?php if ($child['#href']) : ?>
	      <?php
	        $titles2 = array();  
	        $titles2 = explode(" ", $child['#title']);
	        $href = drupal_get_path_alias($child['#href'], $language->language);
	        $classes = $child['#localized_options']['attributes']['class'];
	        $title = $child['#localized_options']['attributes']['title'];
	        $id = $child['#localized_options']['attributes']['id'];
	        $name = $child['#localized_options']['attributes']['name'];
	        $rel = $child['#localized_options']['attributes']['rel'];
	        $target = $child['#localized_options']['attributes']['target'];
	      ?>
				<li>
					<a href="/<?php if($language->language == 'en'){print ($language->language."/");} print $href; ?>" class="atm-menu-secundario-movil"><span><?php print $titles2[0]; ?></span><?php print $titles2[1]; ?> <?php print $titles2[2]; ?> <?php print $titles2[3]; ?> <?php print $titles2[4]; ?></a>
				</li>
			<?php endif; ?>
			<?php $count2++; ?>
	    <?php endforeach; ?>
	    <?php unset($menus[$index]); ?>	
			<?php break; ?>
	  <?php endif; ?>  
		<?php endforeach; ?> 
		</ul>
		<?php $count++; ?>
	</div>
<?php endforeach; ?>
