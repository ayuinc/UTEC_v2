<?php global $language ?>
<?php $theme_path = drupal_get_path('theme', 'utec_theme'); ?>

<?php 
	$tree = menu_tree_all_data('main-menu'); 
	$menus = menu_tree_output(i18n_menu_localize_tree($tree));
	$fields_esp = $node->field_menu_content_esp['und'];
	$fields_ing = $node->field_menu_content_ing['und'];
	//kpr($menus);
?>

<div id="header" class="hidden-xs hidden-sm"> <!-- HEADER -->
	<div class="tool-bar bg-gray-lighter pt-sm pb-sm">
		<div class="container">
			<div class="left">
				<ul class=" thin text-gray mr-ch-14 nav-list pt-7">
					<?php if ($language->language != 'en'): ?>
						<li>
							<a href="/enlaces-rapidos/estudiantes" class="atm-menu-superior text-hover-primary"><?php print t('Students') ?></a>  
						</li>
						<li>
							<a href="/enlaces-rapidos/profesores" class="atm-menu-superior text-hover-primary"><?php print t('Faculty') ?></a>
						</li>
						<li>
							<a href="/enlaces-rapidos/empresas" class="atm-menu-superior text-hover-primary"><?php print t('Companies') ?></a>
						</li>
						<li>
							<a href="/enlaces-rapidos/postulantes" class="atm-menu-superior text-hover-primary"><?php print t('Applicants') ?></a>
						</li>
					<?php elseif ($language->language == 'en'): ?>
						<li>
							<a href="/<?php print $language->language ?>/quick-links/students" class="atm-menu-superior text-hover-primary"><?php print t('Students') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->language ?>/quick-links/faculty" class="atm-menu-superior text-hover-primary"><?php print t('Faculty') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->language ?>/quick-links/companies" class="atm-menu-superior text-hover-primary"><?php print t('Companies') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->language ?>/quick-links/applicants" class="atm-menu-superior text-hover-primary"><?php print t('Applicants') ?></a>
						</li>
					<?php endif ?>
				</ul>
			</div>
			<div class="right">
				<div class="inline-block pt-xs">
					<ul class="small ml-ch-7 nav-list">
						<li class="form-search">
							<?php print drupal_render(drupal_get_form('search_form')); ?>
						</li>
						<?php if ($language->language != 'en'): ?>
							<li class="pt-7">
								<a href="/contacto" class="text-gray atm-contacto"><?php print t('Contact us') ?></a>
							</li>
							<li class="pt-7">
								<a href="/blog" class="text-gray atm-blog">Blog</a>
							</li>
						<?php elseif ($language->language == 'en'): ?>
							<li class="pt-7">
								<a href="/en/contact-us" class="text-gray atm-contacto"><?php print t('Contact us') ?></a>
							</li>
							<li class="pt-7">
								<a href="/en/in-the-spotlight" class="text-gray atm-blog">Blog</a>
							</li>
						<?php endif ?>						
						<li>
							<?php print block_render('locale', 'language'); ?>
							<!-- <a href="/en" class="btn btn-xs btn-custom btn-gray" rel="nofollow">EN</a> -->
						</li>
						<li>
							<!-- <a href="/es" class="btn btn-xs btn-custom btn-gray" rel="nofollow">ES</a> -->
						</li>
						<li>
							<a href="https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=http%3A%2F%2Futec-portal.appspot.com%2F&client_id=21208237274-d8jlir9qadpcp35mksh6takkemp9hdue.apps.googleusercontent.com&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&approval_prompt=auto" target="_blank" class="btn btn-xs btn-custom btn-gray atm-login" rel="nofollow">Intranet</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-main">
		<div class="container">
			<div class="left">
				<div class="logo pv-21">
					<a href="/" class="atm-logo"><img src="/<?php print $theme_path; ?>/assets/img/logo_vertical_UTEC-2015.png" alt="Logo UTEC" width="149" height="auto"></a>
				</div>
			</div>
			<div class="left">
				<ul class="nav-display-triggers">
					<li>
						<a href="#nav-display-1" class="atm-menu-principal">
							<div><i class="icon-menu-somos-utec"></i></div>
							<span><?php print t('We are Utec') ?></span>
						</a>
					</li>
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
					<?php $count2 = 0; ?>
					<ul>
					<?php foreach ($menus['#below'] as $menu) :?>
						
						<?php if ($count2 < 6) : ?>
							<li>
								<a href="<?php print $child['#href']; ?>" class="atm-menu-secundario"><?php print $child['#title']; ?></a>
							</li>
						<?php elseif($count2 >= 7 && $count2 < 8) : ?>
						</ul> 
						<ul>
						<?php else : ?>
							<li>
								<a href="<?php print $child['#href']; ?>" class="atm-menu-secundario"><?php print $child['#title']; ?></a>
							</li>
						<?php endif; ?>
	
						<?php $count2++; ?>
					<?php endforeach; ?> 
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php $count++; ?>
	<?php endforeach; ?>
</div> <!-- END:Header -->

