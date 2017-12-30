import 'bootstrap';

(function ($) {
  'use strict';

  $(function () {

    //== Toggle sidebar admin

    $('[data-toggle="admin-sidebar"]').on('click', function () {
      $('.admin-wrapper').toggleClass('is-sidebar-hidden')
    });

    //== Initialize Bootstrap tooltip with `data-toggle="tooltip"`.

    $('[data-toggle="tooltip"]').tooltip();

    //== Initialize Bootstrap popover with `data-toggle="popover"`.

    $('[data-toggle="popover"]').popover();

  });

}(jQuery));
