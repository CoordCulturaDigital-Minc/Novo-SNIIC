( function ($) {

$(document).ready(function($) {
  $('body > nav').css('top', 34);

  if ($('body > nav').css('position') == 'fixed') $('body').addClass('no-sticky');
  if ($('body > header').length == 0) $('body > nav').addClass("sticky");
});

$(window).scroll(function($) {
  var scrollPosition = jQuery(this).scrollTop();
  var $header = jQuery('body > header');
  var $nav = jQuery('body > nav');

  if ($header.length != 0) {
    if (scrollPosition > ($header.position().top + $header.height())) {
      $nav.addClass("sticky");
    }
    else {
      $nav.removeClass("sticky");
    }
  }
  else {
    $nav.addClass("sticky");
  }

  $nav.css('top', scrollPosition >= 34 ? 0 : 34 - jQuery(this).scrollTop());

});

})(jQuery);
