(function($, app) {

  "use strict";

  app.Modal = {

    defaults: {

      helpers: {
        overlay: {
          locked: false
        }
      },
      afterShow: function() {}

    },

    show: function(template, config) {
      var $modal = $('#template-modal-' + template);

      this.options = $.extend(this.defaults, config);

      $.fancybox($modal, this.options);
    }

  };

})(jQuery, App);
