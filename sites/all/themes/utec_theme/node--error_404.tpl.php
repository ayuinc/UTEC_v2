<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/'); ?>
					<div class="bg-img-block minh-630 flex-middle-center" style="background-image: url(/<?php print $pathfile ?>/404.jpg)">
						<div class="container-sm text-center lead-ch light">
							<h1 class="text-white lead light uppercase">Error 404</h1>
							<h3 class="text-white">Hasta los ingenieros nos equivocamos para alcanzar la perfección</h3>
							<h5 class="text-white">No se encontró la página que buscas. Te sugerimos que vuelvas a intentar o asegúrate que el URL sea correcto.</h5>
							<div class="pv-35">
								<a href="#" class="btn btn-xl btn-white btn-outline uppercase bold see-more">Volver a página de inicio</a>
							</div>
						</div>
					</div>