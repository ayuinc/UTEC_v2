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
?>

<?php 
if ($language->language == 'en') {
  $profesor_url = "/" . $language->prefix . "/" . drupal_get_path_alias('page/30/profesor-carrera/'.$uid.'/'.$carrera_id, $language->language); 
}else
  $profesor_url = "/" . drupal_get_path_alias('page/30/profesor-carrera/'.$uid.'/'.$carrera_id, $language->language); 
?> 
<li class="mb-ch-14">
  <div class="grid-list-pic" data-href="<?php print $profesor_url ?>">
    <img src="/<?php if($pic != ''){print file_create_url($pic);} else {print($pathfile.'pictures/'.'user.jpg'); }?>" alt="<?php print t('Faculty') ?>" width="180px" height="auto" class="img-circle">
  </div>
  <a href="<?php print $profesor_url ?>">
    <?php print $name ?>
  </a>
  <p class="font-profesores"><?php print $desc ?></p>
</li>















