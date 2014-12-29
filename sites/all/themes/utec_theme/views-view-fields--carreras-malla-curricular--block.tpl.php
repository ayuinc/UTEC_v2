<?php 

  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

  $theme_path = drupal_get_path('theme', 'utec_theme');  

  $titulo = $fields['title']->content; 

  $bloque = $fields['field_numero_de_bloque']->content;
  
  $total_creditos = $fields['field_creditos_del_bloque']->content;

  $curso = $fields['field_cursos']->content;

  
?>  
<li>
  <ul class="head">
    <li><?php print $bloque; ?></li>
    <li><?php print $total_creditos; ?><br>Créditos</li>
  </ul>
  <div class="body">
    <?php print $curso ?>
  </div>
</li>
  
