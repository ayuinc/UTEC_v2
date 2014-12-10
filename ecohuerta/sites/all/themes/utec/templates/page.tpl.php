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
global $base_path,$theme_path,$base_url;

?>
<?php
//print('<pre>');
//print_r($user);
//print('</pre>');
//print('<pre>');
//print_r($page['content']['system_main']['nodes'][$node->vid]['comments']['comments']);
//print('</pre>');
drupal_add_js(array('utecVars' => array('userid' => $user->uid)), array('type' => 'setting'));
if(isset($node)){
    if($node->vid==126){
        $is_page_sol=true;
    }
}
?>

<div id="page-wrapper"><div id="page">
<header>
    <div class="row">
        <div class="col-lg-7 col-sm-8 col-md-9 col-xs-9">
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" width="290px"/>
                </a>
            <?php endif; ?>
        </div>
        <!-- #46-->
        <button style="display: none;" type="button" class="navbar-toggle collapsed menu-responsive" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- #46 -->
        <div class="col-lg-5 col-md-3 col-sm-2 head-login">
        <?php print render($page['header']); ?>
        </div>
        <!--<div class="col-xs-3  col-sm-4 col-md-3 contenedor-menu-xs">
            <div class="menu-xs">
                <span class="icon-list"></span>
            </div>
            <ul class="menu-xs-lista">
                <li class="nav-one"><a href="#featured">INGENIO EN ACCIÓN--</a></li>
                <li class="nav-two"><a href="#marea">MAREA EN ACCIÓN</a></li>
                <li class="nav-three"><a href="#aplica" class="current">APLICA TU INGENIO</a></li>
            </ul>
        </div>-->
        <!-- AGREGADO-->
        <div class="submenu-content-responsive active-menu-responsive">
          <div class="row submenu">
              <ul class="menu">
                  <li class="dropdown men1">
                      <a href="javascript:void(0)" class="link-menu link-menu-primary">
                          <div class="submenu-single">
                            Ingenio en acción
                          </div>
                      </a>
                    <ul class="submenu">
                        <li>
                          <a href="/" class="link-menu">
                            <div class="submenu-single">
                             Ingenio en acción
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="/iniciativas-utec" class="link-menu">       
                            <div class="submenu-single">
                              Iniciativas UTEC
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="/retos-ingenieria" class="link-menu">        
                            <div class="submenu-single">
                              Retos de la ingeniería
                            </div>
                          </a>
                        </li>
                        <li>
                                <a target="_blank" href="https://www.facebook.com/ingenioenaccion">
                                <div class="submenu-single stores" style="text-decoration: underline;">
                                   Facebook
                                </div>
                                </a>
                        </li>
                        <li>
                               <a target="_blank" href="https://twitter.com/UTECedu">
                               <div class="submenu-single stores" style="text-decoration: underline;">
                                 Twitter
                               </div>
                               </a>
                        </li>
                        <li>
                              <a style="cursor: pointer;" class="fb-login-active">
                              <div class="submenu-single stores">
                                Iniciar sesión
                              </div>
                              </a>
                        </li>
                    </ul>
                  </li>
                  <li class="dropdown men2">
                      <a href="javascript:void(0)" class="link-menu link-menu-primary">
                      <div class="submenu-single">
                        Marea en acción
                      </div>
                      </a>
                    <ul class="submenu">
                              <li>
                                <a href="/marea-en-accion" class="link-menu">
                          <div class="submenu-single">
                            Marea en acción
                          </div>
                        </a>
                      </li>
                            <li>
                                <a href="/marea-en-accion-causas" class="link-menu"><div class="submenu-single">
                            Causas
                          </div>
                        </a>
                      </li>
                            <li>
                                <a href="/marea-en-accion-que-haremos" class="link-menu">
                          <div class="submenu-single">
                            ¿Qué haremos?
                          </div>
                        </a>
                      </li>
                            <li>
                                <a href="/marea-en-accion-equipos" class="link-menu">
                          <div class="submenu-single">
                            Equipos
                          </div>
                        </a>
                    </li>
                            <li>
                                <a href="/marea-en-accion-capitulos" class="link-menu">
                    <div class="submenu-single">
                      Capítulos
                    </div>
                  </a>
                </li>
                              <li>
                                      <a href="/marea-en-accion-votacion" class="link-menu">
                  
                    <div class="submenu-single">
                      Votación
                    </div>
                  </a>
                </li>
              
              <li>
                <a target="_blank" href="https://www.facebook.com/ingenioenaccion">
                  <div class="submenu-single stores" style="text-decoration: underline;">
                    Facebook
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href="https://twitter.com/UTECedu">
                  <div class="submenu-single stores" style="text-decoration: underline;">
                      Twitter
                  </div>
                </a>
              </li>

              <li>
                  <a style="cursor: pointer;" class="fb-login-active">
                    <div class="submenu-single stores">
                     Iniciar sesión
                    </div>
                  </a>
                </li>
              </ul>
            </li>        
          <li>
              <a id="mobile-aplica-tu-ingenio" class="link-menu link-menu-primary">
                  <div class="submenu-single">
                    Aplica tu ingenio
                  </div>
                </a>
          </li>
            </ul>
          </div>
        </div>
        <nav class="primary">
          <ul class="menu menu-vertical menu-light-blue">
            <li >
              <a href="/">
               Ingenio en acción
              </a>
            </li>
            <li class="">
              <a href="marea-en-accion">
                Marea en acción
              </a>
            </li>
            <li class="active">
              <a id="menu-button-tu-solucion" href="/aplica-tu-ingenio" class="scroll-to">
                Aplica tu ingenio
              </a>
            </li>
        </ul>
        </nav>
        <!-- AGREGADO-->
    </div>
