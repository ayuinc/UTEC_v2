<?php 

	$imagen = $node->field_image['und']['0']['uri'];

?>
<div class="container-sm">
	<div class="lead-ch p-ch-gray">
		<div id="carousel-custom" class="carousel carousel-custom slide mb-14" data-ride="carousel">
			<!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		  	<div class="item active">
			  	<div class="banner banner-label-bottom mb-14 ml-0">
						<div class="banner-pic" style="background-image:url(<?php print image_style_url($image_style, $imagen); ?>);">
						</div>
					</div>
			  </div>
			</div>
		</div>
	</div>
</div>
