<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
<div id="page-wrapper"><div id="page">
<div class="old-browser-message hide">
    <p>Tu versión de tu navegador es muy antigua. Actualízala a una más moderna.</p>
  </div>

  <div class="header-fixed">
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
        <a href="<?php print $base_path; ?>/user" class="fb-login open-window"></a>
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

  <div  class="submenu-content-responsive">
    <div class="row submenu">
      <ul class="menu">

          <li class="dropdown active">
            <a href="javascript:void(0)" class="link-menu link-menu-primary">
              <div class="submenu-single">
                Ingenio en acción
              </div>
            </a>
            <ul class="submenu">
                              <li>
                                      <a href="#ingenio-en-accion-r" class="link-menu">
                  
                    <div class="submenu-single">
                      Ingenio en acción
                    </div>
                  </a>
                </li>
                              <li>
                                      <a href="#iniciativas-utec-r" class="link-menu">
                  
                    <div class="submenu-single">
                      Iniciativas UTEC
                    </div>
                  </a>
                </li>
                              <li>
                                      <a href="#retos-ingenieria-r" class="link-menu">
                  
                    <div class="submenu-single">
                      Retos de la ingeniería
                    </div>
                  </a>
                </li>
              <li>
                <a target="_blank"  href="https://www.facebook.com/ingenioenaccion">
                  <div class="submenu-single stores" style="text-decoration: underline;">
                    Facebook
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank"  href="https://twitter.com/UTECedu">
                  <div class="submenu-single stores" style="text-decoration: underline;">
                      Twitter
                  </div>
                </a>
              </li>

                              <li>
                  <a style="cursor: pointer;"  class="fb-login-active"  >
                    <div class="submenu-single stores">
                     Iniciar sesión
                    </div>
                  </a>
                </li>
                          </ul>
          </li>
          <li class="dropdown ">
            <a href="javascript:void(0)" class="link-menu link-menu-primary">
              <div class="submenu-single">
                Marea en acción
              </div>
            </a>
            <ul class="submenu">
                              <li>
                                      <a href="marea-en-accion#marea-en-accion-r" class="link-menu">
                  
                    <div class="submenu-single">
                      Marea en acción
                    </div>
                  </a>
                </li>
                              <li>
                                      <a href="marea-en-accion#las-causas-r" class="link-menu">
                  
                    <div class="submenu-single">
                      Causas
                    </div>
                  </a>
                </li>
                              <li>
                                      <a href="marea-en-accion#que-haremos-r" class="link-menu">
                  
                    <div class="submenu-single">
                      ¿Qué haremos?
                    </div>
                  </a>
                </li>
                              <li>
                                      <a href="marea-en-accion#equipos-r" class="link-menu">
                  
                    <div class="submenu-single">
                      Equipos
                    </div>
                  </a>
                </li>
                              <li>
                                      <a href="marea-en-accion#capitulos-r" class="link-menu">
                  
                    <div class="submenu-single">
                      Capítulos
                    </div>
                  </a>
                </li>
                              <li>
                                      <a href="marea-en-accion#votacion-r" class="link-menu">
                  
                    <div class="submenu-single">
                      Votación
                    </div>
                  </a>
                </li>
              
              <li>
                <a target="_blank"  href="https://www.facebook.com/ingenioenaccion">
                  <div class="submenu-single stores" style="text-decoration: underline;">
                    Facebook
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank"  href="https://twitter.com/UTECedu">
                  <div class="submenu-single stores" style="text-decoration: underline;">
                      Twitter
                  </div>
                </a>
              </li>

                              <li>
                  <a style="cursor: pointer;"  class="fb-login-active"  >
                    <div class="submenu-single stores">
                     Iniciar Sesion
                    </div>
                  </a>
                </li>
                          </ul>
          </li>
        
      </ul>
    </div>
  </div>
</div>
<nav class="primary">
  <ul class="menu menu-vertical menu-light-blue">
    <li class="active">
      <a href="<?php print $base_path; ?>">
        Ingenio en acción-
      </a>
    </li>
    <li class="">
      <a href="marea-en-accion">
        Marea en acción
      </a>
    </li>
    <li>
      <a id="menu-button-tu-solucion" href="#tu-solucion" class="scroll-to">
        Aplica tu ingenio
      </a>
    </li>
  </ul>
