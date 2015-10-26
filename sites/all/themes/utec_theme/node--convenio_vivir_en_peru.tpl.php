<?php 
	
	$titulo = $node->title;   
	$descripcion_general = $node->body['und']['0']['value'];
	$imagen_cabecera = $node->field_image_2['und']['0']['uri'];

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
  // $imagenes_bloque_5 = $node->field_clase_icono['und'];    
  $imagenes_bloque_5 = $node->field_imagenes_bloque_5['und'];    
  $titulos_bloque_5  = $node->field_titulos_bloque_5['und'];     
  $contenidos_bloque_5 = $node->field_contenido_bloque_5['und'];

  $titulo_bloque_6 = $node->field_hora['und']['0']['value'];     
  $titulos_tab_bloque_6 = $node->field_titulo_tab_bloque_6['und'];    
  $cuerpos_tab_bloque_6 = $node->field_contenido_tab_bloque_6['und'];   
  $imagenes_bloque_6 = $node->field_imagenes_bloque_6['und'];

  // $pen = $node->pen['und']['0']['value'];
  // print_r($currency);

?>
<!-- CABECERA -->
<div class="hero-unit"> <!-- HERO -->
  <div class="scroll-down-white section-scroll-content bg-img-block bg-img-block-lg" style="background-size: cover; background-position: center; background-image: url(<?php print image_style_url($image_style_2, $imagen_cabecera); ?>);">
    <div class="overlay flex-middle">
      <div class="container-sm hero-text">
        <h2 class="light text-white"><?php print $titulo ?> </h2>
        <div class="separator-white separator-sm"></div>
        <div class="text-white light h4"><?php print $descripcion_general ?></div>
      </div>
    </div>
    <a class="scroll-down scroll-down-sq size lg" href="#block2" rel="nofollow"><i class="icon-arrows-down bg-cyan"></i></a>
  </div>
</div> <!-- END:Hero -->

<!-- BLOQUE 2 -->
<div class="container-sm section-scroll-content pt-28 pb-56" id="block2">
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
        <?php if ($imagen_bloque_2): ?>
        <div class="item <?php ($count == 0) ? print 'active' : '' ; ?>">
          <div class="banner banner-label-bottom mb-7 ml-0">
            <div class="banner-pic" style="background-image: url(<?php print image_style_url($image_style, $imagen_bloque_2['uri']); ?>);">
            </div>
          </div>
        </div>
        <?php endif ?>
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
  <a class="scroll-down scroll-down-sq size lg" href="#block3" rel="nofollow"><i class="icon-arrows-down"></i></a>
</div>
<!-- BLOQUE 3 -->
<div class="container-sm section-scroll-content pt-35" id="block3">
  <h2 class="light"><?php print $titulo_bloque_3 ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="p-ch-gray-dark">
    <!-- <div class="pv-ch-7"> -->
      <?php //print $descripcion ?>   
    <!-- </div> -->

    <div class="hidden-xs hidden-sm">
      <div class="tabs tabs-style-linebox">
        <nav>
          <ul>
            <?php $count = 0; ?>
            <?php foreach ($titulos_tab_bloque_3 as $key => $titulo_tab_bloque_3): ?>
            <li class="<?php ($count == 0) ? print 'tab-current' : '' ; ?>">
              <a href="bloque-tres-<?php print $count; ?>"><span><?php print $titulo_tab_bloque_3['value'] ?></span>
              </a>
            </li>
            <?php $count++; ?>
            <?php endforeach ?>
          </ul>
        </nav>
        <div class="content-wrap bg-gray-lighter" style="color: black;">
          <?php $count = 0; ?>
          <?php foreach ($cuerpos_tab_bloque_3 as $key => $cuerpo_tab_bloque_3): ?>
          <section id="bloque-tres-<?php print $count; ?>" class="<?php ($count == 0) ? print 'content-current' : '' ; ?>">
            <p style="color: black;"><?php print $cuerpo_tab_bloque_3['value'] ?></p>
          </section>
          <?php $count++;?>
          <?php endforeach ?>
        </div><!-- /content -->
      </div>
    </div>
    <div class="hidden-lg">   
      <?php $count = 0; ?>
      <div class="panel-group" id="accordion0" role="tablist" aria-multiselectable="true">
        <?php foreach ($titulos_tab_bloque_3 as $key => $titulo_tab_bloque_3): ?>
        <div class="panel panel-default" style="min-height: 30px;">
          <div class="panel-heading" role="tab" id="heading<?php print $count; ?>">
            <h4 class="panel-title">
              <a role="button" data-target="#collapse<?php print $count; ?>" data-toggle="collapse" data-parent="#accordion0" aria-expanded="false" aria-controls="collapse<?php print $count; ?>" style="cursor:pointer;">
                <?php print $titulo_tab_bloque_3['value'] ?>
              </a>
            </h4>
          </div>
          <div id="collapse<?php print $count; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php print $count; ?>">
            <div class="panel-body">
              <?php print $cuerpos_tab_bloque_3[$key]['value'] ?>
            </div>
          </div>
        </div>
        <?php $count++;?>
        <?php endforeach ?>
      </div>
    </div>

  </div>
  <a class="scroll-down scroll-down-sq size lg" href="#block4" rel="nofollow"><i class="icon-arrows-down"></i></a>
