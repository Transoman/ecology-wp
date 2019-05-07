<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package mytheme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function mytheme_body_classes( $classes ) {
  // Adds a class of hfeed to non-singular pages.
  if ( ! is_singular() ) {
    $classes[] = 'hfeed';
  }

  // Adds a class of no-sidebar when there is no sidebar present.
  if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    $classes[] = 'no-sidebar';
  }

  return $classes;
}
add_filter( 'body_class', 'mytheme_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function mytheme_pingback_header() {
  if ( is_singular() && pings_open() ) {
    printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
  }
}
add_action( 'wp_head', 'mytheme_pingback_header' );

/**
 * SVG Sprite Icon
 */
function hv_the_icon($icon_name, $icon_class = false) {
  $html = '<svg class="'. $icon_class .'"><use xlink:href="'. THEME_URL .'/images/svg/symbol/sprite.svg#'. $icon_name .'"></use></svg>';
  echo $html;
}

function hv_get_icon($icon_name, $icon_class = false) {
  $html = '<svg class="'. $icon_class .'"><use xlink:href="'. THEME_URL .'/images/svg/symbol/sprite.svg#'. $icon_name .'"></use></svg>';
  return $html;
}