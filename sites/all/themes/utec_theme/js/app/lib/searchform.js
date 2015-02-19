(function() {
  $(document).ready(function() {

    $searchForm = $('#search-form');
    console.log($searchForm);
    overlayTempl = '<div class="form-overlay">' + '<div>' + '<a href="#" class="form-overlay-close">X</a>' + '<h3>Procesando información</h3>' + '<div class="mt-42">' + '<span class="spinner animated rotateIn infinite icon-spinner9"></span>' + '</div>' + '</div>' + '</div>';
    if ($searchForm.find('#edit-keys').val().length < 1) {
      $searchForm.find('#edit-submit--2').addClass('disabled');
    }
    $searchForm.find('#edit-keys').on('keyup', function() {
      if ($searchForm.find('#edit-keys').val().length < 1) {
        $searchForm.find('#edit-submit--2').addClass('disabled');
      } else {
        $searchForm.find('#edit-submit--2').removeClass('disabled');
      }
    });
  });
}).call(this);