<?php
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');
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

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=723231741057934&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
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
        <a href="http://www.utec.edu.pe/admision/SitePages/Preinscripci%C3%B3n%20Examen%20de%20Admision.aspx?Tipo=Examen%20de%20Admision#.VIsOLmSG8no">
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

    <?php include 'menu-lateral-page-b.php' ?>

  <div class="content" id="fullpage">
<section id="capitulos" class="main">
      <div id="capitulos-r" class="responsive-fix"></div>
        <?php
          $view = views_get_view('capitulos_marea');
          $view->set_display('view_block_name');
          $view->set_items_per_page(5);
          $view->pre_execute();
          $view->execute();
          $textin=$view->result;
          $tabin=$view->result;
          $capitulos=$view->result;
          $cap_r = $view->result;
          $i=1;
          foreach ($cap_r as $key => $value)
          {
            $nid=$value->nid;
            $node = node_load($nid);
            if($i==1)
            {
              $videoid = $node->field_video['und'][0]['video_id'];
              $video_panel=$node->field_video['und'][0]['input'];
              $imagen_panel = $node->field_imagen['und'][0]['filename'];
            }
            $i++;
          }
        ?>
        <div class="video-gallery">
  
          <div class="container">
            <div class="player-container">
              <div class="title-container center">
                <span class="subtitle light-blue uppercase"></span>
                <span class="title"></span>
              </div>

              <div class="video-player-container center">
                <a href="http://www.youtube.com/watch?v=<?php echo $videoid ?>" class="fancybox-media"></a>
                <iframe id="youtube-player" class="video-player" src="https://www.youtube.com/embed/<?php echo $videoid ?>?enablejsapi=1&showinfo=0&modestbranding=1&controls=0" frameborder="0"></iframe>
              </div>

              <div class="player-metadata center">
                <div class="share">
                  <span class="share-buttons"></span>
                </div>

                <a class="link btn btn-small btn-light-blue" href="/aplica-tu-ingenio#contaminacionenelmardelima">
                  Tú también puedes proponer una solución
                </a>
              </div>
            </div>
          </div>

          <div class="video-list-container">
            <div class="container">
              <ul class="menu video-list">
                <?php
                  
                  foreach ($capitulos as $key => $value) 
                  {
                    $nid=$value->nid;
                    $node = node_load($nid);
                    $title=$node->title;
                    $name_chapter = $node->field_name_charpter['und'][0]['value'];
                    $date_chapter = $node->field_date_chapter['und'][0]['value'];
                    $imagen = $node->field_imagen['und'][0]['filename'];
                    $link_video = $node->field_video['und'][0]['input'];
                    $id_video = $node->field_video['und'][0]['video_id'];
                    if($link_video!='')
                    {
                ?>
                <li>
                  <a href="<?php print($link_video)?>" class="overlay load-video fancybox-media" data-title="<?php print($name_chapter)?>" data-video-id="<?php print($id_video)?>"></a>
                  <div class="thumb">
                    <div class="video-overlay"></div>
                    <img src="<?php print $pathfile.'/'.$imagen ?>">
                  </div>
                  <div class="details">
                    <div class="title">
                      <span class="light-blue"><?php print($title)?></span> - <?php print($date_chapter)?>
                    </div>
                  </div>
                </li>
                <?php
                    }
                    else
                    {
                ?>
                <li class="disabled">
                  <a href="javascript:void(0)" class="overlay"></a>
                  <div class="thumb">
                    <div class="video-overlay"></div>
                    <img src="<?php print $pathfile.'/'.$imagen ?>">
                  </div>

                  <div class="details">
                    <div class="title">
                      <span class="light-blue"><?php print($title)?></span> - <?php print($date_chapter)?>
                    </div>
                  </div>
                </li>
                <?php
                    }}
                ?>
              </ul>
            </div>
          </div>
        </div>

        <script id="template-share" type="text/template">
        <span id="facebook-share">
          <fb:share-button type="button_count" data-href="{{ url }}" height="30" width="120"></fb:share-button>
        </span>

        <span id="twitter-share">
          <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url }}" data-text="{{ text }}" data-lang="es">Twittear</a>
        </span>
      </script>
</section>
  </div>
</div>
</div>
  <div class="hide" id="template-modal-success"></div>

  <!-- Twitter -->
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