</header>
   <!-- /.section, /#header -->

  <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>
  <?php if ($page['featured']): ?>
    <div id="featured"><div class="section clearfix">
      <?php print render($page['featured']); ?>
    </div></div> <!-- /.section, /#featured -->
  <?php endif; ?>

  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">

    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar"><div class="section">
        <?php //print render($page['sidebar_first']); ?><!-- modificado-->
      </div></div> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>

    <div id="content" class="column"><div class="section">
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      <div class="container">
      <section class="row">
      <?php print render($page['forums_list']); ?>
      <div class="col-lg-12">
      <div class="contaminacion" style="display: none">
          <div class="tipos-xs">
              <div class="division-xs">
                  <div class="col-xs-6 tipo">
                      <img src="<?php echo $theme_path;?>/img/transito.jpg">
                      <div>
                          <p>Contaminación en el mar de Lima</p>
                      </div>
                  </div>
                  <div class="col-xs-6 tipo tipo-xs">
                      <img src="<?php echo $theme_path;?>/img/transito.jpg">
                      <div>
                          <p>Tránsito en Lima</p>
                      </div>
                  </div>
              </div>
              <div class="division-xs">
                  <div class="col-xs-6 tipo">
                      <img src="<?php echo $theme_path;?>/img/deforestacion.jpg">
                      <div>
                          <p>Deforestación en el Perú</p>
                      </div>
                  </div>
                  <div class="col-xs-6 tipo">
                      <img src="<?php echo $theme_path;?>/img/friaje.jpg">
                      <div>
                          <p>Friaje en Puno</p>
                      </div>
                  </div>
              </div>
              <div class="division-xs">
                  <div class="col-xs-6 tipo">
                      <img src="<?php echo $theme_path;?>/img/huaycos.jpg">
                      <div>
                          <p>Huaycos en la sierra</p>
                      </div>
                  </div>
                  <div class="col-xs-6 tipo">
                      <img src="<?php echo $theme_path;?>/img/sonora.jpg">
                      <div>
                          <p>Contaminación sonora en Lima</p>
                      </div>
                  </div>
              </div>
          </div>


          <div id="sabias-xs">
              <div class="ingresa-solucion">
                  <div class="titulo">
                      <div class="col-xs-10 contenedor">
                          <p class="inline-block">Contaminación en el mar de Lima</p>
                      </div>
                      <div class="col-xs-2 contenedor cerrar">
                          <span>X</span>
                      </div>

                  </div>
                  <div class="solucion-contenido">
                      <div class="editable" contentEditable="true">
                          <p>Ingresa tu solución aquí...</p>
                      </div>
                      <div class="termino">
                          <p class="inline-block"><a href="#" data-toggle="modal" data-target="#myModal">Términos y Condiciones</a></p>
                          <span class="btn-envia-3 inline-block">Enviar</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div>
          <script id="entry-template" type="text/x-handlebars-template">
              <a id="solucion-{{Nid}}"></a>
              <li class="lista-item" data-id="{{Nid}}">
                  <div class="list-cabecera">
                      <div class="list-imagen">
                          <div class="user-picture">
                              <img src="{{Imagen}}">  </div>
                      </div>
                      <div class="lista">
                          <div>
                              <div class="sub-lista">
                                  <span class="list-perfil"><a class="ver" href="{{Ruta}}">{{AuthorNombre}}</a></span>
                                  <span class="num-comentario num-comentario2">Comentarios({{Conteo-comentarios}})</span>
                              </div>
                              <div>
                                  <span class="hora-publicacion">{{{Post-date}}}</span><span class="tipo-contam">{{categoria}}</span>
                                  <span class="num-comentario num-comentario3">Comentarios({{Conteo-comentarios}})</span>
                              </div>
                          </div>
                          <div class="list-contenido">
                              {{Contenido}} <a class="ver" href="{{Ruta}}">ver más</a>
                          </div>

                      </div>
                  </div>
                  <div class="list-opciones">
                      <div class="likes inline-block">
                          <div class="votacion inline-block">{{{Rate}}}</div>
                          <span class="votar">Votar</span>
                          <span class="icon-thumbs-up color-list-opc"></span><span class="icon-number separador up"> 125</span>
                          <span class="icon-thumbs-up2 color-list-opc"></span><span class="icon-number down"> 5</span>
                      </div>
                      <div class="compartir inline-block">
                          <span class="comp">Compartir </span><span class="icon-facebook icon-f1 color-list-opc"></span><span class="icon-twitter icon-t1 color-list-opc"></span>
                      </div>
                      <div class="comentar inline-block"><span class="icon-comment color-list-opc"></span><a href="{{Ruta}}" class="link-publicacion"><span class="icon-number">Comentar</span></a></div>
                  </div>
                  <div>
                      <div class="list-opciones-xs">
                          <div class="likes inline-block">
                              <span class="icon-thumbs-up color-list-opc"></span>
                              <span class="votar">Votar</span>
                          </div>
                          <div class="compartir inline-block">
                              <span class="icon-share"></span>
                              <span class="comp">Compartir </span>
                          </div>
                          <div class="comentar inline-block">
                              <span class="icon-comment color-list-opc"></span>
                              <a href="{{Ruta}}" class="link-publicacion"><span class="icon-number">Comentar</span></a>
                          </div>
                      </div>
                  </div>
                  <div class="realizar-comentario">
                      <div class="triangulo-up-xs">
                          <div class="triangulo-up2-xs"></div>
                      </div>
                      <div class="pregunta-xs">
                          <p>REALIZAR COMENTARIO</p>
                          <input type="text" placeholder="Ingresa tu Comentario">
                          <p class="enviar-comentario">ENVIAR</p>
                          <div class="lista-comentarios">
                          </div>
                          <p class="ocultar">Ocultar comentarios</p>

                      </div>
                  </div>
              </li>
          </script>
          <script id="comment-template" type="text/x-handlebars-template">
              <div class="comentario-respuesta">
                  <div class="otro-comentario">
                      <div class="col-xs-4 margen-comentario">
                          <p>Por</p>

                          <p class="comentario-color">{{Autor}}</p>
                      </div>
                      <div class="col-xs-8 detalle-publicacion margen-comentario">
                          <p>Publicado el</p>

                          <p class="comentario-color">{{Postdate}}</p>
                      </div>
                  </div>
                  <div class="contenido">
                      {{{Comentario}}}
                  </div>
              </div>
          </script>
          <?php if($is_front || $is_page_sol){ ?>
          <div class="col-lg-8 col-xs-12">
              <div class="soluciones">
                  <div class="head-soluciones">
                      <p class="titulo-soluciones inline-block">SOLUCIONES</p>
                      <div class="categorias inline-block">
                          <!--<a href="#" class="add"><span class="icon-arrow-down"></span></a>-->
                          <select class="busqueda">
                              <option value="all">Todo</option>
                          </select>
                      </div>
                  </div>

                  <div class="categorias-xs">
                      <select class="busqueda">
                          <option value="all">Todo</option>
                        </select>
                  </div>

                  <div class="valoracion">
                      <p class="inline-block recientes"><span class="icon-arrow-up"></span><a class="lnk">Más recientes</a></p>
                      <p class="inline-block valoradas"><span class="icon-arrow-down"></span><a class="lnk">Más valoradas</a></p>
                      <p class="inline-block comentarios"><span class="icon-arrow-down"></span><a class="lnk">Más comentarios</a></p>

                      <p class="sub-valoracion inline-block">Soluciones encontradas(<span></span>)</p>
                  </div>
                  <div id="region-lista">
                      <div class="dis">

                      </div>
                      <div class="dis-loader">
                          <p class="enviar-comentario">Cargar más soluciones</p>
                          <p class="icon-loop"></p>
                      </div>
                  </div>
              </div>
          </div>
              <div class="col-lg-4 col-xs-12">
                  <div class="encuesta">
                      <p class="titulo-encuesta"><span class="icon-checkmark"></span>Pregunta de la semana</p>
                      <div class="pregunta-destacada">
                          <?php if ($page['sidebar_second']): ?>
                              <div id="sidebar-second" class="column sidebar"><div class="section">
                                      <?php print render($page['sidebar_second']); ?>
                                  </div></div> <!-- /.section, /#sidebar-second -->
                          <?php endif; ?>
                      </div>
                  </div>
                  
                  <div class="redes">
                      <p class="col-lg-6 red facebook" id="fb">Facebook</p>
                      <p class="col-lg-6 red twitter" id="tw">Twitter</p>
                      <script type="text/javascript">

                      </script>
                      <div class="pagina" id="pfb">
                          <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fingenioenaccion%3Ffref%3Dts&amp;width=300px&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:590px;" allowTransparency="true"></iframe>
                      </div>
                      <div class="pagina hidden" id="ptw">
                         <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/UTECedu" data-widget-id="522495691671613440">Tweets por @UTECedu</a>
                      </div>
                  </div>
              </div>
          <?php }else{ ?>
              <div class="col-lg-12">
                  <div class="titulo">
                      <p id="primario-2">APLICA TU INGENIO</p>
                  </div>
                  <div>
                      <div class="col-lg-8 col-xs-12">
                          <div class="soluciones">
                              <div class="head-soluciones">
                                  <p class="titulo-soluciones inline-block">SOLUCIONES</p>
                                  <div class="catvolver inline-block">
                                      <a href="/aplica-tu-ingenio" class="volver">Volver</a>
                                  </div>
                              </div>
                              <div id="region">
                                  <?php
                                  print render($page['content']);
                                  ?>

                                  <p><?php echo $node->field_categoria['und'][0]['entity']->title; ?></p>
                                  <div class="dis">
                                      <li class="lista-item">
                                          <div class="list-cabecera">
                                              <div class="list-imagen">

                                              </div>
                                              <div class="lista">
                                                  <div>
                                                      <div class="sub-lista">
                                                          <span class="list-perfil-2">                                                  <?php
                                                              print(str_replace('_',' ',$node->name));
                                                              ?></span>
                                                      </div>
                                                      <div id="pub-comentario">
                                                          <span class="hora-publicacion"><?php echo date('Y/m/d',$node->created)?></span>
                                                          <span class="num-comentario num-comentario2">Comentarios(<?php
                                                              print($node->comment_count);
                                                              ?>)</span>
                                                      </div>
                                                  </div>
                                                  <div class="list-contenido">
                                                      <?php
                                                      print($node->field_contenido['und'][0]['value']);
                                                      ?>
                                                  </div>

                                              </div>
                                          </div>
                                          <div class="list-opciones1 list-borde">
                                              <div class="likes inline-block">
                                                  <span class="votar">Votar</span>
                                                  <span class="icon-thumbs-up color-list-opc1"></span><span class="icon-number separador up"></span>
                                                  <span class="icon-thumbs-up2 color-list-opc1"></span><span class="icon-number down"></span>
                                              </div>
                                              <div class="compartir-2 inline-block">
                                                  <span class="comp">Compartir </span><span class="icon-facebook icon-f color-list-opc"></span><span class="icon-twitter icon-t color-list-opc"></span>
                                              </div>
                                          </div>
                                      </li>

                                      <div class="pregunta-respuesta">
                                          <!--<p style="padding-top:0px">REALIZAR COMENTARIO</p>-->
                                          <textarea class="comentario" placeholder="Escribe un comentario..." cols="99" rows="2" style="border:0" maxlength="500" required></textarea>
                                          <div class="envio-2">
                                              <p id="sonora" class="btn-envia inline-block">Enviar</p>
                                          </div>
                                      </div>
                                      <?php
                                      if(isset($page['content']['system_main']['nodes'][$node->vid]['comments'])){
                                      if(isset($page['content']['system_main']['nodes'][$node->vid]['comments']['comments'])){
                                      $comments=$page['content']['system_main']['nodes'][$node->vid]['comments']['comments'];
                                      if(sizeof($comments)>0){
                                          unset($comments['#sorted']);
                                          unset($comments['pager']);
                                          foreach ($comments as $key => $rowcontent) {
                                              ?>
                                              <a id="comentario-<?php echo $key ?>"></a>
                                              <div class="pregunta-2">
                                                  <div class="comentario-respuesta">
                                                      <div class="otro-comentario">
                                                          <div class="col-xs-3 margen-comentario">
                                                              <p>Por</p>

                                                              <p class="comentario-color"><?php echo $rowcontent['comment_body']['#object']->name?></p>
                                                          </div>
                                                          <div class="col-xs-9 detalle-publicacion margen-comentario">
                                                              <p>Publicado el</p>

                                                              <p class="comentario-color"><?php echo date('d/m/Y h:i:s',$rowcontent['comment_body']['#object']->created)?></p>
                                                          </div>
                                                      </div>
                                                      <p>
                                                          <?php echo $rowcontent['comment_body']['#object']->comment_body['und'][0]['value']?>
                                                      </p>
                                                  </div>

                                              </div>
                                          <?php
                                          }
                                          }
                                          }
                                          }
                                      ?>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-xs-12">
                          <div class="pregunta-capciosa">
                              <p>¿Sabías que cada fin de semana se recogen grandes cantidades de basura en las playas?</p>
                              <div class="capciosa-envia">
                                  <p class="btn-envia-2"><a id="sonora" href="<?php echo $base_url;?>/aplica-tu-ingenio" rel="<?php echo $node->field_categoria['und'][0]['entity']->vid; ?>">Envía una solución</a></p>
                              </div>
                          </div>
                          <div class="encuesta encuesta-solucion">
                              <p class="titulo-encuesta"><span class="icon-checkmark"></span>Pregunta de la semana</p>
                              <div class="pregunta-destacada-2">
                                  <?php if ($page['sidebar_second']): ?>
                                      <div id="sidebar-second" class="column sidebar"><div class="section">
                                              <?php print render($page['sidebar_second']); ?>
                                          </div></div> <!-- /.section, /#sidebar-second -->
                                  <?php endif; ?>
                              </div>
                          </div>
                          <script type="text/javascript">

                          </script>
                          <div class="redes">
                              <p class="col-lg-6 red facebook" id="fb">Facebook</p>
                              <p class="col-lg-6 red twitter" id="tw">Twitter</p>
                              <div class="pagina" id="pfb">
                                  <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fingenioenaccion%3Ffref%3Dts&amp;width=257px&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:257px; height:590px;" allowTransparency="true"></iframe>
                              </div>
                              <div class="pagina hidden" id="ptw">
                                <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/UTECedu" data-widget-id="522495691671613440">Tweets por @UTECedu</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          <?php } ?>

      </div>
      </div>
      </section>
      </div>
      <?php print $feed_icons; ?>

    </div></div> <!-- /.section, /#content -->

  </div></div> <!-- /#main, /#main-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">  
            <a style="float: right;margin-buttom:10px;cursor:pointer" data-dismiss="modal">
              <img src="<?php print($base_path.$theme_path)?>/img/close.jpg" alt="Close window" title="Close window">
            </a>
            <div class="modal-header"> 
                <h4 class="modal-title">Términos y Condiciones</h4>
            </div>
            <div class="modal-body" style="text-align: justify;">
              * En el marco de LA DINÁMICA y de las actividades de difusión y promoción del mismo, UTEC podrá hacer uso respetuoso de la imagen y nombre de EL PARTICIPANTE, así como de LA PROPUESTA.
              <br>* Respecto LA PROPUESTA, EL PARTICIPANTE y/o sus padres, tutores o representantes legales otorgan a UTEC una licencia de uso no exclusiva, de alcance mundial, gratuita y perpetua, para que UTEC pueda usarlos de forma conjunta o por separado, pudiendo reproducirlos, distribuirlos, comunicarlos públicamente y transformarlos, estando UTEC autorizada a hacer o producir obras derivadas de los mismos, exponerlos y colocarlos en la web, todo ello dentro del marco de las actividades de LA DINÁMICA, en material publicitario del mismo, en la difusión o promoción de actividades efectuadas por UTEC y en usos similares.
              <br>* Sin perjuicio de lo establecido en el numeral anterior y con total autonomía, EL PARTICIPANTE y/o sus padres, tutores o representantes legales otorgan una cesión de derechos a favor de UTEC respecto LA PROPUESTA, cesión de derechos no exclusiva, de alcance mundial, gratuita y perpetua, para que UTEC pueda usarlos de forma conjunta o por separado, pudiendo reproducirlos, distribuirlos, comunicarlos públicamente y transformarlos, teniendo UTEC el derecho a hacer o producir obras derivadas de los mismos, exponerlos y colocarlos en la web, todo ello dentro del marco de las actividades de LA DINÁMICA, en material publicitario del mismo, en la difusión o promoción de actividades efectuadas por UTEC y en usos similares.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_EN/all.js#xfbml=1&appId=1485997435000701";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- AGREGADO -->
<style type="text/css">
  #fb,#tw{cursor:pointer;}
  .lnk{color: #fff}
  .lnk:hover{text-decoration: underline;cursor: pointer;color: #fff}
</style>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!-- AGREGADO -->
<script src="<?php echo $base_path.$theme_path;?>/js/bootstrap.js"></script>
<script src="<?php echo $base_path.$theme_path;?>/js/main.js"></script>
<script src="<?php echo $base_path.$theme_path;?>/js/main-front.js"></script>
<?php
if($is_front || $is_front) {
    global $comments1;
    $comment1 = new stdClass;
    $comment1->nid = 68;
    $formComments = drupal_get_form('comment_node_soluciones_form', $comment1);
    print drupal_render($formComments);
}
?>
