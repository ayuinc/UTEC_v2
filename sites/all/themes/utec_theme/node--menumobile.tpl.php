<?php 
	global $language; 
	$tree = menu_tree_all_data('main-menu'); 
	$menus = menu_tree_output(i18n_menu_localize_tree($tree));
	$count = 1;
	$count2 = 1;
?>

<div class="mobile-nav-display-triggers"> 
  <ul>
  	<?php foreach ($menus as $index => $menu) :?>
    <li>
      <a href="#mobile-nav-display-<?php print $count ?>" class="atm-menu-principal-movil"><?php print $menu['#title']; ?></a>
    </li>
    <?php $count++; ?>
		<?php endforeach; ?>   
		<li>
			<?php print block_render('locale', 'language'); ?>
			<!-- <a href="/en" class="btn btn-xs btn-custom btn-gray" rel="nofollow">EN</a> -->
		</li> 
  </ul>
</div>
<?php foreach ($menus as $index => $menu) :?>
<div class="mobile-nav-display" id="mobile-nav-display-<?php print $count2 ?>">
  <a class="back"><?php print t('Go Back') ?></a>
  <?php
    $titles = array();  
    $titles = explode(" ", $menu['#title']);
  ?>
	<h3 class="h1 pl-14"><?php print $titles[0]; ?><br><span><?php print $titles[1]; ?></span> <?php print $titles[2]; ?> <?php print $titles[3]; ?></h3>
	<ul>
		<?php foreach ($menu['#below'] as $child) : ?>
    <?php
      $titles2 = array();  
      $titles2 = explode(" ", $child['#title']);
      $href = drupal_get_path_alias($child['#href'], $language->language)
    ?>
		<li>
			<a href="/<?php if($language->language == 'en'){print ($language->language."/");} print $href; ?>" class="atm-menu-secundario-movil"><span><?php print $titles2[0]; ?></span><?php print $titles2[1]; ?> <?php print $titles2[2]; ?> <?php print $titles2[3]; ?> <?php print $titles2[4]; ?></a>
		</li>
		<?php endforeach; ?>					
		<li>
			<a href="http://utecventures.com/" rel="nofollow" target="_blank"  class="atm-menu-secundario-movil"><span>Utec </span>Ventures</a>
		</li>
		<!--<li>
			<a href="#" class="btn btn-primary btn-custom bold">Postular</a>
		</li>-->
	</ul>
</div>
<?php endforeach; ?>
<?php $count2++; ?>
