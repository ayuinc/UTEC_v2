<?php

	function utec_theme_theme() {
	  $items = array();
	  // create custom user-login.tpl.php
	  $items['user_login'] = array(
	  'render element' => 'form',
	  'path' => drupal_get_path('theme', 'utec_theme') . '/templates',
	  'template' => 'user-login',
	  'preprocess functions' => array(
	  'utec_theme_preprocess_user_login'
	  ),
	 );
	return $items;
	}

	function block_render($module, $block_id) {
	  $block = block_load($module, $block_id);
	  $block_content = _block_render_blocks(array($block));
	  $build = _block_get_renderable_array($block_content);
	  $block_rendered = drupal_render($build);
	  return $block_rendered;
	}

	$viewport = array(
	  '#tag' => 'meta', 
	  '#attributes' => array(
	    'name' => 'viewport', 
	    'content' => 'width=device-width, initial-scale=1.0, user-scalable=no',
	  ),
	);
	drupal_add_html_head($viewport, 'viewport');

	//Search
	function utec_theme_preprocess_page(&$variables){
	  //die('entro!!!');
	  $search_box = drupal_render(drupal_get_form('search_form'));
	  //die(print_r($search_box));
	  $variables['search_box'] = $search_box;
	}

	drupal_add_css("//vjs.zencdn.net/4.10/video-js.css", 'external');	
	
	//drupal_add_js('try{Typekit.load();}catch(e){}', 'inline');

  //drupal_add_js('//use.typekit.net/fct8sgn.js', array(
  	//'type' => 'external',
	  //'scope' => 'header',
	  //'group' => JS_THEME,
	  //'every_page' => TRUE,
	  //'weight' => 1,
	//));

	drupal_add_js('//vjs.zencdn.net/4.10/video.js', array(
		'type' => 'external',
	  'scope' => 'header',
	  'group' => JS_THEME,
	  'every_page' => TRUE,
	  'weight' => 2,
	));

	drupal_add_js(path_to_theme() . '/js/app/vendor/jquery-2.1.1.min.js', array(
	  'scope' => 'footer',
	  'group' => JS_THEME,
	  'every_page' => TRUE,
	  'weight' => 1,
	));

	drupal_add_js(path_to_theme() . '/js/app/lib/utec.min.js', array(
	  'scope' => 'footer',
	  'group' => JS_THEME,
	  'every_page' => TRUE,
	  'weight' => 2,
	));

	// drupal_add_js(path_to_theme() . '/js/app/vendor/TweenMax.min.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 2,
	// ));

	// drupal_add_js(path_to_theme() . '/js/app/vendor/ScrollToPlugin.min.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 3,
	// ));

	// drupal_add_js(path_to_theme() . '/js/app/vendor/jquery.scrollmagic.min.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 4,
	// ));

	// drupal_add_js(path_to_theme() . '/js/b3/transition.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 5,
	// ));

	// drupal_add_js(path_to_theme() . '/js/b3/carousel.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 6,
	// ));

	// drupal_add_js(path_to_theme() . '/js/app/lib/nav-control.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 7,
	// ));

	// drupal_add_js(path_to_theme() . '/js/app/lib/layout-control.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 8,
	// ));

	// drupal_add_js(path_to_theme() . '/js/app/lib/scroll-control.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 9,
	// ));

	// drupal_add_js(path_to_theme() . '/js/app/lib/section-scroll.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 10,
	// ));

	// drupal_add_js(path_to_theme() . '/js/app/lib/videojs.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 11,
	// ));

	// drupal_add_js(path_to_theme() . '/js/app/vendor/imagesloaded.pkgd.min.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 12,
	// ));

	// drupal_add_js(path_to_theme() . '/js/app/vendor/isotope.pkgd.min.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 13,
	// ));

	// drupal_add_js(path_to_theme() . '/js/app/lib/isotope.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 14,
	// ));

	// drupal_add_js(path_to_theme() . '/js/app/vendor/jquery.validate.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 15,
	// ));	

	// drupal_add_js(path_to_theme() . '/js/app/lib/forms-control.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 16,
	// ));	

	// drupal_add_js(path_to_theme() . '/js/app/vendor/ScrambleTextPlugin.min.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 17,
	// ));	

	// drupal_add_js(path_to_theme() . '/js/app/lib/tickerscrambler.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 18,
	// ));	
	
	// drupal_add_js(path_to_theme() . '/js/app/lib/tickerscrambler_en.js', array(
	//   'scope' => 'footer',
	//   'group' => JS_THEME,
	//   'every_page' => TRUE,
	//   'weight' => 18,
	// ));		

?>

