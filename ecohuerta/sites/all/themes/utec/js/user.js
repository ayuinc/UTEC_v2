jQuery(function ($) {
    $('.tabs.primary a:eq(2)').attr('target', '_top');
    if (!$('body').hasClass('not-logged-in')) {
        if ($('body').hasClass('page-user')) {
            var urlPath = '';
            if (location.hostname == 'web.dev') {
                urlPath = '/utec/utec/drupal';
            }
            parent.location = urlPath + '/';
        }
    }
});