(function($) {
  $.fn.isTypeUi = function(target) {
    var $target = $(target);
    var $typeUi = $(this);
    $typeUi.data('opened', false);

    $(document).keypress(function (e) {
      if (e.which == 116) {
        if ($typeUi.data('opened') == false) {
          $typeUi.animate( { marginTop: "0"}, {queue: false, duration: 500, easing: 'swing'} );
          $("body").animate( {backgroundPositionY: "100px"}, {duration: 500, easing: 'swing'} );
          $typeUi.data('opened', true);
        } else {
          $typeUi.animate( { marginTop: "-103px"}, {queue: false, duration: 500, easing: 'swing'} );
          $("body").animate( {backgroundPositionY: "0px"}, {duration: 500, easing: 'swing'} );
          $typeUi.data('opened', false);
        }
      }
    });

    function classNameForFont(fontName) {
      return 'font-' + fontName;
    }

    return this.each(function() {

      var $fontOptions = $typeUi.find('img');

      $fontOptions.click(function() {
        var $chosenFont = $(this);

        // remove previous font
        var currentFont = $typeUi.data('currentFont');
        if (currentFont) $target.removeClass(classNameForFont(currentFont));

        // set new font
        var newFontId = $chosenFont.attr('id');
        $target.addClass(classNameForFont(newFontId));
        $typeUi.data('currentFont', newFontId);

        // Set active class on the chosen font
        $fontOptions.removeClass('active');
        $chosenFont.addClass('active');
      });

    });
  }
})(jQuery);

(function($) {
  $(document).ready(function() {
    $('#typecast-demo').isTypeUi($('h1.post-head'));
  });
})(jQuery);