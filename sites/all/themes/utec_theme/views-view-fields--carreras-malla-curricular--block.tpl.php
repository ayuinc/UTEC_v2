<?php 

  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

  $theme_path = drupal_get_path('theme', 'utec_theme');  

  $titulo = $fields['title']->content; 

  $bloque = $fields['field_numero_de_bloque']->content;

  $curso = $fields['field_cursos']->content;

  $node = node_load($curso);

  print_r($node);
  $area = $node['field_area']['und']['0']['value'];

  #8dc63f
  #ffdd00
  #afdfe4

  $creditos = $node['field_n_mero_creditos']['und']['0']['value'];

  // $carrera = $fields['field_carrera_referencia']->content;
  
?>

  <ul class="grid-list grid-list-5 malla-curricular malla-curricular-primary">
    <li>
      <ul class="head">
        <li>01</li>
        <li>20<br>Créditos</li>
      </ul>
      <div class="body">
        <ul>
          <li></li>
          <li><?php print $curso; ?><br><?php print $creditos ?> CRD</li>
        </ul>
        <ul>
          <li></li>
          <li>Cálculo 1<br>6 CRD</li>
        </ul>
        <ul>
          <li></li>
          <li>Cálculo 1<br>6 CRD</li>
        </ul>
        <ul>
          <li></li>
          <li>Cálculo 1<br>6 CRD</li>
        </ul>
        <ul>
          <li></li>
          <li>Cálculo 1<br>6 CRD</li>
        </ul>
      </div>
    </li>
  </ul>
