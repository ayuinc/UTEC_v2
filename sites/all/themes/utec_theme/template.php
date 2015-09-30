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

    if (isset($variables['node'])) {
      // If the node type is "blog_madness" the template suggestion will be "page--blog-madness.tpl.php".
      $variables['theme_hook_suggestions'][] = 'page__'. $variables['node']->type;
    }
	}

	drupal_add_css("//vjs.zencdn.net/4.10/video-js.css", 'external');	

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

/**
 * Implements theme_menu_tree().
 */
function utec_theme_menu_tree($variables) {
  if ($variables['theme_hook_original'] == 'menu_tree__menu_m_menu_bottom') {
    $menu = '<div class="menu-bottom">';
    $menu .= '<div class="container-sm">'; 
    $menu .= '<ul class="pt-42 pl-49-xs pr-49-xs text-center text-gray-dark grid-list grid-list-4  grid-list-1-xs grid-list-hover">' . $variables ['tree'] . '</ul>';
    $menu .= '</div';
    $menu .= '</div';
    return $menu;
  }
  else {
    return '<ul class="menu">' . $variables ['tree'] . '</ul>';
  }
}

/**
 * Implements theme_menu_link().
 */
function utec_theme_menu_link(array $variables) {

  global $language;
  $element = $variables['element'];
  $sub_menu = '';
  $menuName = $variables['element']["#original_link"]["menu_name"];

  if ($menuName == 'main-menu') {
    $sub_menu = drupal_render($element['#below']);

    $titles = array();  
    $titles = explode(" ", $element['#title']);
    $element['#localized_options']['html'] = TRUE;
    // kpr($element);
    $classes = $element['#localized_options']['attributes']['class'];
    $btn = "";
    foreach ($classes as $class) {
    	if ($class == 'btn') {
	    	$btn = $class;
    	}
    }
  	if ($btn == "btn") {
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
  if ($menuName == 'menu-footer-menu') {
  	$element['#localized_options']['html'] = TRUE;
  	$ele_title = '<small>'.$element['#title'].'</small>';
  	$output = l($ele_title, $element['#href'], $element['#localized_options']);
  }
  foreach ($element['#attributes']['class'] as $key => $class) {
  	if ($class == 'first' OR $class == 'leaf' OR $class == 'last') {
  		$element['#attributes']['class'][$key] = '';	
		}	
  }
  
  if ($menuName == 'menu-m-menu-bottom') {
  	
    if ($language->language == 'en') {
      $text = 'View more';
  	}
  	else {
  	  $text = 'Leer más';
  	}

    $link = '<li class="grid-list-2-xs">';
    $link .= l(
      '<div class="p-14 border-grey p-35-xs minh-140 minh-210-xs flex-middle-center">' . 
      '<h5 class="thin">' . $element['#title'] . '</h5>' . 
      '<h6 class="text-primary m-0 light">' . $text . '<p class="pl-7 m-0 icon-arrows-right h6 inline-block"></p></h6>' . 
      '</div>',
      $element['#href'], 
      array(
        'html' => TRUE
      )
    );
    $link .= "</li>\n";

    return $link;
  }
  else {
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
  }
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
  $field_name_3 = 'field_imagen_3';
  $field_name_mul = 'field_imagen_mutliple_1';
  $field_name_4 = 'field_imagen_4';
  $field_name_5 = 'field_imagen_5';
  $field_name_6 = 'field_imagen_6';

	$bundle = $node->type; // Or whatever content type you need.
	$view_mode = 'default'; // Or whatever view mode you want to get settings for, e.g. teaser.

	$info = field_info_instance($entity_type, $field_name, $bundle);
	// print_r($info);
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

  $info_mul = field_info_instance($entity_type, $field_name_mul, $bundle);
  $settings_mul = $info_mul['display'][$view_mode]['settings'];
  $image_style_mul = $settings_mul['image_style'];
  $variables['image_style_mul'] = $image_style_mul;

  $info4 = field_info_instance($entity_type, $field_name_4, $bundle);
  $settings4 = $info4['display'][$view_mode]['settings'];
  $image_style4 = $settings4['image_style'];
  $variables['image_style_4'] = $image_style4;

  $info5 = field_info_instance($entity_type, $field_name_5, $bundle);
	$settings5 = $info5['display'][$view_mode]['settings'];
	$image_style5 = $settings5['image_style'];
	$variables['image_style_5'] = $image_style5;

  $info6 = field_info_instance($entity_type, $field_name_6, $bundle);
  $settings6 = $info6['display'][$view_mode]['settings'];
  $image_style6 = $settings6['image_style'];
  $variables['image_style_6'] = $image_style6;

}

/**
 * Implements hook_preprocess().
 */
function utec_theme_preprocess(&$variables, $hook) {

  global $language;
  global $base_url; 
  global $theme_path; 
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');
  $theme_path_utec = drupal_get_path('theme', 'utec_theme'); 
  $variables['language'] = $language;
  $variables['idioma'] = $language->language;
  $variables['path'] = $path;
  $variables['pathfile'] = $pathfile;
  $variables['theme_path_utec'] = $theme_path_utec;

}

/**
 * Implements hook_preprocess_panels_pane().
 */
function utec_theme_preprocess_panels_pane(&$variables) {
  // dpm('type: ' . $variables['pane']->type);
  if ($variables['pane']->type == 'block') {
    dpm('subtype: ' . $variables['pane']->subtype);
  }
}
?>
