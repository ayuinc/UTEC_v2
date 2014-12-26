<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

$theme_path = drupal_get_path('theme', 'utec_theme');  

$titulo = $node->title;   
$carrera_txt = $node->body['und']['0']['value'];
$carrera_link = $node->field_carrera_link['und']['0']['value'];
$malla_titulo = $node->field_malla_curricular_titulo['und']['0']['value'];
$malla_txt = $node->field_malla_curricular_body['und']['0']['value'];
$malla_link = $node->field_malla_curricular_link ['und']['0']['value'];
$menciones_titulo = $node->field_menciones_titulo  ['und']['0']['value'];
$menciones_txt = $node->field_menciones_body['und']['0']['value'];
$menciones_link = $node->field_menciones_link  ['und']['0']['value'];
$profesor_titulo = $node->field_profesor['und']['0']['value'];
$profesor_txt = $node->field_profesor_texto['und']['0']['value'];
$profesor_link = $node->field_profesor_link ['und']['0']['value'];
$perfil_txt = $node->field_perfil_egresado_texto['und']['0']['value'];
$perfil_link = $node->field_perfil_egresado_link['und']['0']['value'];

?>
<div class="hero-unit"> <!-- HERO -->
  <div data-section-scroll="Que es" class="section-scroll-content bg-img-block bg-img-block-lg flex-middle" style="background-image: url(/<?php print $theme_path?>/assets/img/bg-header-3.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-white normalize-text">
          <h2 class="thin">¿Qué es la</h2>
          <h1 class="thin"><?php print $titulo ?>?</h1>
          <hr class="hr-white">
          <div class="row">
            <div class="col-sm-3">
              <div class="size xl">
                <i class="icon-carreras-que-es"></i>
              </div>
            </div>
            <div class="col-sm-9">
              <h2 class="lead thin"><?php print $carrera_txt ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="scroll-down scroll-down-sq size lg" href="#sec-1" rel="nofollow">
      <i class="icon-arrows-down bg-white-op text-gray"></i>
    </a>
  </div>
</div> <!-- END:Hero -->
<div data-section-scroll="Malla curricular" class="section-scroll-content minh-560 flex-middle-center">
  <div class="container-sm text-right normalize-text">
    <h2 class="lead thin">Malla curricular</h2>
    <hr class="hr-gray">
    <div class="row">
      <div class="col-sm-9">
        <h2 class="lead thin"><?php print $malla_titulo ?></h2>
        <p><?php print $malla_txt ?></p>
      </div>
      <div class="col-sm-3">
        <div class="size xl">
          <i class="icon-carreras-malla"></i>
        </div>
      </div>
    </div>
  </div>
  <a class="scroll-down scroll-down-sq size lg" rel="nofollow">
    <i class="icon-arrows-down bg-info text-white"></i>
  </a>
</div>
<div data-section-scroll="Menciones" class="section-scroll-content minh-560 flex-middle-center bg-info-op">
  <div class="container-sm text-left text-white normalize-text">
    <h2 class="lead thin">Menciones</h2>
    <hr class="hr-white">
    <div class="row">
      <div class="col-sm-3">
        <div class="size xl">
          <i class="icon-carreras-menciones"></i>
        </div>
      </div>
      <div class="col-sm-9">
        <h2 class="lead thin"><?php print $menciones_titulo ?></h2>
        <p><?php print $menciones_txt ?></p>
      </div>
    </div>
  </div>
  <a class="scroll-down scroll-down-sq size lg" rel="nofollow">
    <i class="icon-arrows-down bg-info text-white"></i>
  </a>
</div>
<div data-section-scroll="Profesores" class="section-scroll-content minh-560 flex-middle-center">
  <div class="container-sm text-center normalize-text">
    <h2 class="lead thin">Profesores</h2>
    <hr class="hr-gray">
    <div class="size xl">
      <i class="icon-carreras-profesores"></i>
    </div>
  </div>
  <div class="container text-center">
    <ul class="grid-list grid-list-centered grid-list-4 grid-list-anchors pv-21">
      <?php $count = 0; ?>  
      <?php foreach ($node->field_profesor['und'] as $key => $value) :?>
        <?php   
          $name = $value['entity']->name; 
          $pic = $value['entity']->picture; 
          $desc = $value['entity']->field_descripci_n['und'][0]['value']; 
          print_r($name);

        ?>
      <li class="mb-ch-14">
        <div class="grid-list-pic"><img src="/<?php print('/'.$pathfile.$pic)?>" alt="" width="180px" height="auto" class="img-circle"></div>
        <a href="#" class="h3 thin"><?php print $name ?></a>
        <p class="h4 thin"><?php print $desc ?></p>
      </li>
      <?php $count++; ?>
      <?php endforeach ?>
    </ul>
    <h3 class="lead thin text-gray"><em><?php print $profesor_txt ?></em></h3>
  </div>
  <a class="scroll-down scroll-down-sq size lg" rel="nofollow">
    <i class="icon-arrows-down bg-info text-white"></i>
  </a>
</div>
<div data-section-scroll="Perfil del egresado" class="section-scroll-content bg-img-block bg-img-block-lg flex-middle" style="background-image: url(/<?php print $theme_path?>/assets/img/bg-header-4.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 text-white normalize-text">
        <h2 class="thin">Perfil del egresado</h2>
        <hr class="hr-white">
        <div class="row">
          <div class="col-sm-3">
            <div class="size xl">
              <i class="icon-carreras-perfil"></i>
            </div>
          </div>
          <div class="col-sm-9">
            <h2 class="lead thin"><?php print $perfil_txt ?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>