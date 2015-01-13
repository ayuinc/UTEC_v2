<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/'); 
  
	$theme_path = drupal_get_path('theme', 'utec_theme');  
	
	$titulo = $node->title;   
	$carrera_txt = $node->body['und']['0']['value'];
	$carrera_link = $node->field_carrera_link['und']['0']['value'];
	$field_carrera_imagen = $node->field_carrera_imagen['und']['0']['filename'];
	$malla_titulo = $node->field_malla_curricular_titulo['und']['0']['value'];
	$malla_txt = $node->field_malla_curricular_body['und']['0']['value'];
	$malla_link = $node->field_malla_curricular_link ['und']['0']['value'];
	$menciones_titulo = $node->field_menciones_titulo  ['und']['0']['value'];
	$menciones_txt = $node->field_menciones_body['und']['0']['value'];
	$menciones_link = $node->field_menciones_link  ['und']['0']['value'];
	// $profesor_titulo = $node->field_profesor['und']['0']['value'];
	$profesor_txt = $node->field_profesor_texto['und']['0']['value'];
	$profesor_link = $node->field_profesor_link ['und']['0']['value'];
	$perfil_txt = $node->field_perfil_egresado_texto['und']['0']['value'];
	$perfil_link = $node->field_perfil_egresado_link['und']['0']['value'];
	$field_perfil_egresado_imagen = $node->field_perfil_egresado_imagen['und']['0']['filename'];

?>
<div class="hero-unit"> <!-- HERO -->
  <div data-section-scroll="Que es" id="que-es" class="section-scroll-content bg-img-block bg-img-block-lg flex-middle" style="background-image: url(<?php print('/'.$pathfile.$field_carrera_imagen)?>);">
    <div class="container-sm hero-text">
      <h2 class="thin h3 text-white mb-7">¿Qué es la</h2>
      <h1 class="thin text-white mt-0"><?php print $titulo ?>?</h1>
      <hr class="hr-white">
      <div class="row">
        <div class="col-sm-3">
          <div class="size xl">
            <i class="icon-carreras-que-es text-white"></i>
            <a href="<?php print $carrera_link ?>" class="btn btn-white btn-outline see-more mt-7">Ver más</a>
          </div>
        </div>
        <div class="col-sm-9">
          <h2 class="lead thin text-white h5 mt-0"><?php print $carrera_txt ?></h2>
        </div>
      </div>
    </div>
    <a class="scroll-down scroll-down-sq size lg" href="#malla-curricular" rel="nofollow">
      <i class="icon-arrows-down bg-white-op text-gray"></i>
    </a>
  </div>
  <div class="overlay"></div>
</div> <!-- END:Hero -->
<div data-section-scroll="Malla curricular" id="malla-curricular" class="malla-curricular section-scroll-content minh-560 flex-middle-center">
  <div class="container-sm text-right normalize-text">
    <h2 class="lead thin">Malla curricular</h2>
    <hr class="hr-gray">
    <div class="row">
      <div class="col-sm-9">
        <h2 class="lead thin mb-14 h3"><?php print $malla_titulo ?></h2>
        <p clas="font-carreras"><?php print $malla_txt ?></p>
      </div>
      <div class="col-sm-3">
        <div class="size xl">
          <i class="icon-carreras-malla"></i>
          <a href="<?php print $malla_link ?>" class="btn btn-primary btn-outline see-more mt-7">Ver más</a>
        </div>
      </div>
    </div>
  </div>
  <a class="scroll-down scroll-down-sq size lg" href="#menciones" rel="nofollow">
    <i class="icon-arrows-down bg-info text-white"></i>
  </a>
