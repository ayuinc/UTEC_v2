<?php

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

	drupal_add_js(path_to_theme() . '/js/app/vendor/TweenMax.min.js', array(
	  'scope' => 'footer',
	  'group' => JS_THEME,
	  'every_page' => TRUE,
	  'weight' => 2,
	));

	drupal_add_js(path_to_theme() . '/js/app/vendor/ScrollToPlugin.min.js', array(
	  'scope' => 'footer',
	  'group' => JS_THEME,
	  'every_page' => TRUE,
	  'weight' => 3,
	));

	drupal_add_js(path_to_theme() . '/js/app/vendor/jquery.scrollmagic.min.js', array(
	  'scope' => 'footer',
	  'group' => JS_THEME,
	  'every_page' => TRUE,
	  'weight' => 4,
	));

	drupal_add_js(path_to_theme() . '/js/app/lib/nav-control.js', array(
	  'scope' => 'footer',
	  'group' => JS_THEME,
	  'every_page' => TRUE,
	  'weight' => 5,
	));

	drupal_add_js(path_to_theme() . '/js/app/lib/layout-control.js', array(
	  'scope' => 'footer',
	  'group' => JS_THEME,
	  'every_page' => TRUE,
	  'weight' => 6,
	));

	drupal_add_js(path_to_theme() . '/js/app/lib/scroll-control.js', array(
	  'scope' => 'footer',
	  'group' => JS_THEME,
	  'every_page' => TRUE,
	  'weight' => 7,
	));

	drupal_add_js(path_to_theme() . '/js/app/lib/videojs.js', array(
	  'scope' => 'footer',
	  'group' => JS_THEME,
	  'every_page' => TRUE,
	  'weight' => 8,
	));

	drupal_add_js(path_to_theme() . '/js/b3/transition.js', array(
	  'scope' => 'footer',
	  'group' => JS_THEME,
	  'every_page' => TRUE,
	  'weight' => 9,
	));

	drupal_add_js(path_to_theme() . '/js/b3/carousel.js', array(
	  'scope' => 'footer',
	  'group' => JS_THEME,
	  'every_page' => TRUE,
	  'weight' => 10,
	));
	

?>
