<?php
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');
  
  render($page['content']['metatags']); 

?>
  <style type="text/css">
    @import url("<?php print $path; ?>/css/normalize.css");
    @import url("<?php print $path; ?>/css/vendor/tipsy.css");
    @import url("<?php print $path; ?>/css/vendor/jquery.fancybox.css");
    @import url("<?php print $path; ?>/css/vendor/jquery.bxslider.css");
    @import url("<?php print $path; ?>/css/vendor/jquery.fullPage.css");
    @import url("<?php print $path; ?>/css/general.css");
    @import url("<?php print $path; ?>/css/nav.css");
    @import url("<?php print $path; ?>/css/util.css");
    @import url("<?php print $path; ?>/css/grid.css");
    @import url("<?php print $path; ?>/css/form.css");
    @import url("<?php print $path; ?>/css/icons.css");
    @import url("<?php print $path; ?>/css/buttons.css");
    @import url("<?php print $path; ?>/css/accordion.css");
    @import url("<?php print $path; ?>/css/main.css");
    @import url("<?php print $path; ?>/css/responsive.css");
    @import url("http://fonts.googleapis.com/css?family=Roboto:400,700,300,100");
  </style>

  <script type="text/javascript"> var url = "<?php print $path ?>"; </script>
  <script>App = {}</script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="<?php print $path; ?>/js/vendor/waypoints.min.js"></script>
  <script src="<?php print $path; ?>/js/vendor/jquery.bxslider.min.js"></script>
  <script src="<?php print $path; ?>/js/vendor/jquery.tipsy.js"></script>
  <script src="<?php print $path; ?>/js/vendor/jquery.backstretch.min.js"></script>
  <script src="<?php print $path; ?>/js/vendor/jquery.validate.min.js"></script>
  <script src="<?php print $path; ?>/js/vendor/jquery.validate.messages_es.js"></script>
  <script src="<?php print $path; ?>/js/vendor/jquery.history.js"></script>
  <script src="<?php print $path; ?>/js/vendor/jquery.fancybox.pack.js"></script>
  <script src="<?php print $path; ?>/js/vendor/jquery.fancybox-media.js"></script>
  <!--<script src="<?php print $path; ?>/js/vendor/jquery.fullPage.min.js"></script>-->
  <script src="<?php print $path; ?>/js/vendor/jquery.cookie.js"></script>
  <script src="<?php print $path; ?>/js/vendor/jquery.mustache.js"></script>
  <script src="<?php print $path; ?>/js/util.js"></script>
  <script src="<?php print $path; ?>/js/modal.js"></script>
  <script src="<?php print $path; ?>/js/youtube.js"></script>
  <script src="<?php print $path; ?>/js/components/video_gallery.js"></script>
  <script src="<?php print $path; ?>/js/components/accordion.js"></script>
  <script src="<?php print $path; ?>/js/vendor/hash.js"></script>
  <script src="<?php print $path; ?>/js/main.js"></script>
  <script src="<?php print $path; ?>/js/analytics.js"></script>
  <script src="<?php print $path; ?>/js/responsive.js"></script>

  <!-- Youtube iframe Player API -->
  <script>
    var tag = document.createElement('script');
    tag.src = "//www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
  </script>

  <!-- Facebook remarketing -->
  <script>(function() {
    var _fbq = window._fbq || (window._fbq = []);
    if (!_fbq.loaded) {
      var fbds = document.createElement('script');
      fbds.async = true;
      fbds.src = '//connect.facebook.net/en_US/fbds.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(fbds, s);
      _fbq.loaded = true;
    }
      _fbq.push(['addPixelId', '770393432971325']);
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', 'PixelInitialized', {}]);
  </script>
  <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=770393432971325&amp;ev=PixelInitialized" /></noscript>


  <!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
  <script type="text/javascript">
  /* <![CDATA[ */
  var google_conversion_id = 976155597;
  var google_conversion_label = "dFPVCMLUtVYQzee70QM";
  var google_custom_params = window.google_tag_params;
  var google_remarketing_only = true;
  /* ]]> */
  </script>
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
  </script>
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
            <p>En el kilómetro 89.5 de la Panamericana Sur los Viernes de 2pm a 8pm, sábado y domingo de 10am  a 6 pm</p>
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