</nav>

  
  <a href="#" class="icon1 icon-triangle scroll-to next-section"></a>

    <ul class="nav nav-point">
  
    <li class="active">
      <div class="nav-point-text-arrow">
        <a class="nav-point-text"  href="#ingenio-en-accion">Ingenio en acción</a>
        <div class="nav-point-arrow nav-point-arrow-style"></div>
      </div>
      <a class="nav-point-link" href="#ingenio-en-accion" rel="tipsy" original-title="Ingenio en acción"></a>
    </li>
  
    <li class="">
      <div class="nav-point-text-arrow">
        <a class="nav-point-text"  href="#iniciativas-utec">Iniciativas UTEC</a>
        <div class="nav-point-arrow nav-point-arrow-style"></div>
      </div>
      <a class="nav-point-link" href="#iniciativas-utec" rel="tipsy" original-title="Iniciativas UTEC"></a>
    </li>
  
    <li class="">
      <div class="nav-point-text-arrow">
        <a class="nav-point-text"  href="#retos-ingenieria">Retos de la ingeniería</a>
        <div class="nav-point-arrow nav-point-arrow-style"></div>
      </div>
      <a class="nav-point-link" href="#retos-ingenieria" rel="tipsy" original-title="Retos de la ingeniería"></a>
    </li>
  </ul>

  <div class="content" id="fullpage">
    <section id="ingenio-en-accion" class="main">
  <div id="ingenio-en-accion-r"></div>
  <div class="modal modal-alone center">
    <h1 class="title uppercase">Ingenio en acción</h1>

    <ul class="slider slider-text">
      <li>
        <div class="slide slide-text">
          <p style="margin: 10px 0 1px 0">
            Enfrenta problemas y da soluciones
          </p>
          <h3 class="uppercase" style="margin: 0">
            ¡Pon tu ingenio en  acción!
          </h3>
        </div>
      </li>

      <li>
        <div class="slide slide-text">
          <p  style="margin: 10px 0 1px 0">
            La contaminación en el mar es un problema permanente
          </p>
          <h3 class="uppercase">
            ¡Sé parte de la solución!

          </h3>
        </div>
      </li>

      <li>
        <div class="slide slide-text">
          <p  style="margin: 10px 0 1px 0">
            Los atascos generan soluciones creativas
          </p>
          <h3 class="uppercase"  style="margin-top: 0">
            ¡Atrévete a usar tu ingenio ya!
          </h3>
        </div>
      </li>
    </ul>

    <p>
      <a href="#tu-solucion" class="scroll-to btn btn-medium-small btn-light-blue uppercase">
        PON TU INGENIO EN ACCIÓN
      </a>
    </p>
  </div>

</section>
    <section id="iniciativas-utec" class="main">
  <div id="iniciativas-utec-r"></div>
  <div class="container">

    <div class="header center">
      <h3 class="uppercase">
        SOLUCIONES APLICADAS A LA REALIDAD

      </h3>
      <p>
        Ingenio al servicio de la comunidad
      </p>
    </div>

    <div class="row">
    <div class="content-iniciativa">

        <?php
          $pathfile= variable_get('file_public_path', conf_path() . '/files/');
          $view = views_get_view('iniciativas');
          $view->set_display('view_block_name');
          $view->set_items_per_page(3);
          $view->pre_execute();
          $view->execute();
          $textin=$view->result;
          $tabin=$view->result;
          $mediain=$view->result;
        ?>
<div class="six columns">
  <?php
      $i=1;
      foreach ($textin as $key => $value) 
      {
        $nid=$value->nid;
        $node = node_load($nid);
        $title=$node->title;
        $description = $node->field_description['und'][0]['value'];
        if($i==1)
        {
  ?>
  <div id="text-<?php print($i)?>" class="active text-content">  
    <h1 class="title uppercase bold">
    <span class="medium">INICIATIVAS UTEC</span>
    <?php print $title; ?>
    </h1>
    <?php print $description;?>
  </div>
  <?php
        }
        else
        {
  ?>
  <div id="text-<?php print($i)?>" class="text-content">  
    <h1 class="title uppercase bold">
    <span class="medium">INICIATIVAS UTEC</span>
    <?php print $title; ?>
    </h1>
    <?php print $description;?>
  </div>
  <?php
        }
        $i++;
      }
  ?>
</div>

