<?php 
kpr($node);
// $video_name = $node->field_video['und']['0']['filename'];

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
  <div data-section-scroll="Que es" class="section-scroll-content bg-img-block bg-img-block-lg flex-middle" style="background-image: url(assets/img/bg-header-3.jpg);">
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
      <li class="mb-ch-14">
        <div class="grid-list-pic"><img src="assets/img/user.jpg" alt="" width="180px" height="auto" class="img-circle"></div>
        <a href="#" class="h3 thin"><?php print $profesor_titulo ?></a>
      </li>
      <li class="mb-ch-14">
        <div class="grid-list-pic"><img src="assets/img/user.jpg" alt="" width="180px" height="auto" class="img-circle"></div>
        <a href="#" class="h3 thin">Rosa María Llosa Demartini</a>
      </li>
      <li class="mb-ch-14">
        <div class="grid-list-pic"><img src="assets/img/user.jpg" alt="" width="180px" height="auto" class="img-circle"></div>
        <a href="#" class="h3 thin">Rosa María Llosa Demartini</a>
      </li>
      <li class="mb-ch-14">
        <div class="grid-list-pic"><img src="assets/img/user.jpg" alt="" width="180px" height="auto" class="img-circle"></div>
        <a href="#" class="h3 thin">Rosa María Llosa Demartini</a>
      </li>
    </ul>
    <h3 class="lead thin text-gray"><em><?php print $profesor_txt ?></em></h3>
  </div>
  <a class="scroll-down scroll-down-sq size lg" rel="nofollow">
    <i class="icon-arrows-down bg-info text-white"></i>
  </a>
</div>
<div data-section-scroll="Perfil del egresado" class="section-scroll-content bg-img-block bg-img-block-lg flex-middle" style="background-image: url(assets/img/bg-header-4.jpg);">
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
<!-- <div class="pvp-7">
  <div class="container">
    <h2 class="lead medium"><span class="text-gray-darker">¿Listo para</span> <span class="text-gray">cambiar el mundo?</span></h2>
    <h4 class="lead">Éstas son nuestras carreras:</h4>
    <ul class="grid-list grid-list-5 pv-21 list-carreras">
      <li>
        <div onclick="goTo()">
          <div><i class="icon-ing-quimica"></i></div>
          <h2>
            <a href="#">
              <span>Ingeniería</span>
              <span>Química</span>
              <span>Industrial</span>
            </a>
          </h2>
        </div>
      </li>
      <li>
        <div onclick="goTo()">
          <div><i class="icon-ing-industrial"></i></div>
          <h2>
            <a href="carreras.html">
              <span>Ingeniería</span>
              <span>Industrial</span>
              <span></span>
            </a>
          </h2>
        </div>
      </li>
      <li>
        <div onclick="goTo()">
          <div><i class="icon-ing-energia"></i></div>
          <h2>
            <a href="#">
              <span>Ingeniería</span>
              <span>De la energía</span>
              <span></span>
            </a>
          </h2>
        </div>
      </li>
      <li>
        <div onclick="goTo()">
          <div><i class="icon-ing-electronica"></i></div>
          <h2>
            <a href="#">
              <span>Ingeniería</span>
              <span>Electrónica</span>
              <span></span>
            </a>
          </h2>
        </div>
      </li>
      <li>
        <div onclick="goTo()">
          <div><i class="icon-ing-mecanica"></i></div>
          <h2>
            <a href="#">
              <span>Ingeniería</span>
              <span>Mecánica</span>
              <span></span>
            </a>
          </h2>
        </div>
      </li>
    </ul>
  </div>
</div> -->