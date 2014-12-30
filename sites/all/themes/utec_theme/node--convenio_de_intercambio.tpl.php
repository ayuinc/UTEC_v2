<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;
  $cuerpo = $node->body['und']['0']['value'];
	$link = $node->field_link_['und']['0']['value'];
  $imagen = $node->field_image['und']['0']['filename'];

?>

<div class="container-sm">
  <h1 class="light">Modalidades de admisión</h1>
  <div class="separator-gray separator-lg"></div>
  <ul class="grid-list grid-list-3 grid-list-hover">
    <li data-href="//">
      <div>
        <h3 class="thin lead">Primeros puestos</h3>
        <div class="size xl">
          <i class="icon-admisiones-primeros-puestos"></i>
        </div>
      </div>
    </li>
    <li data-href="//">
      <div>
        <h3 class="thin lead">Alto rendimiento</h3>
        <div class="size xl">
          <i class="icon-admisiones-alto-rendimiento"></i>
        </div>
      </div>
    </li>
    <li data-href="//">
      <div>
        <h3 class="thin lead">Traslado</h3>
        <div class="size xl">
          <i class="icon-admisiones-traslado"></i>
        </div>
      </div>
    </li>
    <li data-href="//">
      <div>
        <h3 class="thin lead">Centro PRE</h3>
        <div class="size xl">
          <i class="icon-admisiones-centro-pre"></i>
        </div>
      </div>
    </li>
    <li data-href="//">
      <div>
        <h3 class="thin lead">Bachillerato internacional</h3>
        <div class="size xl">
          <i class="icon-admisiones-bachillerato"></i>
        </div>
      </div>
    </li>
    <li data-href="//">
      <div>
        <h3 class="thin lead">Examen de admisión</h3>
        <div class="size xl">
          <i class="icon-admisiones-examen"></i>
        </div>
      </div>
    </li>
  </ul>
  <h3>Si postulaste a una de estas modalidades consulta tus resultados.</h3>
  <a href="#" class="btn btn-primary btn-lg uppercase see-more">Ver resultados aquí</a>
</div>