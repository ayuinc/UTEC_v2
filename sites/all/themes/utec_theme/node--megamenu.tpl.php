<?php 

	$tree = menu_tree_all_data('main-menu'); 
	$menus = menu_tree_output(i18n_menu_localize_tree($tree));

  $tree_quick = menu_tree_all_data('menu-top-menu'); 
  $menus_quick = menu_tree_output(i18n_menu_localize_tree($tree_quick));

  $tree_quick_right = menu_tree_all_data('menu-top-menu-right'); 
  $menus_quick_right = menu_tree_output(i18n_menu_localize_tree($tree_quick_right));

  $tree_intranet = menu_tree_all_data('menu-top-menu-right-intranet'); 
  $menus_intranet = menu_tree_output(i18n_menu_localize_tree($tree_intranet));

	$fields_esp = $node->field_menu_content_esp['und'];
	$fields_ing = $node->field_menu_content_ing['und'];

?>

<div id="header" class="hidden-xs hidden-sm"> <!-- HEADER -->
	<div class="tool-bar bg-gray-lighter pt-sm pb-sm">
		<div class="container">
			<div class="left">
				<ul class=" thin text-gray mr-ch-14 nav-list pt-7">
          <?php foreach ($menus_quick as $key => $menu_quick) : ?>
          <?php if ($menu_quick['#href']) : ?>
          <?php 
            print render($menu_quick);
          ?>
          <?php endif; ?>
          <?php endforeach; ?>
				</ul>
			</div>
			<div class="right">
				<div class="inline-block pt-xs">
					<ul class="small ml-ch-7 nav-list">
						<li class="form-search">
							<?php print drupal_render(drupal_get_form('search_form')); ?>
						</li>
            <?php foreach ($menus_quick_right as $key => $menu_quick_right) : ?>
            <?php if ($menu_quick_right['#href']) : ?>
            <?php 
              print render($menu_quick_right);
            ?>
            <?php endif; ?>
            <?php endforeach; ?>	

						<li>
							<?php print block_render('locale', 'language'); ?>
						</li>
            <?php foreach ($menus_intranet as $key => $menu_intranet) : ?>
            <?php if ($menu_intranet['#href']) : ?>
            <?php 
              print render($menu_intranet);
            ?>
            <?php endif; ?>
            <?php endforeach; ?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-main">
		<div class="container">
			<div class="left">
        <div class="logo pv-21">
          <a href="<?php print $front_page; ?>" class="atm-logo">
            <img src="<?php print $logo; ?>" alt="Logo UTEC" width="149" height="auto">
          </a>
        </div>
			</div>
			<div class="right">
				<ul class="nav-display-triggers">
          <?php $counter = 1; ?>
          <?php foreach ($menus as $index => $menu) :?>
          <?php $classes = $menu['#localized_options']['attributes']['class']; ?>
          <?php if ($menu['#title']) : ?>
					<li>
						<a href="#nav-display-<?php print $counter; ?>" class="atm-menu-principal">
							<div><i class="<?php foreach ($classes as $key => $class){print $class.' ';} ?>"></i></div>
							<span class="text-overflow"><?php print $menu['#title']; ?></span>
						</a>
					</li>
          <?php $counter++; ?>
          <?php endif; ?>
          <?php endforeach; ?>
				</ul>
			</div>
		</div>
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
	<div class="nav-display" id="nav-display-<?php print $count; ?>">
		<div class="container relative">
			<a href="#" class="nav-display-close">X</a>
		</div>
		<div class="container-sm">
			<div class="nav-display-left">
				<div>
					<?php if ($language->language == 'es'): ?>
						<?php print $titulo_esp ?>
						<?php print $cuerpo_esp ?>
					<?php elseif ($language->language == 'en'): ?>
						<?php print $titulo_ing ?>
						<?php print $cuerpo_ing ?>
					<?php endif ?>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
					<?php foreach ($menus as $index => $menu) :?>
          <?php if ($menu['#href']) : ?>
						<?php $count2 = 0; ?>
						<?php foreach ($menu['#below'] as $child) : ?>
            <?php if ($child['#href']) : ?>
              <?php if ($count2 <= 5) : ?>
                <?php print render($child); ?>
  						<?php elseif($count2 > 5 && $count2 < 7) : ?>
  						</ul>
  						<ul>
                <?php print render($child); ?>
  						<?php else : ?>
                <?php print render($child); ?>
              <?php endif; ?>
						<?php endif; ?>
						<?php $count2++; ?>
            <?php endforeach; ?>
            <?php unset($menus[$index]); ?> 
            <?php unset($external); ?>	
						<?php break; ?>
          <?php endif; ?>  
					<?php endforeach; ?> 
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php $count++; ?>
	<?php endforeach; ?>
</div> <!-- END:Header -->

<?php $menus = menu_tree_output(i18n_menu_localize_tree($tree)); ?>
<div id="header-on-scroll"> <!-- HEADER-ON-SCROLL -->
  <div class="nav-main">
    <div class="container">
      <div class="left">
        <div class="logo pv-21">
          <a href="<?php print $front_page; ?>" class="atm-logo">
            <img src="/<?php print $theme_path_utec; ?>/assets/img/icon_UTEC.png" alt="Logo UTEC">
          </a>
        </div>
      </div>
      <div class="right hidden-xs hidden-sm p-0">
        <ul class="nav-display-triggers">
          <?php $counter = 1; ?>
          <?php foreach ($menus as $index => $menu) :?>
          <?php if ($menu['#title']) : ?>
          <li>
            <a href="#nav-shrink-display-<?php print $counter; ?>" class="atm-menu-principal">
              <span class="text-overflow"><?php print $menu['#title']; ?></span>
            </a>
          </li>
          <?php $counter++; ?>
          <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="right visible-xs-block visible-sm-block">
        <a href="#" class="menu-trigger icon-menu"></a>
      </div>
    </div>
  </div>
  <?php $count = 1; ?>
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
  <div class="nav-display" id="nav-shrink-display-<?php print $count; ?>">
    <div class="container relative">
      <a href="#" class="nav-display-close">X</a>
    </div>
    <div class="container-sm">
      <div class="nav-display-left">
        <div>
          <?php if ($language->language == 'es'): ?>
            <?php print $titulo_esp ?>
            <?php print $cuerpo_esp ?>
          <?php elseif ($language->language == 'en'): ?>
            <?php print $titulo_ing ?>
            <?php print $cuerpo_ing ?>
          <?php endif ?>
        </div>
      </div>
      <div class="nav-display-right">
        <div>
          <ul>
          <?php foreach ($menus as $index => $menu) :?>
          <?php if ($menu['#href']) : ?>
            <?php $count2 = 0; ?>
            <?php foreach ($menu['#below'] as $child) : ?>
            <?php if ($child['#href']) : ?>
              <?php if ($count2 <= 5) : ?>
                <?php print render($child); ?>
              <?php elseif($count2 > 5 && $count2 < 7) : ?>
              </ul>
              <ul>
                <?php print render($child); ?>
              <?php else : ?>
                <?php print render($child); ?>
              <?php endif; ?>
            <?php endif; ?>
            <?php $count2++; ?>
            <?php endforeach; ?>
            <?php unset($menus[$index]); ?> 
            <?php break; ?>
          <?php endif; ?>  
          <?php endforeach; ?> 
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php $count++; ?>
  <?php endforeach; ?>
</div> <!-- END:HEADER-ON-SCROLL -->