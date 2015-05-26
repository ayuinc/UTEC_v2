<?php  

	$uid = $fields['field_profesor']->content;
	$user = user_load($uid);
	$name = $user->name;
	$pic = $user->picture->uri;
	$desc = $user->field_descripci_n['und']['0']['value'];
  $desc        = $user->field_descripci_n_consejo_dir['und'][0]['value'];
  $desc_ingles = $user->field_descripci_n_consejo_dir_in['und']['0']['value'];

  if ($language->language != 'en') {
    $profesor_url = "/" . drupal_get_path_alias('page/30/consejo-directivo/'.$uid, $language->language);
  } 
  if ($language->language == 'en') {
    $profesor_url = "/" . $language->prefix . "/" . drupal_get_path_alias('page/30/consejo-directivo/'.$uid, $language->language);
  }

?>

<li class="mb-ch-14">
  <div class="grid-list-pic"><img src="/<?php if($pic != ''){print file_create_url($pic);} else {print($pathfile.'pictures/'.$pic); }?>" alt="<?php print $name ?>" width="98px" height="auto" class="img-circle"></div>
  <div>
    <a href="<?php print $profesor_url ?>"><?php print $name ?></a>
    <?php if ($language->language != 'en'): ?>
      <span><?php print $desc?></span>
    <?php elseif ($language->language == 'en'): ?>
      <span><?php print $desc_ingles?></span>
    <?php endif ?>          
  </div>
</li>












