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
function _site_map_menu_tree_output($tree) {
  $build = array();
  $items = array();

  // Pull out just the menu links we are going to render so that we
  // get an accurate count for the first/last classes.
  // Thanks for fix by zhuber at https://drupal.org/node/1331104#comment-5200266
  foreach ($tree as $data) {
    if ($data['link']['access'] && (!$data['link']['hidden'] || variable_get('site_map_show_menus_hidden', 0))) {
      $items[] = $data;
    }
  }

  $router_item = menu_get_item();
  $num_items = count($items);
  foreach ($items as $i => $data) {
    $class = array();
    if ($i == 0) {
      $class[] = 'first';
    }
    if ($i == $num_items - 1) {
      $class[] = 'last';
    }
    // Set a class for the <li>-tag. Since $data['below'] may contain local
    // tasks, only set 'expanded' class if the link also has children within
    // the current menu.
    if ($data['link']['has_children'] && $data['below']) {
      $class[] = 'expanded left';
    }
    elseif ($data['link']['has_children']) {
      $class[] = 'collapsed';
    }
    else {
      $class[] = 'leaf';
    }
    // Set a class if the link is in the active trail.
    if ($data['link']['in_active_trail']) {
      $class[] = 'active-trail';
      $data['link']['localized_options']['attributes']['class'][] = 'active-trail';
    }
    // Normally, l() compares the href of every link with $_GET['q'] and sets
    // the active class accordingly. But local tasks do not appear in menu
    // trees, so if the current path is a local task, and this link is its
    // tab root, then we have to set the class manually.
    if ($data['link']['href'] == $router_item['tab_root_href'] && $data['link']['href'] != $_GET['q']) {
      $data['link']['localized_options']['attributes']['class'][] = 'active';
    }

    // Allow menu-specific theme overrides.
    $element['#theme'] = 'site_map_menu_link__' . strtr($data['link']['menu_name'], '-', '_');
    $element['#attributes']['class'] = $class;
    $element['#title'] = $data['link']['title'];
    $element['#href'] = $data['link']['href'];
    $element['#localized_options'] = !empty($data['link']['localized_options']) ? $data['link']['localized_options'] : array();
    $element['#below'] = $data['below'] ? _site_map_menu_tree_output($data['below']) : $data['below'];
    $element['#original_link'] = $data['link'];
    // Index using the link's unique mlid.
    $build[$data['link']['mlid']] = $element;
  }
  if ($build) {
    // Make sure drupal_render() does not re-order the links.
    $build['#sorted'] = TRUE;
    // Add the theme wrapper for outer markup.
    // Allow menu-specific theme overrides.
    $build['#theme_wrappers'][] = 'site_map_menu_tree__' . strtr($data['link']['menu_name'], '-', '_');
  }

  return $build;
}

function utec_theme_site_map_menu_link(array $variables) {
	//$element['#attributes']['class'] = "test";
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

?>
