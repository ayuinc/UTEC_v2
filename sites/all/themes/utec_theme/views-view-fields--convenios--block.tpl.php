<?php

  $title = $fields['title']->content;
	$body = $fields['body']->content;
	$logo = $fields['field_image']->content;
	$path = $fields['path']->content;

?>
<li data-href="<?php print $path ?>">
  <div>
    <img src="<?php print($logo)?>" alt="<?php print $title ?>" width="100%" height="auto">
  </div>
</li>