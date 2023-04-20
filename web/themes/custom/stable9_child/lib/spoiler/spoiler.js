(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.spoiler = {
    attach: function (context, settings) {
      $('.c-spoiler__button', context).on('click', function() {
        $(this).siblings('.c-spoiler__text').slideDown('fast', function() {
          $(this).css('display', 'block'); // cambia 'block' a 'inline' si deseas
        });
      });
    }
  };

})(jQuery, Drupal);