</div>
<div data-section-scroll="Menciones" id="menciones" class="section-scroll-content minh-560 flex-middle-center bg-info-op">
  <div class="container-sm text-left text-white normalize-text">
    <h2 class="lead thin">Menciones</h2>
    <hr class="hr-white">
    <div class="row">
      <div class="col-sm-3">
        <div class="size xl">
          <i class="icon-carreras-menciones"></i>
          <a href="<?php print $menciones_link ?>" class="btn btn-primary btn-outline see-more mt-7">Ver más</a>
        </div>
      </div>
      <div class="col-sm-9">
        <h2 class="lead thin h3"><?php print $menciones_titulo ?></h2>
        <p clas="font-carreras"><?php print $menciones_txt ?></p>
      </div>
    </div>
  </div>
  <a class="scroll-down scroll-down-sq size lg" href="#profesores" rel="nofollow">
    <i class="icon-arrows-down bg-info text-white"></i>
  </a>
</div>
<div data-section-scroll="Profesores" id="profesores" class="section-scroll-content minh-560 flex-middle-center">
  <div class="container-sm text-center normalize-text">
    <h2 class="lead thin">Profesores</h2>
    <hr class="hr-gray">
    <div class="size xl">
      <i class="icon-carreras-profesores"></i>
    </div>
  </div>
  <div class="container text-center" >
    <ul class="grid-list grid-list-centered grid-list-4 grid-list-anchors pv-21"> 
      <?php foreach ($node->field_profesor['und'] as $key => $value) :?>
        <?php $name = $value['entity']->name; ?>   
				<?php $pic = $value['entity']->picture->filename; ?>
        <?php $desc = $value['entity']->field_descripci_n['und'][0]['value']; ?>
        <?php //die(print_r($value)); ?>
	      <li class="mb-ch-14">
	        <div class="grid-list-pic"><img src="/<?php if($pic != ''){print($pathfile.'pictures/'.$pic);} else {print($pathfile.'pictures/'.'user.jpg'); }?>" alt="" width="180px" height="auto" class="img-circle"></div>
	        <!-- <a href="" class="h4 mb-0"> --><h4 class="mb-0"><?php print $name ?></h4><!-- </a> -->
	        <p class="font-profesores"><?php print $desc ?></p>
	      </li>
      <?php endforeach ?>
    </ul> 
    <h3 class="lead thin text-gray"><em><?php print $profesor_txt ?></em></h3>
  </div>
  <a class="scroll-down scroll-down-sq size lg" href="#perfil-egresado" rel="nofollow">
    <i class="icon-arrows-down bg-info text-white"></i>
  </a>
</div>
<div data-section-scroll="Perfil del egresado" id="perfil-egresado" class="section-scroll-content bg-img-block bg-img-block-lg flex-middle" style="background-image: url(<?php print('/'.$pathfile.$field_perfil_egresado_imagen)?>);">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 normalize-text">
        <h2 class="thin">Perfil del egresado</h2>
        <hr class="hr-gray">
        <div class="row">
          <div class="col-sm-3">
            <div class="size xl">
              <i class="icon-carreras-perfil"></i>
              <a href="<?php print $perfil_link ?>" class="btn btn-white btn-outline see-more mt-7">Ver más</a>
            </div>
          </div>
          <div class="col-sm-9">
            <h2 class="lead thin h3 ph-14"><?php print $perfil_txt ?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="section-scroll">
          <ul>
            <li><a href="#que-es" class="animated bounceInRight ad-0 scroll-ref-0 active">Que es</a></li>
            <li><a href="#malla-curricular" class="animated bounceInRight ad-2 scroll-ref-1">Malla curricular</a></li>
            <li><a href="#menciones" class="animated bounceInRight ad-4 scroll-ref-2">Menciones</a></li>
            <li><a href="#profesores" class="animated bounceInRight ad-6 scroll-ref-3">Profesores</a></li>
            <li><a href="#perfil-egresado" class="animated bounceInRight ad-8 scroll-ref-4">Perfil del egresado</a></li>
          </ul>
          <div class="text-right pv-21 btn-apply animated bounceInRight">
            <a href="#" class="btn btn-primary uppercase">Postular</a>
          </div>
</div>