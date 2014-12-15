<?php
  global $base_url,$theme_path;
  $path = $base_url.'/'.$theme_path;
  /*global $user;
  $user_fields = user_load($user->uid);
  $firstname = $user_fields->field_firstname['und']['0']['value'];
  $lastname = $user_fields->field_lastname['und']['0']['value'];*/
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
        <a href="http://www.utec.edu.pe/admision/SitePages/Preinscripci%C3%B3n%20Examen%20de%20Admision.aspx?Tipo=Examen%20de%20Admision#.VIsOLmSG8no">
          postular
        </a>
      </li>
      <li class="nav-login-fb" style="color:#fff">
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

    <?php include 'menu-lateral-page-a.php' ?>

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
          <a href="/aplica-tu-ingenio" class="btn btn-medium-small btn-light-blue uppercase">
            PON TU INGENIO EN ACCIÓN
          </a>
        </p>
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

