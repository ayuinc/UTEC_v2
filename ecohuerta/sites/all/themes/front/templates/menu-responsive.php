<div  class="submenu-content-responsive">
    <div class="row submenu">
      <ul class="menu">
          <li class="men1 dropdown <?php if($is_front || strcmp(request_uri(), '/iniciativas-utec')==0 || strcmp(request_uri(), '/retos-ingenieria')==0){print active;}?>">
            <a href="javascript:void(0)" class="link-menu link-menu-primary">
              <div class="submenu-single">
                Ingenio en acción
              </div>
            </a>
            <ul class="submenu">
              <li>
                <a href="<?php print $base_path; ?>" class="link-menu">
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
          <li class="men2 dropdown <?php if(strcmp(request_uri(), '/marea-en-accion')==0 || strcmp(request_uri(), '/marea-en-accion-causas')==0 || strcmp(request_uri(), '/marea-en-accion-que-haremos')==0 || strcmp(request_uri(), '/marea-en-accion-equipos')==0 || strcmp(request_uri(), '/marea-en-accion-capitulos')==0 || strcmp(request_uri(), '/marea-en-accion-votacion')==0){print active;}?>">
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
                  <a href="/marea-en-accion-causas" class="link-menu">
                    <div class="submenu-single">
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
          <li>
            <a id="mobile-aplica-tu-ingenio" href="/aplica-tu-ingenio" class="link-menu link-menu-primary">
              <div class="submenu-single">
                Aplica tu ingenio
              </div>
            </a>
          </li>
          <li class="men3 dropdown <?php if(strcmp(request_uri(), '/air-huerta')==0){print active;}?>">
            <a href="javascript:void(0)" class="link-menu link-menu-primary">
              <div class="submenu-single">
                Air Huerta
              </div>
            </a>
            <ul class="submenu">
              <li>
                <a href="<?php print $base_path; ?>air-huerta" class="link-menu">
                  <div class="submenu-single">
                    Air Huerta
                  </div>
                </a>
              </li>
              <!-- <li>
                <a href="<?php print $base_path; ?>ecohuerta-video-lechugas-hidroponicas" class="link-menu">
                  <div class="submenu-single">
                    Sobre Air Lechugas
                  </div>
                </a>
              </li> -->
              <li>
                <a href="<?php print $base_path; ?>air-huerta-como-funciona" class="link-menu">
                  <div class="submenu-single">
                    ¿Cómo Funciona?
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php print $base_path; ?>ecohuerta-recetas" class="link-menu">
                  <div class="submenu-single">
                    Recetas
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
          <li class="men4 dropdown">
            <a href="http://www.utec.edu.pe/admision/SitePages/Preinscripci%C3%B3n%20Examen%20de%20Admision.aspx?Tipo=Examen%20de%20Admision#.VIsOLmSG8no" class="link-menu link-menu-primary" target="_blank">
              <div class="submenu-single">
                Postula
              </div>
            </a>
          </li>
      </ul>
    </div>
  </div>