<div class="six columns">
        
  <div class="tabs-container">
    <ul class="tabs">
      <?php 
        $i=1;
        foreach ($tabin as $key => $value) 
        {
          $nid=$value->nid;
          $node = node_load($nid);
          $title_media = $node->field_title_media['und'][0]['value'];
          if($i==1)
          {
      ?>
            <li class="active first">
              <a class="uppercase" href="#tab-<?php print($i)?>" style="width:120px">
                <?php print $title_media;?>
              </a>
            </li>
      <?php
          }
          else
          { 
      ?>     
            <li>
              <a class="uppercase" href="#tab-<?php print($i)?>" style="width:120px">
                <?php print $title_media;?>
              </a>
            </li>
      <?php
          }
          $i++;
        } 
      ?>
    </ul>

    <div class="tab-content-container">
        <?php 
          $i=1;
          foreach ($mediain as $key => $value) 
          {
            $nid=$value->nid;
            $node = node_load($nid);
            if(isset($node->field_media['und'][0]['video_id']))
              $media=$node->field_media['und'][0]['video_id'];
            else
              $media='';
            //$media = $node->field_media['und'][0]['video_id'];
            $imagen = $node->field_imagen['und'][0]['filename'];
            if($media!='')
            {
        ?>
            <div class="tab-content <?php if($i!=1){print('hide');}?>" id="tab-<?php print($i)?>">
              <div id="video-<?php print($i)?>" class="youtube-video" data-video-id="<?php print $media;?>"></div>
            </div>
            <?php }else{?>
             <div class="tab-content <?php if($i!=1){print('hide');}?>" id="tab-<?php print($i)?>">
              <img src="<?php print $pathfile.$imagen; ?>" alt="panel de agua potable" />
            </div>
        <?php }
          $i++;
          }
        ?>
    </div>
        </div>
      </div>
      </div>
      <div class="clear"></div>
    </div>

  </div>
    
    
</section>
    <section id="retos-ingenieria" class="main">
  <div id="retos-ingenieria-r"></div>
  <div class="container">
    <div class="header low">
      <h3 class="texto-superior-problematica">
        ENFRENTA RETOS. APLICA SOLUCIONES.
      </h3>
      <p>Sé parte del cambio.</p>
      <h1 class="title uppercase bold">
        <span class="medium">Retos de la</span>
        Ingeniería
      </h1>
    </div>

    <div class="menu-boxes-default">
      <ul class="menu menu-boxes">
      <?php
        $view = views_get_view('retos');
        $view->set_display('view_block_name');
        $view->set_items_per_page(6);
        $view->pre_execute();
        $view->execute();
        $retos=$view->result;
        $retos_resp= $view->result;
        foreach ($retos as $key => $value) 
        {
          $nid=$value->nid;
          $node = node_load($nid);
          $title = $node->title;
          $description = $node->field_description['und'][0]['value'];
          $image = $node->field_imagen['und'][0]['filename'];
          ?>
          <li class="box">
            <div class="overlay">
                <header class="title">
                    <?php print($title)?>
                </header>
                <div class="description">
                    <p class="center">
                        <?php print($description)?>

                        <a href="#tu-solucion" class="btn btn-small btn-light-blue scroll-to uppercase update-combo" data-key="">
                            Plantea tu solución aquí
                        </a>
                    </p>
                </div>
            </div>

            <div class="thumb">
                <img src="<?php print $pathfile.$image ?>" alt="tránsito con tráfico en lima" >
            </div>
        </li>
        <?php
          }
        ?>
      </ul>
    </div>

    <div class="menu-boxes-responsive">
        <ul class="menu menu-boxes menu-boxes-slider">
        <?php 
         foreach ($retos_resp as $key => $value) 
        {
          $nid=$value->nid;
          $node = node_load($nid);
          $title = $node->title;
          $description = $node->field_description['und'][0]['value'];
          $image = $node->field_imagen['und'][0]['filename'];
          ?>
          <li class="box">
            <div class="overlay">
                <header class="title">
                    <?php print($title)?>
                </header>
                <div class="description">
                    <p class="center">
                        <?php print($description)?>

                        <a href="#tu-solucion" class="btn btn-small btn-light-blue scroll-to uppercase update-combo" data-key="">
                            Plantea tu solución aquí
                        </a>
                    </p>
                </div>
            </div>

            <div class="thumb">
                <img src="<?php print $pathfile.$image ?>" alt="tránsito con tráfico en lima" >
            </div>
        </li>
        <?php
          }
        ?>
        </ul>
    </div>

    <div class="clear"></div>
  </div>
    
</section>

      <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://utec-ingenio-en-accion.compec.pe" data-text="{{ twitterTitle }}" data-lang="es">Twittear</a>
    </p>
  </div>
</script>

<script id="template-modal-success-vote" type="text/template">
  <div class="modal-inside">
    <h2 class="title uppercase center">
      ¡Gracias por tu voto!
    </h2>

    <p class="center small light-blue" style="padding: 0 80px; margin-bottom: 20px">
      Marea en acción - Equipo {{ team }}<br>
      ¡Apoya a tu equipo favorito compartiendo!
    </p>

    <p class="center small">
      <span id="facebook-share-vote">
        <fb:share-button type="button_count" data-href="http://utec-ingenio-en-accion.compec.pe/marea-en-accion/votacion" height="30" width="120"></fb:share-button>
      </span>

      <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://utec-ingenio-en-accion.compec.pe/marea-en-accion#votacion" data-text="Si {{ team }} es tu equipo favorito, vota por ellos aquí." data-lang="es">Twittear</a>
    </p>
  </div>
</script>

  <!-- Twitter -->
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

</div> <!-- /#page, /#page-wrapper -->