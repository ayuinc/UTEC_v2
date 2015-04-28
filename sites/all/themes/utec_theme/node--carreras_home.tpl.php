<?php global $language ?>
<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/'); 
  
	$theme_path = drupal_get_path('theme', 'utec_theme');  
	
	$titulo = $node->title;   
	$carrera_txt = $node->body['und']['0']['value'];
	$carrera_link = $node->field_carrera_link['und']['0']['value'];
	$field_carrera_imagen = $node->field_image['und']['0']['uri'];
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
	$field_perfil_egresado_imagen = $node->field_image_2['und']['0']['uri'];

  $carrera_id = $node->field_carrera_referencia['und']['0']['tid'];



  // load the view 
  $view = views_get_view('profesores_por_carrera');
  // set active display on the view
  $view->set_display('block');
  // set any needed arguments
  $view->set_arguments(array(arg(2)));
  // execute the view
  $view->execute();
  // display the results
 

  // kpr($view);
  // profe$view->result;

?>
<div class="hero-unit"> <!-- HERO -->
  <div
  <?php if ($language->language == 'en'): ?>
    data-section-scroll="What is?" id="whatis"
  <?php elseif ($language->language != 'en'): ?>
    data-section-scroll="¿Qué es?" id="que-es"
  <?php endif ?>
   class="scroll-down-white section-scroll-content bg-img-block bg-img-block-lg" style="background-image: url(<?php print image_style_url($image_style, $field_carrera_imagen); ?>);">
    <div class="overlay flex-middle">
      <div class="container-sm hero-text" data-href="<?php print $carrera_link ?>">
        <h3 class="thin h3 text-white mb-7"><?php print t('What is') ?></h3>
        <h1 class="thin mt-0"><a class="text-white text-hover-primary" href="<?php print $carrera_link ?>"><?php print $titulo ?></a><span class="text-white">?</span></h1>
        <hr class="hr-white">
        <div class="row mt-28">
          <div class="col-sm-3 hidden-xs">
            <div class="size xl">
              <i class="icon-carreras-que-es text-white"></i>
              <span class="btn btn-white btn-outline see-more bold mt-7"><?php print t('See more') ?></span>
            </div>
          </div>
          <div class="col-sm-9">
            <h2 class="lead thin text-white h5 mt-0"><?php print $carrera_txt ?></h2>
            <span class="btn btn-white btn-outline see-more bold mt-7 visible-xs-inline-block mt-14"><?php print t('See more') ?></span>
          </div>
        </div>
      </div>
      <!-- <a class="scroll-down scroll-down-sq size lg" href="#mallacurricular" rel="nofollow">
        <i class="icon-arrows-down bg-white-op text-gray"></i>
      </a> -->
    </div>
  </div>
</div> <!-- END:Hero -->
<div data-section-scroll="<?php print t('Curricular Structure') ?>" id="malla-curricular" class="scroll-down-info malla-curricular section-scroll-content minh-560 flex-middle-center">
  <div class="container-sm text-right normalize-text" data-href="<?php print $malla_link ?>">
    <h2 class="lead thin h1"><a href="<?php print $malla_link ?>" class="text-hover-primary text-gray-dark"><?php print t('Curricular Structure') ?></a></h2>
    <hr class="hr-gray">
    <div class="row mt-28">
      <div class="col-sm-9">
        <h3 class="lead h2 thin mb-14 h4"><?php print $malla_titulo ?></h3>
        <p clas="font-carreras"><?php print $malla_txt ?></p>
        <span class="btn btn-gray-darker btn-outline see-more bold mt-7 visible-xs-inline-block mt-14"><?php print t('See more') ?></span>
      </div>
      <div class="col-sm-3 hidden-xs">
        <div class="size xl">
          <i class="icon-carreras-malla"></i>
          <span class="btn btn-gray-darker btn-outline see-more bold mt-7"><?php print t('See more') ?></span>
        </div>
      </div>
    </div>
  </div>
  <!-- <a class="scroll-down scroll-down-sq size lg" href="#menciones" rel="nofollow">
    <i class="icon-arrows-down bg-info text-white"></i>
  </a> -->
