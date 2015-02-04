<?php 
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

	$uid = $fields['field_profesor']->content;
	$user = user_load($uid);

	$name = $user->name;
	$pic = $user->picture->uri;
	$desc = $user->field_descripci_n['und']['0']['value'];
	//kpr($user);
  $desc        = $user->field_descripci_n_autoridad['und'][0]['value'];
  $desc_ingles = $user->field_descripci_n_autoridad_ingl['und']['0']['value'];
  $res         = $user->field_rese_a_autoridad['und']['0']['value'];
  $res_ingles  = $user->field_rese_a_autoridad_ingles['und']['0']['value'];  


  if ($language->prefix) {
    $profesor_url = "/" . $language->prefix . "/" . drupal_get_path_alias('page/30/autoridades/'.$uid, $language->language); 
  }else
    $profesor_url = "/" . drupal_get_path_alias('page/30/autoridades/'.$uid, $language->language); 
?>

<li data-href="<?php print $profesor_url ?>">
  <div class="user-card user-card-round size lg">
    <div class="user-pic"><img src="<?php if($pic != ''){print file_create_url($pic);} else {print ($pathfile.'pictures/'.$pic); }?>" alt="<?php print $name ?>"></div>
    <div class="user-info">
      <!--<a href="#">Rosa María Llosa Demartini</a>-->
      <a href="<?php print $profesor_url ?>"><?php print $name ?></a>
      <?php if ($language->language == 'en') : ?>
      <span><?php print $desc_ingles?></span>
      <?php else : ?>
      <span><?php print $desc?></span>
      <?php endif; ?>
  </div>
</li>