</div>
<!-- BLOQUE 4 -->
<div class="container-sm section-scroll-content pt-35 pb-63" id="block4">
  <h2 class="light"><?php print $titulo_bloque_4 ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="p-ch-gray-dark">
    <div id="carousel-bloque4" class="carousel carousel-custom slide mb-42 mt-35" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php $count = 0; ?>
        <?php foreach ($imagenes_bloque_4 as $key => $imagen_bloque_4): ?>
        <li data-target="#carousel-bloque4" data-slide-to="<?php print $count ?>" class="<?php ($count == 0) ? print 'active' : '' ; ?>"></li>
        <?php $count++; ?>
        <?php endforeach ?>
      </ol>
      <div class="hidden-xs hidden-sm">
        <div class="tabs tabs-style-linebox">
          <nav>
            <ul>
              <?php $count = 0; ?>
              <?php foreach ($titulos_tab_bloque_4 as $key => $titulo_tab_bloque_4): ?>
              <li class="<?php ($count == 0) ? print 'tab-current' : '' ; ?>">
                <a href="bloque-cuatro-<?php print $count; ?>"><span><?php print $titulo_tab_bloque_4['value'] ?></span>
                </a>
              </li>
              <?php $count++; ?>
              <?php endforeach ?>
            </ul>
          </nav>
          <div class="content-wrap bg-gray-lighter" style="color: black;">
            <?php $count = 0; ?>
            <?php foreach ($cuerpos_tab_bloque_4 as $key => $cuerpo_tab_bloque_4): ?>
            <section id="bloque-cuatro-<?php print $count; ?>" class="<?php ($count == 0) ? print 'content-current' : '' ; ?>">
              <p style="color: black;"><?php print $cuerpo_tab_bloque_4['value'] ?></p>
            </section>
            <?php $count++;?>
            <?php endforeach ?>
          </div><!-- /content -->
        </div>
      </div>
      <div class="hidden-lg">   
        <?php $count = 0; ?>
        <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
          <?php foreach ($titulos_tab_bloque_4 as $key => $titulo_tab_bloque_4): ?>
          <div class="panel panel-default" style="min-height: 30px;">
            <div class="panel-heading" role="tab" id="heading1<?php print $count; ?>">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion1" data-target="#collapse1<?php print $count; ?>" aria-expanded="false" aria-controls="collapse1<?php print $count; ?>" style="cursor:pointer">
                  <?php print $titulo_tab_bloque_4['value'] ?>
                </a>
              </h4>
            </div>
            <div id="collapse1<?php print $count; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1<?php print $count; ?>">
              <div class="panel-body">
                <?php print $cuerpos_tab_bloque_4[$key]['value'] ?>
              </div>
            </div>
          </div>
          <?php $count++;?>
          <?php endforeach ?>
        </div>
      </div>
      <!-- Wrapper for slides -->
      <div class="carousel-inner mt-42" role="listbox">
        <?php $count = 0; ?>
        <?php foreach ($imagenes_bloque_4 as $key => $imagen_bloque_4): ?>
        <?php if ($imagen_bloque_4): ?>
        <div class="item <?php ($count == 0) ? print 'active' : '' ; ?>">
          <div class="banner banner-label-bottom mb-7 ml-0">
            <div class="banner-pic" style="background-image: url(<?php print image_style_url($image_style, $imagen_bloque_4['uri']); ?>);">
            </div>
          </div>
        </div>
        <?php endif ?>
        <?php $count ++; ?>
        <?php endforeach ?>
      </div>
      <!-- Controls --> 
       
    </div>
  </div>
  <a class="scroll-down scroll-down-sq size lg" href="#block5" rel="nofollow"><i class="icon-arrows-down"></i></a>