</div>
<div data-section-scroll="<?php print t('Minors') ?>" id="menciones" class="scroll-down-info section-scroll-content minh-560 flex-middle-center bg-info-op">
  <div class="container-sm text-left text-white normalize-text" data-href="<?php print $menciones_link ?>">
    <h2 class="lead thin h1"><a href="<?php print $menciones_link ?>" class="text-hover-primary text-white"><?php print t('Minors') ?></a></h2>
    <hr class="hr-white">
    <div class="row mt-28">
      <div class="col-sm-3 hidden-xs">
        <div class="size xl">
          <i class="icon-carreras-menciones"></i>
          <span class="btn btn-white btn-outline see-more bold mt-7"><?php print t('See more') ?></span>
        </div>
      </div>
      <div class="col-sm-9">
        <h3 class="lead thin h4"><?php print $menciones_titulo ?></h3>
        <p clas="font-carreras"><?php print $menciones_txt ?></p>
        <span class="btn btn-white btn-outline see-more bold mt-7 visible-xs-inline-block mt-14"><?php print t('See more') ?></span>
      </div>
    </div>
  </div>
  <!-- <a class="scroll-down scroll-down-sq size lg" href="#profesores" rel="nofollow">
    <i class="icon-arrows-down bg-info text-white"></i>
  </a> -->
</div>
<div data-section-scroll="<?php print t('Faculty') ?>" id="profesores" class="scroll-down-info section-scroll-content minh-560 flex-middle-center">
  <div class="container-sm text-center normalize-text php-7">
    <h2 class="lead thin h1 text-hover-primary"><?php print t('Faculty') ?></h2>
    <hr class="hr-gray">
    <div class="size xl mt-28">
      <i class="icon-carreras-profesores"></i>
    </div>
  </div>
  <div class="container text-center profesores-carrera" >
    <?php print $view->render(); ?>
  </div>
  <div class="container-sm">
    <h3 class="lead thin text-gray"><em><?php print $profesor_txt ?></em></h3>
  </div>
  <!-- <a class="scroll-down scroll-down-sq size lg" href="#perfilegresado" rel="nofollow">
    <i class="icon-arrows-down bg-info text-white"></i>
  </a> -->
</div>
<div data-section-scroll="<?php print t('Graduate profile') ?>" id="perfil-egresado" class="section-scroll-content bg-img-block bg-img-block-lg flex-middle" style="background-image: url(<?php print image_style_url($image_style, $field_perfil_egresado_imagen); ?>);">
  <div class="container" data-href="<?php print $perfil_link ?>">
    <div class="row">
      <div class="col-sm-6 normalize-text">
        <h2 class="thin h1"><a href="<?php print $perfil_link ?>" class="text-hover-primary text-gray-dark"><?php print t('Graduate profile') ?></a></h2>
        <hr class="hr-gray">
        <div class="row">
          <div class="col-sm-3 hidden-xs">
            <div class="size xl">
              <i class="icon-carreras-perfil"></i>
              <span class="btn btn-gray-darker btn-outline see-more bold mt-7"><?php print t('See more') ?></span>
            </div>
          </div>
          <div class="col-sm-9">
            <h3 class="lead thin h3 ph-14"><?php print $perfil_txt ?></h3>
            <span class="btn btn-gray-darker btn-outline see-more bold mt-7 visible-xs-inline-block mt-14"><?php print t('See more') ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="section-scroll" class="hidden-sm hidden-xs">
  <ul></ul>
  <div class="text-right pv-21 btn-apply animated">
    <?php if ($language->language != 'en'): ?>
      <a class="btn btn-primary uppercase atm-scroll-item" href="/modalidades-de-admision"><?php print t('Apply') ?></a>
    <?php elseif ($language->language == 'en'): ?>
      <a class="btn btn-primary uppercase atm-scroll-item" href="/<?php print $language->language ?>/methods-of-admission"><?php print t('Apply') ?></a>
    <?php endif ?>  
  </div>
</div>