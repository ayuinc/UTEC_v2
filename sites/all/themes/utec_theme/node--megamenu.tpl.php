<?php 
  global $language 
  // global $base_url;
  //$url = base_path();
  // die(print_r($url));
?>
<?php $theme_path = drupal_get_path('theme', 'utec_theme'); ?>

<?php 
	$tree = menu_tree_all_data('main-menu'); 
	$menus = menu_tree_output(i18n_menu_localize_tree($tree));

  // kpr($menus);

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
            $title = $menu_quick['#title'];
            $href = drupal_get_path_alias($menu_quick['#href'], $language->language);
          ?>
            <li>
              <a href="/<?php if($language->language == 'en'){print ($language->language."/");} print $href; ?>" class="atm-menu-superior text-hover-primary"><?php print $title; ?></a>
            </li>
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
              $title = $menu_quick_right['#title'];
              $href = drupal_get_path_alias($menu_quick_right['#href'], $language->language);
            ?>
              <li class="pt-7">
                <a href="/<?php if($language->language == 'en'){print ($language->language."/");} print $href; ?>" 
                  class="text-gray"><?php print $title; ?></a>
              </li>
            <?php endif; ?>
            <?php endforeach; ?>	

						<li>
							<?php print block_render('locale', 'language'); ?>
						</li>
            <?php foreach ($menus_intranet as $key => $menu_intranet) : ?>
            <?php if ($menu_intranet['#href']) : ?>
            <?php 
              $title2 = $menu_intranet['#title'];
              $href2 = drupal_get_path_alias($menu_intranet['#href'], $language->language);
            ?>
              <li>
                <a href="/<?php if($language->language == 'en'){print ($language->language."/");} print $href2; ?>" rel="nofollow" target="_blank" class="btn btn-xs btn-custom btn-gray atm-login"><?php print $title2; ?></a>
              </li>
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
			<div class="left">
				<ul class="nav-display-triggers">
          <?php $counter = 1; ?>
          <?php foreach ($menus as $index => $menu) :?>
          <?php $classes = $menu['#localized_options']['attributes']['class']; ?>
          <?php if ($menu['#title']) : ?>
					<li>
						<a href="#nav-display-<?php print $counter; ?>" class="atm-menu-principal">
							<div><i class="<?php foreach ($classes as $key => $class){print $class.' ';} ?>"></i></div>
							<span><?php print $menu['#title']; ?></span>
						</a>
					</li>
          <?php endif; ?>
          <?php endforeach; ?>
				</ul>
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
              <?php
                $titles = array();  
                $titles = explode(" ", $child['#title']);
                $href = drupal_get_path_alias($child['#href'], $language->language);
                $classes = $child['#localized_options']['attributes']['class'];
                $title = $child['#localized_options']['attributes']['title'];
                $id = $child['#localized_options']['attributes']['id'];
                $name = $child['#localized_options']['attributes']['name'];
                $rel = $child['#localized_options']['attributes']['rel'];
                $target = $child['#localized_options']['attributes']['target'];
              ?>
  						<?php if ($count2 <= 5) : ?>
  							<li>
  								<a href="/<?php if($language->language == 'en'){print ($language->language."/");} print $href; ?>" class="<?php foreach ($classes as $key => $class){print $class.' ';
                  } ?>atm-menu-secundario" title="<?php print $title; ?>" id="<?php print $id; ?>" name="<?php print $name; ?>" rel="<?php print $rel; ?>" target="<?php print $target; ?>"><span class="<?php if ($classes){print 'text-white';} ?>"><?php print $titles[0]; ?></span><?php print $titles[1]; ?> <?php print $titles[2]; ?> <?php print $titles[3]; ?> <?php print $titles[4]; ?></a>
  							</li>
  						<?php elseif($count2 > 5 && $count2 < 7) : ?>
  						</ul>
  						<ul>
                <li>
                  <a href="/<?php if($language->language == 'en'){print ($language->language."/");} print $href; ?>" class="<?php foreach ($classes as $key => $class){print $class.' ';
                  } ?>atm-menu-secundario" title="<?php print $title; ?>" id="<?php print $id; ?>" name="<?php print $name; ?>" rel="<?php print $rel; ?>" target="<?php print $target; ?>"><span class="<?php if ($classes){print 'text-white';} ?>"><?php print $titles[0]; ?></span><?php print $titles[1]; ?> <?php print $titles[2]; ?> <?php print $titles[3]; ?> <?php print $titles[4]; ?></a>
                </li>
  						<?php else : ?>
  							<li>
                  <a href="/<?php if($language->language == 'en'){print ($language->language."/");} print $href; ?>" class="<?php foreach ($classes as $key => $class){print $class.' ';
                  } ?>atm-menu-secundario" title="<?php print $title; ?>" id="<?php print $id; ?>" name="<?php print $name; ?>" rel="<?php print $rel; ?>" target="<?php print $target; ?>"><span class="<?php if ($classes){print 'text-white';} ?>"><?php print $titles[0]; ?></span><?php print $titles[1]; ?> <?php print $titles[2]; ?> <?php print $titles[3]; ?> <?php print $titles[4]; ?></a>
                </li>
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
</div> <!-- END:Header -->

