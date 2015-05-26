<?php 

  $uid = $fields['field_profesor']->content;
	$term_name = $fields['field_carrera_referencia']->content;
	$user = user_load($uid);
	$name = $user->name;
	$pic = $user->picture->uri;
	$desc = $user->field_descripci_n['und']['0']['value'];
  $carrera = taxonomy_get_term_by_name($term_name);
  foreach ($carrera as $value) {
    $carrera_id = $value->tid;
  }

?>

<?php 
if ($language->language == 'en') {
  $profesor_url = "/" . $language->prefix . "/" . drupal_get_path_alias('page/30/profesores/'.$uid, $language->language); 
}else
  $profesor_url = "/" . drupal_get_path_alias('page/30/profesores/'.$uid, $language->language); 
?> 
<?php if ($uid): ?>
<li class="mb-ch-14" data-href="<?php print $profesor_url ?>">
  <div class="grid-list-pic" data-href="<?php print $profesor_url ?>">
    <img src="<?php if($pic != ''){print file_create_url($pic);} else {print($pathfile.'pictures/'.'user.jpg'); }?>" alt="<?php print $name; ?>" width="180px" height="auto" class="img-circle">
  </div>
  <a href="<?php print $profesor_url ?>">
    <?php print $name ?>
  </a>
</li>
<?php endif ?>
















