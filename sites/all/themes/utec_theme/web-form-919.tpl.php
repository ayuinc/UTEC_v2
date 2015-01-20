<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;
	$name = $node->webform['components'];
	
	// print_r($node);
	kpr($form);
?>

<div class="subscribe pv-7 bg-gray-darker hidden-xs">
		<div class="container">
			<ul class="grid-list grid-list-centered normalize-text">
				<li>
					<h3 class="thin text-white pt-7"><i class="icon-subscribe mr-7"></i><?php //print t('Subscribe to UTEC') ?></h3>
				</li>
				<li>
					<div class="form-subscribe">
						<form action="" class="form-inline mb-ch-0">
							<div class="form-group">
								<label for="subscribe_name" class="sr-only"><?php //print t('Name') ?></label>
                <?php //if ($language->prefix == 'en'): ?>
								  <input type="text" class="form-control" width="210" height="auto" placeholder="Name">
                <?php //elseif ($language->prefix == 'es'): ?>
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