<?php
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  global $user;
  $user_fields = user_load($user->uid);
  $firstname = $user_fields->field_firstname['und']['0']['value'];
  $lastname = $user_fields->field_lastname['und']['0']['value'];
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
  <script src="<?php print $path; ?>/js/vendor/jquery.fullPage.min.js"></script>
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

    <ul class="nav nav-point">
      <li class="">
        <div class="nav-point-text-arrow">
          <a class="nav-point-text"  href="/">Ingenio en acción</a>
          <div class="nav-point-arrow nav-point-arrow-style"></div>
        </div>
        <a class="nav-point-link" href="/" rel="tipsy" original-title="Ingenio en acción"></a>
      </li>
    
      <li class="active">
        <div class="nav-point-text-arrow">
          <a class="nav-point-text"  href="/iniciativas-utec">Iniciativas UTEC</a>
          <div class="nav-point-arrow nav-point-arrow-style"></div>
        </div>
        <a class="nav-point-link" href="/iniciativas-utec" rel="tipsy" original-title="Iniciativas UTEC"></a>
      </li>
      <li class="">
        <div class="nav-point-text-arrow">
          <a class="nav-point-text"  href="/retos-ingenieria">Retos de la ingeniería</a>
          <div class="nav-point-arrow nav-point-arrow-style"></div>
        </div>
        <a class="nav-point-link" href="/retos-ingenieria" rel="tipsy" original-title="Retos de la ingeniería"></a>
      </li>
    </ul>

  <div class="content" id="fullpage">
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
    <p><?php print nl2br($description);?></p>
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
    <p><?php print nl2br($description);?></p>
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
              <a class="uppercase" href="#tab-<?php print($i)?>">
                <?php print $title_media;?>
              </a>
            </li>
      <?php
          }
          else
          { 
      ?>     
            <li>
              <a class="uppercase" href="#tab-<?php print($i)?>">
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
              <img src="<?php print $pathfile.'/'.$imagen; ?>" alt="panel de agua potable" />
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
</div>
</div>
</div>
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

