<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>

    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>

    <!--div class="container-md">
      <div class="pv-42">
        <h2 class="lead medium mb-0 pb-28"><span class="text-gray-darker">Acceso rápido a </span><span class="text-gray">Career Services</span></h2>
        <div class="row">
          <div class="col-sm-6 pv-7-xs">
            <a class="btn-alumnos btn-modal text-gray-dark  text-center" data-toggle="modal" data-target="#myModal" href="#">
              <div class="btn-bg-outline-primary">
                <h3 class="pv-14 m-0 light">Alumnos<p class="pl-7 m-0 icon-arrows-right h6 inline-block"></p></h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 pv-7-xs">
            <a class="btn-empresas btn-modal text-gray-dark text-center" data-toggle="modal" data-target="#myModal" href="#">
              <div class="btn-bg-outline-primary">
                <h3 class="pv-14 m-0 light">Empresas<p class="pl-7 m-0 icon-arrows-right h6 inline-block"></p></h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div-->

  </div>

  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>

</div>

<!-- Modal -->
<!--div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg pt-63"-->
    <!-- Modal content-->
    <!--div class="modal-content minh-490">
      <div class="text-right pr-21  pt-21">
        <a class="close bg-primary text-white pv-7 ph-14 text-grey" data-dismiss="modal">&times;</a>
      </div>
      <h1 class="text-center medium text-gray-dark">Login</h1>
      <div class="container-sm">
        <div class="row minh-210 ph-70 pv-21-xs">
          <div class="col-md-6 p-0">
            <a class="text-center btn-modal btn-alumnos"-->
              <!-- <h4 class="bg-gray-lighter light bg-hover-white pv-14 text-gray-darker">Alumnos</h4> -->
              <!--h4 class="btn-selected light pv-14 text-gray-darker">Alumnos</h4>
            </a>
          </div>
          <div class="col-md-6 p-0">
            <a class="text-center btn-modal btn-empresas">      
              <!-- <h4 class="bg-white light bg-hover-white pv-14 text-gray-darker">Empresas</h4> -->
              <!--h4 class="btn-notselected light pv-14 text-gray-darker">Empresas</h4>
            </a>
          </div>
          <!-- Form Alumnos -->
          <!--form role="form" id="form-alumnos" method="post" class="form-modal form-alumnos" accept-charset="UTF-8">
            <div class="form-group col-sm-12">
              <input type="email" class="form-control light input-center mt-21" width="210" height="auto" placeholder="correo electrónico" required="">
            </div>
            <div class="form-group col-sm-12">
              <input type="Password" class="form-control light input-center" width="210" height="auto" placeholder="contraseña" required="">
            </div>
            <div class="text-center pv-7"> 
              <button type="submit" class="btn btn-primary mt-7 medium ph-35 uppercase atm-scroll-item">INGRESAR</button>
              <h5 class="pt-14">¿Olvidaste tu clave? <a class="btn-modal btn-recuperar thin text-primary">Recupérala.</a></h5>
            </div>
          </form>
          <!-- END: Form Alumnos -->
          <!-- Form Empresas -->
          <!--form role="form" id="form-empresas" method="post" class="form-modal form-empresas hidden" accept-charset="UTF-8">
            <div class="form-group col-sm-12">
              <input type="email" class="form-control light input-center mt-21" width="210" height="auto" placeholder="correo electrónico" required="">
            </div>
            <div class="form-group col-sm-12">
              <input type="Password" class="form-control light input-center" width="210" height="auto" placeholder="contraseña" required="">
            </div>
            <div class="text-center pv-7"> 
              <button type="submit" class="btn btn-primary mt-7 medium ph-35 uppercase atm-scroll-item">INGRESAR</button>
              <h5 class="pt-14">¿Olvidaste tu clave? <a class="btn-modal btn-recuperar thin text-primary">Recupérala.</a></h5>
              <h5 class="pt-7">¿No tienes cuenta todavía? <a class="thin text-primary">Registrate aquí.</a></h5>
            </div>
          </form>
          <!-- END: Form Empresas -->
          <!-- Form Recupera -->
          <!--form role="form" method="post" id="form-recupera" class="form-modal form-recupera hidden" accept-charset="UTF-8">
            <div class="form-group col-sm-12">
              <input type="text" class="form-control light input-center mt-21" width="210" height="auto" placeholder="correo electrónico" required="">
            </div>
            <div class="text-center pv-7"> 
              <button type="submit" class="btn btn-primary mt-7 medium ph-35 uppercase atm-scroll-item">RECUPERAR</button>
              <h5 class="pt-14"><a class="btn-modal btn-regresar thin text-gray-dark">Regresar al Login</a></h5>
            </div>
          </form>
          <!-- END: Form Recupera -->
        <!--/div>
      </div>
    </div>
  </div>
</div-->
<!-- END: Modal -->

<?php drupal_add_js(drupal_get_path('theme', 'utec_theme') .'/js/app/vendor/TweenMax.min.js'); ?>
<?php drupal_add_js(drupal_get_path('theme', 'utec_theme') .'/js/app/vendor/ScrollToPlugin.min.js'); ?>
<?php drupal_add_js(drupal_get_path('theme', 'utec_theme') .'/js/app/vendor/jquery.scrollmagic.min.js'); ?>
<?php drupal_add_js(drupal_get_path('theme', 'utec_theme') .'/js/app/lib/scroll-control.js'); ?>