</div>
<!-- BLOQUE 5 -->
<div class="container-sm section-scroll-content pt-35" id="block5">
  <h2 class="light"><?php print $titulo_bloque_5 ?></h2>
  <div class="separator-gray separator-sm mb-70"></div>
  <div><?php print $results; ?></div>
  <?php foreach ($imagenes_bloque_5 as $key => $imagen_bloque_5): ?> 
  <div class="list-custom-left">
    <ul>
      <li class="text-center">
        <div class="grid-list-pic">
          <!-- <i class="<?php //print $imagen_bloque_5['value']; ?>" style="font-size:5rem"></i> -->
          <img src="<?php print image_style_url($image_styles_5, $imagen_bloque_5['uri']); ?>" alt="">
        </div>
      </li>           
      <li class="pl-21 text-gray">
        <div class="mb-7 text-center-xs">
          <div class="thin h3"><?php print $titulos_bloque_5[$key]['value']; ?></div>
          <?php if ($titulos_bloque_5[$key]['value']=='Currency Exchange'): ?>
          <div><?php print 'S/. '.$currency.' '.$contenidos_bloque_5[$key]['value']; ?></div> 
          <?php else: ?>   
          <div><?php print $contenidos_bloque_5[$key]['value']; ?></div>          
          <?php endif ?>
        </div>                             
      </li>
    </ul>
    <hr class="text-gray-dark" style="border-top: 1px solid #ddd !important;">
  </div>
  <?php endforeach ?>
  <a class="scroll-down scroll-down-sq size lg" href="#block6" rel="nofollow"><i class="icon-arrows-down"></i></a>
</div>
<!-- BLOQUE 6 -->
<div class="container-sm section-scroll-content pt-35" id="block6">
  <h2 class="light"><?php print $titulo_bloque_6 ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="p-ch-gray-dark">
    <div id="carousel-bloque6" class="carousel carousel-custom slide mb-42 mt-42" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php $count = 0; ?>
        <?php foreach ($imagenes_bloque_4 as $key => $imagen_bloque_4): ?>
        <li data-target="#carousel-bloque6" data-slide-to="<?php print $count ?>" class="<?php ($count == 0) ? print 'active' : '' ; ?>"></li>
        <?php $count++; ?>
        <?php endforeach ?>
      </ol>
      <div class="hidden-xs hidden-sm">
        <div class="tabs tabs-style-linebox">
          <nav>
            <ul>
              <?php $count = 0; ?>
              <?php foreach ($titulos_tab_bloque_6 as $key => $titulo_tab_bloque_6): ?>
              <li class="<?php ($count == 0) ? print 'tab-current' : '' ; ?>">
                <a href="bloque-seis-<?php print $count; ?>"><span><?php print $titulo_tab_bloque_6['value'] ?></span>
                </a>
              </li>
              <?php $count++; ?>
              <?php endforeach ?>
            </ul>
          </nav>
          <div class="content-wrap bg-gray-lighter" style="color: black;">
            <?php $count = 0; ?>
            <?php foreach ($cuerpos_tab_bloque_6 as $key => $cuerpo_tab_bloque_6): ?>
            <section id="bloque-seis-<?php print $count; ?>" class="<?php ($count == 0) ? print 'content-current' : '' ; ?>">
              <p style="color: black;"><?php print $cuerpo_tab_bloque_6['value'] ?></p>
            </section>
            <?php $count++;?>
            <?php endforeach ?>
          </div><!-- /content -->
        </div>
      </div>
      <div class="hidden-lg">   
        <?php $count = 0; ?>
        <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
          <?php foreach ($titulos_tab_bloque_6 as $key => $titulo_tab_bloque_6): ?>
          <div class="panel panel-default" style="min-height: 30px;">
            <div class="panel-heading" role="tab" id="heading2<?php print $count; ?>">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion2" data-target="#collapse2<?php print $count; ?>" aria-expanded="false" aria-controls="collapse2<?php print $count; ?>" style="cursor:pointer">
                  <?php print $titulo_tab_bloque_6['value'] ?>
                </a>
              </h4>
            </div>
            <div id="collapse2<?php print $count; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2<?php print $count; ?>">
              <div class="panel-body">
                <?php print $cuerpos_tab_bloque_6[$key]['value'] ?>
              </div>
            </div>
          </div>
          <?php $count++;?>
          <?php endforeach ?>
        </div>
      </div>
      <!-- Wrapper for slides -->
      <div class="carousel-inner mt-42" role="listbox">
        <?php $count = 0; ?>
        <?php foreach ($imagenes_bloque_6 as $key => $imagen_bloque_6): ?>
        <?php if ($imagen_bloque_6): ?>
        <div class="item <?php ($count == 0) ? print 'active' : '' ; ?>">
          <div class="banner banner-label-bottom mb-7 ml-0">
            <div class="banner-pic" style="background-image: url(<?php print image_style_url($image_style, $imagen_bloque_6['uri']); ?>);">
            </div>
          </div>
        </div>
        <?php endif ?>
        <?php $count ++; ?>
        <?php endforeach ?>
      </div>
      <!-- Controls --> 
      
    </div>
  </div>
</div>


