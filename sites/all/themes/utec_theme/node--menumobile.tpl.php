<?php 

	$tree = menu_tree_all_data('main-menu'); 
	$menus = menu_tree_output(i18n_menu_localize_tree($tree));

  $tree_quick = menu_tree_all_data('menu-top-menu'); 
  $menus_quick = menu_tree_output(i18n_menu_localize_tree($tree_quick));

  $tree_quick_right = menu_tree_all_data('menu-top-menu-right'); 
  $menus_quick_right = menu_tree_output(i18n_menu_localize_tree($tree_quick_right));

  $tree_intranet = menu_tree_all_data('menu-top-menu-right-intranet'); 
  $menus_intranet = menu_tree_output(i18n_menu_localize_tree($tree_intranet));

  $node = node_load(3);
  
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
    <li>
			<?php print block_render('locale', 'language'); ?>
		</li> 
	</ul>
</div>
<?php $count = 1; ?>
<?php foreach ($fields_esp as $index => $fid) : ?>
	<?php
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
		<?php elseif ($language->language == 'en'): ?>
			<?php print $titulo_ing ?>
		<?php endif ?>
		<ul>
		<?php foreach ($menus as $index => $menu) :?>
	  <?php if ($menu['#href']) : ?>
			<?php $count2 = 0; ?>
			<?php foreach ($menu['#below'] as $child) : ?>
	    <?php if ($child['#href']) : ?>
				<?php print render($child); ?>
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
