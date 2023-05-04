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

(function ($, Drupal) {
  Drupal.behaviors.misCookies = {
    attach: function (context, settings) {
      // Comprueba si la cookie 'aceptarCookies' existe.
      if (document.cookie.indexOf('aceptarCookies') === -1) {
        // Si la cookie no existe, crea la barra de cookies.
        var cookieBar = '<div id="cookie-bar" style="position: fixed; bottom: 0; left: 0; right: 0; background-color: #000; color: #fff; padding: 10px; z-index: 9999; text-align: center;">Este sitio web utiliza cookies. <a href="#">Más información</a> <button id="aceptar-cookies" style="background-color: #fff; color: #000; border: none; padding: 10px 20px; border-radius: 5px; margin-left: 10px;">Aceptar</button></div>';
        $('body', context).append(cookieBar);
        // Agrega un evento click al botón de aceptar cookies.
        $('#aceptar-cookies', context).click(function () {
          // Crea la cookie 'aceptarCookies' con una duración de 365 días.
          var date = new Date();
          date.setTime(date.getTime() + (365 * 24 * 60 * 60 * 1000));
          document.cookie = 'aceptarCookies=true; expires=' + date.toUTCString() + '; path=/';
          // Oculta la barra de cookies.
          $('#cookie-bar', context).slideUp();
        });
      }
    }
  };
})(jQuery, Drupal);

