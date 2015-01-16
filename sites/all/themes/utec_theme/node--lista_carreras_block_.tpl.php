<?php global $language ?>
<div class="pt-14 pb-42" id="home-sec-1">
	<div class="container">
		<h2 class="lead medium mb-7"><span class="text-gray-darker">¿Listo para</span> <span class="text-gray">cambiar el mundo?</span></h2>
		<h4 class="lead mb-35"><?php print t('These are our undergraduate programs:') ?></h4>
		<ul class="grid-list grid-list-5 grid-list-1-xs pt-21 list-carreras text-center text-left-xs mb-ch-70 mb-70">
			<li>
				<div data-href="/carreras/ingenieria-quimica-industrial">
					<div><i class="icon-ing-quimica"></i></div>
					<h2>
						<a href="/carreras/ingenieria-quimica-industrial">
							<?php if ($language == 'en'): ?>
								<span><?php print t('Industrial') ?></span>
								<span><?php print t('Chemical') ?></span>
								<span><?php print t('Engineering') ?></span>
							<?php elseif ($language == 'es'): ?>
								<span><?php print t('Engineering') ?></span>
								<span><?php print t('Chemical') ?></span>
								<span><?php print t('Industrial') ?></span>
							<?php endif ?>
						</a>
					</h2>
				</div>
			</li>
			<li>
				<div data-href="/carreras/ingenieria-industrial">
					<div><i class="icon-ing-industrial"></i></div>
					<h2>
						<a href="/carreras/ingenieria-industrial">
							<span><?php print t('Industrial') ?></span>
							<span><?php print t('Engineering') ?></span>
							<span></span>
						</a>
					</h2>
				</div>
			</li>
			<li>
				<div data-href="/carreras/ingenieria-de-la-energia">
					<div><i class="icon-ing-energia"></i></div>
					<h2>
						<a href="/carreras/ingenieria-de-la-energia">
							<span><?php print t('Energy') ?></span>
							<span><?php print t('Engineering') ?></span>
							<span></span>
						</a>
					</h2>
				</div>
			</li>
			<li>
				<div data-href="/carreras/ingenieria-electronica">
					<div><i class="icon-ing-electronica"></i></div>
					<h2>
						<a href="/carreras/ingenieria-electronica">
							<span><?php print t('Electronic') ?></span>
							<span><?php print t('Engineering') ?></span>
							<span></span>
						</a>
					</h2>
				</div>
			</li>
			<li>
				<div data-href="/carreras/ingenieria-mecanica">
					<div><i class="icon-ing-mecanica"></i></div>
					<h2>
						<a href="/carreras/ingenieria-mecanica">
							<span><?php print t('Mechanic') ?></span>
							<span><?php print t('Engineering') ?></span>
							<span></span>
						</a>
					</h2>
				</div>
			</li>
		</ul>
	</div>
</div>
