<?php
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

?>

  <noscript>
  <div style="display:inline;">
  <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/976155597/?value=1.00&amp;currency_code=USD&amp;label=dFPVCMLUtVYQzee70QM&amp;guid=ON&amp;script=0"/>
  </div>
  </noscript>

  <div id="page-wrapper">
    <div id="page">

  <div class="old-browser-message hide">
    <p>Tu versión de tu navegador es muy antigua. Actualízala a una más moderna.</p>
  </div>

  <div class="header-fixed z-10000">
  <div class="header-fixed-barra">
    <div id="logo">
      <a href="/">
        <img src="<?php print $path; ?>/images/logo.png" alt="UTEC">
      </a>
    </div>

    <button style="display: none;" type="button" class="navbar-toggle collapsed menu-responsive" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <ul class="nav nav-horizontal nav-login">
      <li class="postular-button">
        <a href="http://www.utec.edu.pe/admision/SitePages/Preinscripci%C3%B3n%20Examen%20de%20Admision.aspx?Tipo=Examen%20de%20Admision#.VIsOLmSG8no" target="_blank">
          postular
        </a>
      </li>
      <li class="nav-login-fb">
        <?php print render($page['header']); ?>
      </li>
      <li class="siguenos-text">
        Síguenos en
      </li>

      <li>
        <a id="visit-facebook" href="https://www.facebook.com/ingenioenaccion" class="icon1 icon-facebook visit" target="_blank"  rel="nofollow"></a>
      </li>

      <li>
        <a id="visit-twitter" href="https://twitter.com/UTECedu" class="icon1 icon-twitter visit" target="_blank"  rel="nofollow"></a>
      </li>
    </ul>
  </div>

  <?php include 'menu-responsive.php' ?>
</div>
  <?php include 'menu-lateral-master.php' ?>

    <?php include 'menu-lateral-page-ecohuerta.php' ?>

  <div class="content" id="fullpage">
<section id="equipos" class="main recetas">
  <div id="equipos-r" class="responsive-fix"></div>

  <div id="accordion-outside">
    <div class="controls">
      <div class="prev" style="display: none;">&lt;</div>
      <div class="next" style="display: block;">&gt;</div>
    </div>

    <div id="accordion" class="accordion">

      <div class="slide slide1 disabled">
        <div class="desc-front">
          <div class="down">
            <div class="image-holder">
              <img src="<?php print $path; ?>/images/ecohuerta/homepage/ecohuerta-img.png" alt="Marea en acción" height="100">
            </div>
            <p class="uppercase">recoje tu lechuga</p>
            <p>En el kilómetro 74 de la Panamericana Sur de Martes a Domingo de 9 am - 7 pm</p>
          </div>
        </div>
      </div>

      <?php
        //View
        $view = views_get_view('recetas');
        $view->set_display('view_block_name');
        $view->set_items_per_page(3);
        $view->pre_execute();
        $view->execute();
        $recetas=$view->result;
        $recetas= $view->result;
        foreach ($recetas as $key => $value) 
        {
          $nid=$value->nid;
          $node = node_load($nid);
          // die(print_r($node));  
          // kpr($node);  
          $nombre_receta = $node->field_recipe_name['und'][0]['value'];
          $ingredientes = $node->field_ingredientes['und'];
          $preparacion = $node->field_preparacion['und'];
          $imagen_receta = $node->field_imagen_receta['und'][0]['filename'];
          $icono_receta = $node->field_icono['und'][0]['filename'];

      ?>
      <div class="slide slide2" style="background-image: url('<?php print $pathfile.'/'.$imagen_receta; ?>');">
        <div class="desc-front">
          <div class="icon-receta">
            <img src="<?php print $pathfile.'/'.$icono_receta; ?>">
          </div>
          <div class="down">
            <h1 class="uppercase light">
              Receta :
            </h1>
            <h1 class="uppercase truncate">
              <?php print($nombre_receta);?>
            </h1>
            <br><br>
            <a href="javascript:void(0)" class="btn btn-small btn-dark uppercase">
              Ver receta
            </a>
          </div>
        </div>

        <div class="desc-container">        
          <div class="desc-content"> 
            <div style="position: relative; bottom: 67px; color: white; font-size: 22px;">
             <?php print $nombre_receta ?>
            </div>
            <img class="project-close"  src="<?php print $path; ?>/images/icons/close_light_blue.jpg" alt="project-close" />
            <div class="recetas-cont">
              <div class="project-title">
                <h3 class="title uppercase">
                   ingredientes
                </h3>
              </div>
              <div class="project-desc">
                <ul>
                <?php foreach ($ingredientes as $key => $value) : ?>
                  <li>
                   <?php print($value['value']); ?>
                  </li>
                <?php endforeach; ?>
                </ul>
              </div>
              <!-- <div class="prep">
                <?php //print($preparacion);?>
              </div> -->
            </div>
            <div class="recetas-cont">
              <div class="project-title">
                <h3 class="title uppercase">
                   preparación
                </h3>
              </div>
              <div class="project-desc">
                <!-- <p>
                   <?php //print_r($ingredientes);?>
                </p> -->
              </div>
              <div class="prep">
                <ol>
                  <?php foreach ($preparacion as $key => $value) : ?>
                  <li>
                    <?php print($value['value']); ?>
                  </li>  
                  <?php endforeach; ?>
                </ol>
              </div>
            </div>
          </div>
          <div class="desc-content right-side">
            <div class="uppercase title-side-right bold">Recoge tu lechuga</div>
             <img src="<?php print $path; ?>/images/ecohuerta/homepage/ecohuerta-img.png" alt="Marea en acción" height="100">
            <p>              
              En el kilómetro 89.5 de la Panamericana Sur los Viernes de 2pm a 8pm, sábado y domingo de 10am  a 6 pm
            </p>
          </div>
        </div>
      </div>
      <?php 
        }
      ?>

    </div>
</section>
  </div>
</div>
</div>
  <div class="hide" id="template-modal-success"></div>

<div class="hide" id="template-modal-error">
  <p>
    Lo sentimos, ha ocurrido un error inesperado.
  </p>
</div>

