<?php 

  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

  $theme_path = drupal_get_path('theme', 'utec_theme');  

  $titulo = $fields['title']->content; 

  $bloque = $fields['field_numero_de_bloque']->content;

  $curso = $fields['field_cursos']->content;

  
?>

  <ul class="grid-list grid-list-5 malla-curricular malla-curricular-primary">
    <li>
      <ul class="head">
        <li>01</li>
        <li>20<br>Créditos</li>
      </ul>
      <div class="body">
        <?php print $curso ?>
      </div>
    </li>
  </ul>