<?php $menus = menu_tree_output(i18n_menu_localize_tree($tree)); ?>
<div id="header-on-scroll"> <!-- HEADER-ON-SCROLL -->
  <div class="nav-main">
    <div class="container">
      <div class="left">
        <div class="logo">
          <?php if ($language->language == 'en'): ?>
            <a href="/en" class="atm-logo"><img src="/<?php print $theme_path; ?>/assets/img/icon_UTEC.png" alt="Logo UTEC"></a>
          <?php elseif ($language->language != 'en'): ?>
            <a href="/" class="atm-logo"><img src="/<?php print $theme_path; ?>/assets/img/icon_UTEC.png" alt="Logo UTEC"></a>
          <?php endif ?>
        </div>
      </div>
      <div class="left hidden-xs hidden-sm">
        <ul class="nav-display-triggers">
          <li>
            <a href="#nav-shrink-display-1" class="atm-menu-principal">
              <span><?php print t('We are Utec') ?></span>
            </a>
          </li>
          <li>
            <a href="#nav-shrink-display-2" class="atm-menu-principal">
              <span><?php print t('Research') ?></span>
            </a>
          </li>
          <li>
            <a href="#nav-shrink-display-3" class="atm-menu-principal">
              <span><?php print t('Programs') ?></span>
            </a>
          </li>
          <li>
            <a href="#nav-shrink-display-4" class="atm-menu-principal">
              <span><?php print t('Admissions') ?></span>
            </a>
          </li>
          <li>
            <a href="#nav-shrink-display-5" class="atm-menu-principal">
              <span><?php print t('Alliances') ?></span>
            </a>
          </li>
          <li>
            <a href="#nav-shrink-display-6" class="atm-menu-principal">
              <span><?php print t('Executive Education') ?></span>
            </a>
          </li>
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
            <?php $count2 = 0; ?>
            <?php foreach ($menu['#below'] as $child) : ?>
            <?php
              $titles = array();  
              $titles = explode(" ", $child['#title']);
              $href = drupal_get_path_alias($child['#href'], $language->language)
            ?>
            <?php if ($count2 <= 5) : ?>
              <li>
                <a href="/<?php if($language->language == 'en'){print ($language->language."/");} print $href; ?>" class="atm-menu-secundario"><span><?php print $titles[0]; ?></span><?php print $titles[1]; ?> <?php print $titles[2]; ?> <?php print $titles[3]; ?> <?php print $titles[4]; ?></a>
              </li>
            <?php elseif($count2 > 5 && $count2 < 8) : ?>
            </ul> 
            <ul>
            <?php else : ?>
              <li>
                <a href="/<?php if($language->language == 'en'){print ($language->language."/");} print $href; ?>" class="atm-menu-secundario"><span><?php print $titles[0]; ?></span><?php print $titles[1]; ?> <?php print $titles[2]; ?> <?php print $titles[3]; ?> <?php print $titles[4]; ?></a>             
              </li>
            <?php endif; ?>
            <?php $count2++; ?>
            <?php endforeach; ?>
            <?php unset($menus[$index]); ?> 
            <?php break; ?>
          <?php endforeach; ?> 
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php $count++; ?>
  <?php endforeach; ?>
</div> <!-- END:HEADER-ON-SCROLL -->