/* eslint-disable */
import $ from "jquery";
import "popper.js";
import "bootstrap/js/dist/util";
import "bootstrap/js/dist/dropdown";
import "bootstrap/js/dist/collapse";

import slider from "./js/slider.js";
import scrollToTop from "./js/scrollToTop.js";
import sameHeight from "./js/sameHeight.js";
import addClasses from "./js/addClasses";
import Glide from '@glidejs/glide'

new Glide('.glide', {
  type: 'carousel',
  hoverpause: false,
  autoplay: 2000,
  perView: 3,
  gap: 30,
  startAt: 0
}).mount();



import "./scss/style.scss";
import "../node_modules/@glidejs/glide/dist/css/glide.core.min.css"
import "../node_modules/@glidejs/glide/dist/css/glide.theme.min.css"


("use strict");

(function($) {
  $(function() {
    console.log("So it begins");
  });
})(jQuery);
