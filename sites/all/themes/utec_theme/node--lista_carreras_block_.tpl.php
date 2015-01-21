<?php global $language ?>
<div class="pv-42" id="home-sec-1">
	<div class="container">
		<h2 class="lead medium mb-7"><span class="text-gray-darker"><?php print t('Ready to') ?></span> <span class="text-gray"><?php print t('change the world?') ?></span></h2>
		<h4 class="lead mb-35"><?php print t('These are our undergraduate programs:') ?></h4>
		<ul class="grid-list grid-list-5 grid-list-1-xs pt-21 list-carreras text-center text-left-xs mb-ch-21-xs">
			<li>
				<div>
					<?php if ($language->prefix == 'en'): ?>
					<div><a href="/<?php print $language->prefix ?>/industrial-engineering"><i class="icon-ing-industrial"></i></a></div>
					<h2>
						<a href="/<?php print $language->prefix ?>/industrial-engineering">
							<span><?php print t('Industrial') ?></span>
							<span><?php print t('Engineering') ?></span>
							<span></span>
						</a>
					</h2>
					<?php elseif ($language->prefix == 'es'): ?>
					<div><a href="/<?php print $language->prefix ?>/ingenieria-industrial"><i class="icon-ing-industrial"></i></a></div>
					<h2>
						<a href="/<?php print $language->prefix ?>/ingenieria-industrial">
							<span><?php print t('Engineering') ?></span>
							<span><?php print t('Industrial') ?></span>
							<span></span>
						</a>
					</h2>		
					<?php endif ?>
				</div>
			</li>
			<li>
				<div>
					<?php if ($language->prefix == 'en'): ?>
					<div><a href="/<?php print $language->prefix ?>/energy-engineering"><i class="icon-ing-energia"></i></a></div>
					<h2>
						<a href="/<?php print $language->prefix ?>/energy-engineering">
							<span><?php print t('Energy') ?></span>
							<span><?php print t('Engineering') ?></span>
							<span></span>
						</a>
					</h2>
							<?php elseif ($language->prefix == 'es'): ?>
					<div><a href="/<?php print $language->prefix ?>/ingenieria-de-la-energia"><i class="icon-ing-energia"></i></a></div>
					<h2>
						<a href="/<?php print $language->prefix ?>/ingenieria-de-la-energia">
								<span><?php print t('Engineering') ?></span>
								<span><?php print t('Energy') ?></span>
								<span></span>
							<?php endif ?>
						</a>
					</h2>
				</div>
			</li>
			<li>
				<div>
					<?php if ($language->prefix == 'en'): ?>
					<div><a href="/<?php print $language->prefix ?>/industrial-chemical-engineering"><i class="icon-ing-quimica"></i></a></div>
					<h2>
						<a href="/<?php print $language->prefix ?>/ingenieria-quimica-industrial">
							<span><?php print t('Industrial') ?></span>
							<span><?php print t('Chemical') ?></span>
							<span><?php print t('Engineering') ?></span>
						</a>
					</h2>			
					<?php elseif ($language->prefix == 'es'): ?>
					<div><a href="/<?php print $language->prefix ?>/ingenieria-quimica-industrial"><i class="icon-ing-quimica"></i></a></div>
					<h2>
						<a href="/<?php print $language->prefix ?>/industrial-chemical-engineering">
							<span><?php print t('Engineering') ?></span>
							<span><?php print t('Chemical') ?></span>
							<span><?php print t('Industrial') ?></span>
						</a>
					</h2>
					<?php endif ?>
				</div>
			</li>
			<li>
				<div>
					<?php if ($language->prefix == 'en'): ?>
					<div><a href="/<?php print $language->prefix ?>/electronic-engineering"><i class="icon-ing-electronica"></i></a></div>
					<h2>
						<a href="/<?php print $language->prefix ?>/electronic-engineering">
							<span>Electronic</span>
							<span>Engineering</span>
							<span></span>
						</a>
					</h2>			
					<?php elseif ($language->prefix == 'es'): ?>
					<div><a href="/<?php print $language->prefix ?>/ingenieria-electronica"><i class="icon-ing-electronica"></i></a></div>
					<h2>	
						<a href="/<?php print $language->prefix ?>/ingenieria-electronica">		
							<span>Ingeniería</span>
							<span>Electrónica</span>
							<span></span>
						</a>		
					</h2>			
					<?php endif ?>
				</div>
			</li>
			<li>
				<div>
					<?php if ($language->prefix == 'en'): ?>
					<div><a href="/<?php print $language->prefix ?>/mechanical-engineering"><i class="icon-ing-mecanica"></i></a></div>
					<h2>
						<a href="/<?php print $language->prefix ?>/mechanical-engineering">
							<span><?php print t('Mechanical') ?></span>
							<span><?php print t('Engineering') ?></span>
							<span></span>
						</a>
					</h2>			
					<?php elseif ($language->prefix == 'es'): ?>
					<div><a href="/<?php print $language->prefix ?>/ingenieria-mecanica"><i class="icon-ing-mecanica"></i></a></div>
					<h2>
						<a href="/<?php print $language->prefix ?>/ingenieria-mecanica">
							<span><?php print t('Engineering') ?></span>
							<span><?php print t('Mechanical') ?></span>
							<span></span>
						</a>
					</h2>
					<?php endif ?>
				</div>
			</li>
		</ul>
	</div>
</div>
