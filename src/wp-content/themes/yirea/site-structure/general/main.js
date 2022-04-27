"use strict";
$ = jQuery;

$(document).ready(function () {
  $splide = $(".splide");
  if ($splide.length > 0) {
    new Splide(".splide").mount();
    var elms = document.getElementsByClassName("splide");
    for (var i = 0, len = elms.length; i < len; i++) {
      new Splide(elms[i]).mount();
    }
  }
  $("p:empty").remove();
  // Animation
  // countData();
  //Block function
  header();
});
