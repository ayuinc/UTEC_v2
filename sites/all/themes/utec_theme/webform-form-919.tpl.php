<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	// $titulo = $node->title;
	// $name = $node->webform['components'];
	
	kpr($form);
	print_r($form);
?>

<div class="subscribe pv-7 bg-gray-darker hidden-xs">
		<div class="container">
			<ul class="grid-list grid-list-centered normalize-text">
				<li>
					<h3 class="thin text-white pt-7"><i class="icon-subscribe mr-7"></i><?php print t('Book of Complaints') ?></h3>
					<p>Con la finalidad de atenderlo en el más breve plazo, sírvase llenar todos los datos solicitados.<br>UTEC. Quebrada de Armendáriz 15063, Barranco. Telf. 3731000</p>
				</li>
				<li>
					<div class="form-subscribe">
						<form action="" class="form-inline mb-ch-0">
							<div class="form-group">
								<label for="subscribe_name" class="sr-only"><?php //print t('Name') ?></label>
                <?php //if ($language->language == 'en'): ?>
								  <input type="text" class="form-control" width="210" height="auto" placeholder="Name">
                <?php //elseif ($language->language == 'es'): ?>
                  <input type="text" class="form-control" width="210" height="auto" placeholder="Nombre">
                <?php //endif ?>
							</div>
							<div class="form-group">
								<label for="subscribe_email" class="sr-only"><?php //print t('Email') ?></label>
								<input type="text" class="form-control" width="210" height="auto" placeholder="E-mail">
								<button class="btn btn-outline btn-white"><i class="icon-arrows-right"></i></button>
							</div>
						</form>
					</div>
				</li>
			</ul>
		</div>
	</div>