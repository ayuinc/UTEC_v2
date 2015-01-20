<?php global $language ?>
<div class="pv-42" id="home-sec-1">
	<div class="container">
		<h2 class="lead medium mb-7"><span class="text-gray-darker"><?php print t('Ready to') ?></span> <span class="text-gray"><?php print t('change the world?') ?></span></h2>
		<h4 class="lead mb-35"><?php print t('These are our undergraduate programs:') ?></h4>
		<ul class="grid-list grid-list-5 grid-list-1-xs pt-21 list-carreras text-center text-left-xs mb-ch-21-xs">
			<li>
				<div data-href="/carreras/ingenieria-industrial">
					<div><i class="icon-ing-industrial"></i></div>
					<h2>
						<?php $ingenieria_industrial_url = "/" . $language->prefix . "/" . drupal_get_path_alias('ingenieria-industrial', $language->prefix); ?>
						<a href="<?php print $ingenieria_industrial_url; ?>">
							<?php if ($language->prefix == 'en'): ?>
								<span><?php print t('Industrial') ?></span>
								<span><?php print t('Engineering') ?></span>
								<span></span>
							<?php elseif ($language->prefix == 'es'): ?>
								<span><?php print t('Engineering') ?></span>
								<span><?php print t('Industrial') ?></span>
								<span></span>
							<?php endif ?>
						</a>
					</h2>
				</div>
			</li>
			<li>
				<div data-href="/carreras/ingenieria-de-la-energia">
					<div><i class="icon-ing-energia"></i></div>
					<h2>
						<?php $ingenieria_de_la_energia_url = "/" . $language->prefix . "/" . drupal_get_path_alias('ingenieria-de-la-energia', $language->prefix); ?>
						<a href="<?php print $ingenieria_de_la_energia_url; ?>">
							<?php if ($language->prefix == 'en'): ?>
								<span><?php print t('Energy') ?></span>
								<span><?php print t('Engineering') ?></span>
								<span></span>
							<?php elseif ($language->prefix == 'es'): ?>
								<span><?php print t('Engineering') ?></span>
								<span><?php print t('Energy') ?></span>
								<span></span>
							<?php endif ?>
						</a>
					</h2>
				</div>
			</li>
			<li>
				<div data-href="/carreras/ingenieria-quimica-industrial">
					<div><i class="icon-ing-quimica"></i></div>
					<h2>
						<?php $ingenieria_quimica_industrial_url = "/" . $language->prefix . "/" . drupal_get_path_alias('ingenieria-quimica-industrial', $language->prefix); ?>
						<a href="<?php print $ingenieria_quimica_industrial_url; ?>">
							<?php if ($language->prefix == 'en'): ?>
								<span><?php print t('Industrial') ?></span>
								<span><?php print t('Chemical') ?></span>
								<span><?php print t('Engineering') ?></span>
							<?php elseif ($language->prefix == 'es'): ?>
								<span><?php print t('Engineering') ?></span>
								<span><?php print t('Chemical') ?></span>
								<span><?php print t('Industrial') ?></span>
							<?php endif ?>
						</a>
					</h2>
				</div>
			</li>
			<li>
				<div data-href="/carreras/ingenieria-electronica">
					<div><i class="icon-ing-electronica"></i></div>
					<h2>
						<?php $ingenieria_electronica_url = "/" . $language->prefix . "/" . drupal_get_path_alias('ingenieria-electronica', $language->prefix); ?>
						<a href="<?php print $ingenieria_electronica_url; ?>">
							<?php if ($language->prefix == 'en'): ?>
							<span><?php print t('Electronic') ?></span>
								<span><?php print t('Engineering') ?></span>
								<span></span>
							<?php elseif ($language->prefix == 'es'): ?>
								<span><?php print t('Engineering') ?></span>
								<span><?php print t('Electronic') ?></span>
								<span></span>
							<?php endif ?>
						</a>
					</h2>
				</div>
			</li>
			<li>
				<div data-href="/carreras/ingenieria-mecanica">
					<div><i class="icon-ing-mecanica"></i></div>
					<h2>
						<?php $ingenieria_mecanica_url = "/" . $language->prefix . "/" . drupal_get_path_alias('ingenieria-mecanica', $language->prefix); ?>
						<a href="<?php print $ingenieria_mecanica_url; ?>">
							<?php if ($language->prefix == 'en'): ?>
								<span><?php print t('Mechanical') ?></span>
								<span><?php print t('Engineering') ?></span>
								<span></span>
							<?php elseif ($language->prefix == 'es'): ?>
								<span><?php print t('Engineering') ?></span>
								<span><?php print t('Mechanical') ?></span>
								<span></span>
							<?php endif ?>
						</a>
					</h2>
				</div>
			</li>
		</ul>
	</div>
</div>
