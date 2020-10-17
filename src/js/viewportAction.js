import $ from "jquery";
const viewportAction = (() => {
  (function($) {
    $.fn.visible = function(partial) {
      var $t = $(this),
        $w = $(window),
        viewTop = $w.scrollTop(),
        viewBottom = viewTop + $w.height(),
        _top = $t.offset().top,
        _bottom = _top + $t.height(),
        compareTop = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;
      return compareBottom <= viewBottom && compareTop >= viewTop;
    };
  })(jQuery);
  $(window).scroll(function() {
    $(".block-solutions__card").each(function(i, el) {
      el = $(el);
      if (el.visible(true)) {
        el.addClass("animated fadeIn fadeStart");
      }
    });

    $(".block-tests__animationR").each(function(i, el) {
      el = $(el);
      if (el.visible(true)) {
        el.addClass("animated slideInRight");
      }
    });
    $(".block-tests__animationL").each(function(i, el) {
      el = $(el);
      if (el.visible(true)) {
        el.addClass("animated slideInLeft");
      }
    });
  });
  $(window).load(function() {
    $(".search__item:nth-child(3)").each(function(i, el) {
      el = $(el);
      if (el.visible(true)) {
        el.addClass("animated fadeIn fadeLoad");
      }
    });
    $(".search__item:nth-child(4)").each(function(i, el) {
      el = $(el);
      if (el.visible(true)) {
        el.addClass("animated fadeIn fadeLoad");
      }
    });
  });
})();

export default viewportAction;
