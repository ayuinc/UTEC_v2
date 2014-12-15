<div class="col-lg-12">
    <div class="titulo">
        <p id="primario">APLICA TU INGENIO</p>

        <p id="tercero">ELIGE UN PROBLEMA</p>

        <p id="secundario">Y ESCRIBE TUS SOLUCIONES</p>
    </div>
    <div class="contaminacion">
        <div class="tipos">
            <div class="content"<?php print $content_attributes; ?>>
                <?php print $content ?>
            </div>
        </div>
        <div class="tipos-xs">
            <div class="content"<?php print $content_attributes; ?>>
                <?php print $content ?>
            </div>
        </div>
        <div id="sabias">
            <div class="triangulo-up">
                <div class="triangulo-up2"></div>
            </div>
            <div class="pregunta">
                <div class="titulo-pregunta">
                   <p class="inline-block">Cada fin de semana se recogen grandes cantidades de basura en las playas.</p>
                </div>
                <div class="pregunta-respuesta">
                    <textarea placeholder="Ingresa tu solución aquí... (máx. 500 caracteres)" style="border:0;width:100%;height:100%;padding:0" maxlength="500"></textarea>
                    
                </div>
            </div>
            <div class="pregunta-respuesta">
                <div class="envio">
                        <p class="envio-terminos inline-block"><a href="#" data-toggle="modal" data-target="#myModal">Términos y Condiciones</a></p>
                        <p class="btn-envia inline-block">Enviar</p>
                  </div>
            </div>
        </div>

         <div id="sabias-xs"  style="display:none">
              <div class="ingresa-solucion">
                  <div class="titulo">
                      <div class="col-xs-10 contenedor pregunta1">
                          <span style="font-size:14px"><b>Contaminación en el mar de Lima</b></span><br>
                          <p class="inline-block">Contaminación en el mar de Lima</p>
                      </div>
                      <div class="col-xs-2 contenedor cerrar">
                        <img src="http://aplicatuingenio.devel.ws/sites/all/themes/utec/img/close.jpg" alt="Close window" title="Close window">
                      </div>

                  </div>
                  <div class="solucion-contenido">
                      <textarea placeholder="Ingresa tu solución aquí... (máx. 500 caracteres)" style="border:0;width:90%;height:70%;margin:20px;color:black" maxlength="500"></textarea>
                      <div class="termino">
                          <p class="inline-block"><a href="#" data-toggle="modal" data-target="#myModal">Términos y Condiciones</a></p>
                          <span class="btn-envia-3 inline-block">Enviar</span>
                      </div>
                  </div>
              </div>
        </div>
    </div>
</div>