<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

  $title = $fields['title']->content;
	$body = $fields['body']->content;
	$logo = $fields['field_image']->content;
	$path = $fields['path']->content;
  //kpr($fields);
?>
<li data-href="<?php print $path ?>">
  <div>
    <img src="<?php print($logo)?>" alt="<?php print $title ?>" width="100%" height="auto">
  </div>
</li>