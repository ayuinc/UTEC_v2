<?php
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');
  $node = node_load(134);
  $actividad = $node->field_activity['und'][0]['value'];

  drupal_add_js(array('utecVars' => array('userid' => $user->uid)), array('type' => 'setting'));
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
  <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
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

     <?php include 'menu-lateral-page-b.php' ?>

  <div class="content" id="fullpage">
    <section id="votacion" class="main">
    <div id="votacion-r" class="responsive-fix"></div>

    <div class="container">
      <div class="header">
        <?php 
          if(strcmp($actividad,'Cerrada')==0)
          {
            ?>
            <h3 class="uppercase center">
              Las votaciones han terminado.
            </h3>
            <h3 class="uppercase center">
              El viernes 17 conocerás al equipo ganador
            </h3>
            <br>
        <?php
          }
          else
          {
        ?>
        <h2 class="light-blue uppercase center" style="margin: 0">
          ¡Vota!
        </h2>
        <h3 class="uppercase center">
          Por el mejor equipo
        </h3>
        <?php if(!$user->uid){ ?>
        <p class="center">
            Para votar, <a href="javascript:void(0);" class="init-login">inicia sesión</a>.
        </p>
        <?php }else { echo '<br>';}?>
        <?php }?>
        
      </div>
    
      <div class="row">
        <ul class="team-list menu ">
        <?php
          $view = views_get_view('equipos_marea');
          $view->set_display('view_block_name');
          $view->set_items_per_page(3);
          $view->pre_execute();
          $view->execute();
          $equipos_marea_vote= $view->result;
          $i=1;
          $user_voted = false;
          foreach ($equipos_marea_vote as $key => $value) {
            $rate_results = rate_get_results('node', $value->nid, 2);
            if(isset($rate_results['user_vote'])){
              $user_voted = true;
            }
          }
          foreach ($equipos_marea_vote as $key => $value)
          {
            $nid=$value->nid;
            $node = node_load($nid);
            $group_name = $node->field_group_name['und'][0]['value'];
            $name_vote = $node->field_name_vote['und'][0]['value'];
            $image_vote = $node->field_image_vote['und'][0]['filename'];
            $video = $node->field_video['und'][0]['input'];
            $votes_closed=false;
            $vote_class = '';
            if($user_voted || !$node->field_votacion['und'][0]['value']){
              $votes_closed=true;
            }
            if(!$node->field_votacion['und'][0]['value']){
              $vote_class = 'closed';
            }
            if($i==1)
            {
        ?>
          <li class="team first <?php echo $vote_class;?>">
            <div class="title uppercase center">
              EQUIPO <?php print($group_name)?>
            </div>

            <div class="thumbnail">
              <?php
                if(strcmp($actividad,'Cerrada')==0)
                {
              ?>
              <div class="overlay" style="display:block">
              </div>
              <?php
                }
                else
                {
              ?>
              <div class="overlay">
                <a href="javascript:void(0);" class="vote">
                  <img src="<?php print $path; ?>/images/marea/votacion/btn_vote.jpg">
                </a>
              </div>
              <?php 
                }
              ?>
              <img src="<?php print($pathfile.'/'.$image_vote)?>">
            </div>

            <div class="details">
            <?php print(nl2br($name_vote))?>
              <br><br>
              <a href="<?php print($video)?>&feature=youtu.be" class="watch fancybox-media">
                Ver video aquí
              </a>
              <br><br>
              <div class="votes">
          <?php 
      if(strcmp($actividad,'Cerrada')==0)
      {
           $votes_closed=true;
          ?>
                <?php //print rate_embed($node, 'votacion_equipos', $votes_closed ? RATE_CLOSED : RATE_FULL); ?>
                <i class="icon1 icon-like"></i>
                <span class="count">
                  3
                </span>
                <span class="label">
                  487 Votos
                </span>
          <?php 
      }else{
          ?>
                <?php print rate_embed($node, 'votacion_equipos', $votes_closed ? RATE_CLOSED : RATE_FULL); ?>
                <i class="icon1 icon-like"></i>
                <span class="count">
                  3
                </span>
                <span class="label">
                  Votos
                </span>
                <?php
      } 
          ?>
              </div>
            </div>
          </li>
        <?php 
            }
            if($i==2)
            {
        ?>

          <li class="team  <?php echo $vote_class;?>">
            <div class="title uppercase center">
              Equipo <?php print($group_name)?>
            </div>

            <div class="thumbnail">
              <?php
                if(strcmp($actividad,'Cerrada')==0)
                {
              ?>
              <div class="overlay" style="display:block">
              </div>
              <?php
                }
                else
                {
              ?>
              <div class="overlay">
                <a href="javascript:void(0);" class="vote">
                  <img src="<?php print $path; ?>/images/marea/votacion/btn_vote.jpg">
                </a>
              </div>
              <?php 
                }
              ?>
              <img src="<?php print($pathfile.'/'.$image_vote)?>">
            </div>

            <div class="details">
               <?php print(nl2br($name_vote))?>
              <br><br>
              <a href="<?php print($video)?>&feature=youtu.be" class="watch fancybox-media">
                Ver video aquí
              </a>
              <br><br>
              <div class="votes">
                <?php 
      if(strcmp($actividad,'Cerrada')==0)
      {
           $votes_closed=true;
          ?>
                <?php //print rate_embed($node, 'votacion_equipos', $votes_closed ? RATE_CLOSED : RATE_FULL); ?>
                <i class="icon1 icon-like"></i>
                <span class="count">
                  3
                </span>
                <span class="label">
                  243 Votos
                </span>
          <?php 
      }else{
          ?>
                <?php print rate_embed($node, 'votacion_equipos', $votes_closed ? RATE_CLOSED : RATE_FULL); ?>
                <i class="icon1 icon-like"></i>
                <span class="count">
                  3
                </span>
                <span class="label">
                  Votos
                </span>
                <?php
      } 
          ?>
              </div>
            </div>
          </li>
        <?php 
            }
            if($i==3)
            {
        ?>
          <li class="team last <?php echo $vote_class;?>">
            <div class="title uppercase center">
              Equipo <?php print($group_name)?>
            </div>

            <div class="thumbnail">
              <?php
                if(strcmp($actividad,'Cerrada')==0)
                {
              ?>
              <div class="overlay" style="display:block">
              </div>
              <?php
                }
                else
                {
              ?>
              <div class="overlay">
                <a href="javascript:void(0);" class="vote">
                  <img src="<?php print $path; ?>/images/marea/votacion/btn_vote.jpg">
                </a>
              </div>
              <?php 
                }
              ?>
              <img src="<?php print($pathfile.'/'.$image_vote)?>">
            </div>

            <div class="details">
              <?php print(nl2br($name_vote))?>
              <br><br>
              <a href="<?php print($video)?>&feature=youtu.be" class="watch fancybox-media">
                Ver video aquí
              </a>
              <br><br>
              <div class="votes">
                <?php 
      if(strcmp($actividad,'Cerrada')==0)
      {
           $votes_closed=true;
          ?>
                <?php //print rate_embed($node, 'votacion_equipos', $votes_closed ? RATE_CLOSED : RATE_FULL); ?>
                <i class="icon1 icon-like"></i>
                <span class="count">
                  3
                </span>
                <span class="label">
                  521 Votos
                </span>
          <?php 
      }else{
          ?>
                <?php print rate_embed($node, 'votacion_equipos', $votes_closed ? RATE_CLOSED : RATE_FULL); ?>
                <i class="icon1 icon-like"></i>
                <span class="count">
                  3
                </span>
                <span class="label">
                  Votos
                </span>
                <?php
      } 
          ?>
              </div>
            </div>
          </li>
        <?php
            }
            $i++; 
          }
        ?>

          <li class="clear"></li>
        </ul>

      </div>
    </div>
    <a href="<?php print $path; ?>/pdf/bases.pdf" class="download-pdf" target="_blank">
      Descarga las bases aquí
    </a>
    </section>
  </div>

  <div class="hide" id="template-modal-success"></div>

  <div class="hide" id="template-modal-error">
    <p>
      Lo sentimos, ha ocurrido un error inesperado.
    </p>
  </div>
  </div>
  </div>
<script id="template-modal-success-content" type="text/template">
  <div class="modal-inside">
    <h2 class="title uppercase center">
      ¡Gracias por enviar tu solución!
    </h2>

    <p class="center small light-blue" style="padding: 0 80px; margin-bottom: 20px">
      Pronto estaremos publicando las diferentes soluciones a los problemas planteados.
    </p>

    <p class="center small">
      <span id="facebook-share">
        <fb:share-button type="button_count" data-href="http://utec-ingenio-en-accion.compec.pe/categories/{{ categoryKey }}" height="30" width="120"></fb:share-button>
      </span>

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

