<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>
<?php print_r($rows); ?>
<div class="pv-35" id="noticias">
  <h2 class="lead medium mb-0"><span class="text-gray-darker">Noticias: Al día con la</span> <span class="text-gray">UTEC</span></h2>
  <h4 class="lead mb-56 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>

  <div class="banner row mb-14 ml-0" data-href="//link">
    <div class="col-sm-3 banner-pic" style="background-image: url(assets/img/img-sq.png);">
      <div class="banner-label bg-gray-darker text-white"><span>Emprendimiento</span></div>
    </div>
    <div class="col-sm-9 banner-content">
      <div>
        <h2><a href="#">Lorem ipsum dolor sit amet.</a></h2>
        <p class="lead">Recusandae vitae, temporibus repudiandae veritatis aspernatur nisi harum explicabo possimus illo velit.</p>
      </div>
    </div>
  </div>
  
  <div class="banner row ml-0 mb-14" data-href="//link">
    <div class="col-sm-9 banner-content">
      <div>
        <h2><a href="#">Lorem ipsum dolor sit amet.</a></h2>
        <p class="lead">Recusandae vitae, temporibus repudiandae veritatis aspernatur nisi harum explicabo possimus illo velit.</p>
      </div>
    </div>
    <div class="col-sm-3 banner-pic" style="background-image: url(assets/img/img-sq.png);">
      <div class="banner-label bg-gray-darker text-white"><span>Innovación</span></div>
    </div>
  </div>

  <div>
    <button class="btn btn-lg btn-primary see-more uppercase">Ver más noticias</button>
  </div>
</div>
