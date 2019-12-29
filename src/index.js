/* eslint-disable */
import $ from "jquery";
import "popper.js";
import "bootstrap/js/dist/util";
import "bootstrap/js/dist/dropdown";
import "bootstrap/js/dist/collapse";
import "bootstrap/js/dist/modal";
import slider from "./js/slider.js";
import scrollToTop from "./js/scrollToTop.js";
import sameHeight from "./js/sameHeight.js";
import addClasses from "./js/addClasses";
import viewportAction from "./js/viewportAction";
import Glide from "@glidejs/glide";
import Swiper from "swiper";
import "swiper/css/swiper.css";
var swiper = new Swiper(".swiper-container", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
    clickable: true,
  },
});

const logos = document.querySelectorAll(".glide");

for (let i = 0; i < logos.length; i++) {
  let glide = new Glide(logos[i], {
    type: "carousel",
    hoverpause: false,
    autoplay: 2000,
    perView: 4,
    gap: 30,
    startAt: 0,
    breakpoints: {
      767: {
        perView: 3,
      },
      420: {
        perView: 1,
      },
    },
  });

  glide.mount();
}

import "./scss/style.scss";
import "../node_modules/@glidejs/glide/dist/css/glide.core.min.css";
import "../node_modules/@glidejs/glide/dist/css/glide.theme.min.css";

("use strict");

(function($) {
  $(function() {
    console.log("So it begins");
  });
})(jQuery);

$(document).on("shown.bs.modal", ".modal", function() {
  $(this)
    .find("[autofocus]")
    .focus();
});
$(".alignright")
  .parent("p")
  .css("display", "flex");
$(".alignright")
  .parent("p")
  .css("justify-content", "right");
$(".alignleft")
  .parent("p")
  .css("display", "flex");
$(".alignleft")
  .parent("p")
  .css("justify-content", "left");
$(".aligncenter")
  .parent("p")
  .css("display", "flex");
$(".aligncenter")
  .parent("p")
  .css("justify-content", "center");
