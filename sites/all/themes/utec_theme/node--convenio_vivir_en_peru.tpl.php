<?php 
	
	$titulo = $node->title;   
	$descripcion_general = $node->body['und']['0']['value'];
	$imagen_cabecera = $node->field_image['und']['0']['uri'];

  $titulo_bloque_2 = $node->field_texo['und']['0']['value'];
  $cuerpo_bloque_2 = $node->field_descripci_n['und']['0']['value'];
  $imagenes_bloque_2 = $node->field_image['und'];

  $titulo_bloque_3 = $node->field_dia['und']['0']['value'];    
  $titulos_tab_bloque_3 = $node->field_nombre['und'];     
  $cuerpos_tab_bloque_3 = $node->field_cuerpo['und']; 

  $titulo_bloque_4 = $node->field_texto_superior_1['und']['0']['value'];     
  $titulos_tab_bloque_4 = $node->field_titulo_tab_bloque_4['und'];    
  $cuerpos_tab_bloque_4 = $node->field_cuerpo_tab_bloque_4['und'];  
  $imagenes_bloque_4 = $node->field_imagenes_bloque_4['und'];

  $titulo_bloque_5 = $node->field_mes['und']['0']['value'];    
  $imagenes_bloque_5 = $node->field_clase_icono['und'];    
  $titulos_bloque_5  = $node->field_titulos_bloque_5['und'];     
  $contenidos_bloque_5 = $node->field_contenido_bloque_5['und'];

  $titulo_bloque_6 = $node->field_hora['und']['0']['value'];     
  $titulos_tab_bloque_6 = $node->field_titulo_tab_bloque_6['und'];    
  $cuerpos_tab_bloque_6 = $node->field_contenido_tab_bloque_6['und'];   
  $imagenes_bloque_6 = $node->field_imagenes_bloque_6['und'];

  kpr($node);

?>
<!-- CABECERA -->
<div class="hero-unit"> <!-- HERO -->
  <div class="scroll-down-white section-scroll-content bg-img-block bg-img-block-lg" style="background-image: url(<?php print image_style_url($image_style_2, $imagen_cabecera); ?>);">
    <div class="overlay flex-middle">
      <div class="container-sm hero-text">
        <h2 class="light text-white"><?php print $titulo ?> </h2>
        <div class="separator-white separator-sm"></div>
        <div class="text-white light h4"><?php print $descripcion_general ?></div>
      </div>
    </div>
  </div>
</div> <!-- END:Hero -->

<!-- BLOQUE 2 -->
<div class="container-sm">
  <h2 class="light"><?php print $titulo_bloque_2 ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="p-ch-gray-dark">
    <div class="pv-ch-7">
      <?php print $cuerpo_bloque_2 ?>   
    </div>
    <div id="carousel-custom" class="carousel carousel-custom slide mb-42 mt-28" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <?php $count = 0; ?>
        <?php foreach ($imagenes_bloque_2 as $key => $imagen_bloque_2): ?>
        <div class="item <?php ($count == 0) ? print 'active' : '' ; ?>">
          <div class="banner banner-label-bottom mb-7 ml-0">
            <div class="banner-pic" style="background-image: url(<?php print image_style_url($image_style, $imagen_bloque_2['uri']); ?>);">
            </div>
          </div>
        </div>
        <?php $count ++; ?>
        <?php endforeach ?>
      </div>
      <!-- Controls --> 
      <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true"></span>
        <span class="sr-only">Previews</span>
      </a>
      <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
        <span class="icon-next hidden-xs" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>  
    </div>
  </div>
</div>
<!-- BLOQUE 3 -->
<div class="container-sm">
  <h2 class="light"><?php print $titulo_bloque_3 ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="p-ch-gray-dark">
    <!-- <div class="pv-ch-7"> -->
      <?php //print $descripcion ?>   
    <!-- </div> -->
    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <?php $count = 0; ?>
        <?php foreach ($titulos_tab_bloque_3 as $key => $titulo_tab_bloque_3): ?>
        <li role="presentation" class="<?php ($count == 0) ? print 'active' : '' ; ?>">
          <a href="#tab-<?php print $count ?>" aria-controls="tab-<?php print $count ?>" role="tab" data-toggle="tab">
            <?php print $titulo_tab_bloque_3['value'] ?>
          </a>
        </li>
        <?php $count++; ?>
        <?php endforeach ?>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <?php $count = 0; ?>
        <?php foreach ($cuerpos_tab_bloque_3 as $key => $cuerpo_tab_bloque_3): ?>
        <div role="tabpanel" class="tab-pane <?php ($count == 0) ? print 'active' : '' ; ?>" id="tab-<?php print $count ?>"><?php print $cuerpo_tab_bloque_3['value'] ?></div>
        <?php $count++; ?>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>
