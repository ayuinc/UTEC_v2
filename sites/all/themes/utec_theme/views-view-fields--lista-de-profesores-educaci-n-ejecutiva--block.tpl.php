<?php 
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

  $uid = $fields['uid']->content;
  $name = $fields['name']->content;
	$pic = $fields['picture']->content;

  if ($language->prefix) {
    $profesor_url = "/" . $language->prefix . "/" . drupal_get_path_alias('page/67/profesor-edp/'.$uid, $language->language); 
  }else
    $profesor_url = "/" . drupal_get_path_alias('page/67/profesor-edp/'.$uid, $language->language); 
?>

<li data-href="<?php print $profesor_url ?>">
  <div class="user-card user-card-round size lg">
    <div class="user-pic"><img src="<?php if($pic != ''){print($pic);} else {print ($pathfile.'pictures/'.$pic); }?>" alt="<?php print $name ?>"></div>
    <div class="user-info">
      <!--<a href="#">Rosa María Llosa Demartini</a>-->
      <a href="<?php print $profesor_url ?>"><?php print $name ?></a>
    </div>
  </div>
</li>