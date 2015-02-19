(function() {
  $(document).ready(function() {

    $searchForm = $('#search-form');
    console.log($searchForm);
    overlayTempl = '<div class="form-overlay">' + '<div>' + '<a href="#" class="form-overlay-close">X</a>' + '<h3>Procesando información</h3>' + '<div class="mt-42">' + '<span class="spinner animated rotateIn infinite icon-spinner9"></span>' + '</div>' + '</div>' + '</div>';
    if ($searchForm.find('#edit-keys').val().length < 1) {
      $searchForm.find('.form-submit').addClass('disabled');
    }
    $searchForm.find('#edit-keys').on('keyup', function() {
      if ($.trim($(this).val()) == '') {
        $searchForm.find('.form-submit').addClass('disabled');
      } else {
        $searchForm.find('.form-submit').removeClass('disabled');
      }
    });
  });
}).call(this);