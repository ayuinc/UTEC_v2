<?php 

  $texto_corto = $fields['field_texto_corto']->content;
  $dia = $fields['field_dia']->content;
  $mes = $fields['field_mes']->content;
	$lugar = $fields['field_lugar']->content;
	$path = $fields['path']->content;

?>

<li data-href="<?php print $path; ?>">
  <div class="date"><div class="num"><?php print $dia ?></div>
  <div class="month"><?php print $mes ?></div></div>
  <div>
    <h2 class="thin h5"><?php print $texto_corto ?></h2>
  </div>
</li>