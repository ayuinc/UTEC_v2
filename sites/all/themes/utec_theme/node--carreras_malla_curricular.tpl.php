<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

  $theme_path = drupal_get_path('theme', 'utec_theme');  

  $titulo = $node->title;   

  $bloque = $node->field_numero_de_bloque['und']['0']['value'];

  $area = $node->field_area['und']['0']['value'];

  $creditos = $node->field_n_mero_creditos['und']['0']['value'];

  $curso = $node->field_curso['und']['0']['value'];

  $carrera = $node->field_carrera_referencia['und']['0']['value'];
die(print_r($node));
?>
<h3 class="thin lead">Malla curricular</h3>
<div class="separator-gray separator-lg"></div>
<h3 class="lead thin">Ciclo 2015 - I</h3>
<div class="mb-ch-70">
  <ul class="grid-list grid-list-5 malla-curricular malla-curricular-primary">
    <li>
      <ul class="head">
        <li>01</li>
        <li>20<br>Créditos</li>
      </ul>
      <div class="body">
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
        <ul>
          <li></li>
          <li>Cálculo 1<br>6 CRD</li>
        </ul>
      </div>
    </li>
    <li>
      <ul class="head">
        <li>01</li>
        <li>20<br>Créditos</li>
      </ul>
      <div class="body">
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
        <ul>
          <li></li>
          <li>Cálculo 1<br>6 CRD</li>
        </ul>
      </div>
    </li>
    <li>
      <ul class="head">
        <li>01</li>
        <li>20<br>Créditos</li>
      </ul>
      <div class="body">
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
        <ul>
          <li></li>
          <li>Cálculo 1<br>6 CRD</li>
        </ul>
      </div>
    </li>
    <li>
      <ul class="head">
        <li>01</li>
        <li>20<br>Créditos</li>
      </ul>
      <div class="body">
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
        <ul>
          <li></li>
          <li>Cálculo 1<br>6 CRD</li>
        </ul>
      </div>
    </li>
  </ul>
</div>