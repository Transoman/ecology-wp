'use strict';

global.jQuery = require('jquery');
var svg4everybody = require('svg4everybody'),
  fancybox = require('@fancyapps/fancybox'),
  popup = require('jquery-popup-overlay'),
  tabslet = require('tabslet'),
  SimpleBar = require('simplebar'),
  Swiper = require('swiper');

jQuery(document).ready(function($) {
  // Toggle nav menu
  $('.nav-toggle').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $('.header__nav').toggleClass('open');
  });

  // Modal
  $('.modal').popup({
    transition: 'all 0.3s',
    onclose: function() {
      $(this).find('label.error').remove();
    }
  });

  // Tabs
  $('.services-tabs').tabslet();
  $('.stages-tabs').tabslet();

  // Slider
  new Swiper ('.teams-slider', {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      1200: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      767: {
        slidesPerView: 1,
        spaceBetween: 30
      }
    }
  });

  var teamSliderInfo = function() {
    $('.teams-slider__link').click(function(e) {
      e.preventDefault();

      $(this).parents('.teams-slider__item').find('.teams-slider__info').addClass('is-active');
    });

    $('.teams-slider__close').click(function(e) {
      e.preventDefault();

      $(this).parent().removeClass('is-active');
    });

  };

  teamSliderInfo();


  // SVG
  svg4everybody({});
});