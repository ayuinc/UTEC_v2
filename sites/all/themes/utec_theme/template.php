<?php

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

	drupal_add_js(path_to_theme() . '/js/app/lib/searchform.js', array(
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

function utec_theme_site_map_menu_link(array $variables) {

  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  if ($element['#original_link']['has_children'] == 1) {
		$element['#attributes']['style'] = "float:left;width:33%;";
		//array_push($element['#attributes']['class'], "text-gray-dark");
  }

  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  // print_r($element);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function utec_theme_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';
  $menuName = $variables['element']["#original_link"]["menu_name"];

  if ($menuName == 'main-menu') {
    $sub_menu = drupal_render($element['#below']);

    $titles = array();  
    $titles = explode(" ", $element['#title']);
    $element['#localized_options']['html'] = TRUE;
    // kpr($element);
  	if ($element['#localized_options']['attributes']['class'] != '') {
	    $ele_title = '<span style="color:white">'.$titles[0].' '.'</span>'.$titles[1].' '.$titles[2].' '.$titles[3].' '.$titles[4];
  	}	
		else{
	    $ele_title = '<span>'.$titles[0].' '.'</span>'.$titles[1].' '.$titles[2].' '.$titles[3].' '.$titles[4];
    }
    $output = l($ele_title, $element['#href'], $element['#localized_options']);
	  
  }
  else {
	  if ($element['#below']) {
	    $sub_menu = drupal_render($element['#below']);
	  }

	  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
	  
  }
  foreach ($element['#attributes']['class'] as $key => $class) {
  	if ($class == 'first' OR $class == 'leaf' OR $class == 'last') {
  		$element['#attributes']['class'][$key] = '';	
		}	
  } 
  
	  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function utec_theme_preprocess_node(&$variables){
	$variables ['front_page'] = url();
  $theme_name = 'utec_theme';
	$settings = variable_get('theme_' . $theme_name . '_settings', array());

	// die(kpr($settings));
	if (isset($settings['logo_path'])) {
	  $logo = file_create_url($settings['logo_path']);
		$variables['logo'] = $logo;
	}

	$node = $variables['node'];
	$entity_type = 'node';
	$field_name = 'field_image';
	$field_name_2 = 'field_image_2';
	$bundle = $node->type; // Or whatever content type you need.
	$view_mode = 'default'; // Or whatever view mode you want to get settings for, e.g. teaser.

	$info = field_info_instance($entity_type, $field_name, $bundle);
	$settings = $info['display'][$view_mode]['settings'];
	$image_style = $settings['image_style'];
	$variables['image_style'] = $image_style;

	$info2 = field_info_instance($entity_type, $field_name_2, $bundle);
	$settings2 = $info2['display'][$view_mode]['settings'];
	$image_style2 = $settings2['image_style'];
	$variables['image_style_2'] = $image_style2;

	$info3 = field_info_instance($entity_type, $field_name_3, $bundle);
	$settings3 = $info3['display'][$view_mode]['settings'];
	$image_style3 = $settings3['image_style'];
	$variables['image_style_3'] = $image_style3;
	print_r($variables['image_style_3']);
	print_r($variables['image_style_2']);
	print_r($variables['image_style']);
}

?>
