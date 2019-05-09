'use strict';

global.jQuery = require('jquery');
var svg4everybody = require('svg4everybody'),
  fancybox = require('@fancyapps/fancybox'),
  popup = require('jquery-popup-overlay'),
  tabslet = require('tabslet');

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

  // SVG
  svg4everybody({});
});