<!-- BLOQUE 4 -->
<div class="container-sm">
  <h2 class="light"><?php print $titulo_bloque_4 ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="p-ch-gray-dark">
    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <?php $count = 0; ?>
        <?php foreach ($titulos_tab_bloque_4 as $key => $titulo_tab_bloque_4): ?>
        <li role="presentation" class="<?php ($count == 0) ? print 'active' : '' ; ?>">
          <a href="#tab-<?php print $count ?>" aria-controls="tab-<?php print $count ?>" role="tab" data-toggle="tab">
            <?php print $titulo_tab_bloque_4['value'] ?>
          </a>
        </li>
        <?php $count++; ?>
        <?php endforeach ?>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <?php $count = 0; ?>
        <?php foreach ($cuerpos_tab_bloque_4 as $key => $cuerpo_tab_bloque_4): ?>
        <div role="tabpanel" class="tab-pane <?php ($count == 0) ? print 'active' : '' ; ?>" id="tab-<?php print $count ?>"><?php print $cuerpo_tab_bloque_4['value'] ?></div>
        <?php $count++; ?>
        <?php endforeach ?>
      </div>
    </div>
    <div id="carousel-bloque4" class="carousel carousel-custom slide mb-42 mt-35" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <?php $count = 0; ?>
        <?php foreach ($imagenes_bloque_4 as $key => $imagen_bloque_4): ?>
        <div class="item <?php ($count == 0) ? print 'active' : '' ; ?>">
          <div class="banner banner-label-bottom mb-7 ml-0">
            <div class="banner-pic" style="background-image: url(<?php print image_style_url($image_style, $imagen_bloque_4['uri']); ?>);">
            </div>
          </div>
        </div>
        <?php $count ++; ?>
        <?php endforeach ?>
      </div>
      <!-- Controls --> 
      <a class="left carousel-control" href="#carousel-bloque4" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true"></span>
        <span class="sr-only">Previews</span>
      </a>
      <a class="right carousel-control" href="#carousel-bloque4" role="button" data-slide="next">
        <span class="icon-next hidden-xs" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>  
    </div>
  </div>
</div>
<!-- BLOQUE 5 -->
<div class="container-sm">
  <h2 class="light"><?php print $titulo_bloque_5 ?></h2>
  <div class="separator-gray separator-sm"></div>
  <?php foreach ($imagenes_bloque_5 as $key => $imagen_bloque_5): ?> 
  <div class="list-custom-left">
    <ul>
      <li class="text-center">
        <div class="grid-list-pic">
          <i class="<?php print $imagen_bloque_5['value']; ?>" style="font-size:5rem"></i>
        </div>
      </li>           
      <li class="pl-21 text-gray">
        <div class="mb-7 text-center-xs">
          <div class="thin h3"><?php print $titulos_bloque_5[$key]['value']; ?></div>
          <div><?php print $contenidos_bloque_5[$key]['value']; ?></div>              
        </div>                             
      </li>
    </ul>
  </div>
  <?php endforeach ?>
</div>
<!-- BLOQUE 6 -->
<div class="container-sm">
  <h2 class="light"><?php print $titulo_bloque_6 ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="p-ch-gray-dark">
    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <?php $count = 0; ?>
        <?php foreach ($titulos_tab_bloque_6 as $key => $titulo_tab_bloque_6): ?>
        <li role="presentation" class="<?php ($count == 0) ? print 'active' : '' ; ?>">
          <a href="#tab-<?php print $count ?>" aria-controls="tab-<?php print $count ?>" role="tab" data-toggle="tab">
            <?php print $titulo_tab_bloque_6['value'] ?>
          </a>
        </li>
        <?php $count++; ?>
        <?php endforeach ?>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <?php $count = 0; ?>
        <?php foreach ($cuerpos_tab_bloque_6 as $key => $cuerpo_tab_bloque_6): ?>
        <div role="tabpanel" class="tab-pane <?php ($count == 0) ? print 'active' : '' ; ?>" id="tab-<?php print $count ?>"><?php print $cuerpo_tab_bloque_6['value'] ?></div>
        <?php $count++; ?>
        <?php endforeach ?>
      </div>
    </div>
    <div id="carousel-bloque6" class="carousel carousel-custom slide mb-42" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <?php $count = 0; ?>
        <?php foreach ($imagenes_bloque_6 as $key => $imagen_bloque_6): ?>
        <div class="item <?php ($count == 0) ? print 'active' : '' ; ?>">
          <div class="banner banner-label-bottom mb-7 ml-0">
            <div class="banner-pic" style="background-image: url(<?php print image_style_url($image_style, $imagen_bloque_6['uri']); ?>);">
            </div>
          </div>
        </div>
        <?php $count ++; ?>
        <?php endforeach ?>
      </div>
      <!-- Controls --> 
      <a class="left carousel-control" href="#carousel-bloque6" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true"></span>
        <span class="sr-only">Previews</span>
      </a>
      <a class="right carousel-control" href="#carousel-bloque6" role="button" data-slide="next">
        <span class="icon-next hidden-xs" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>  
    </div>
  </div>
</div>


