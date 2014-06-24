<?php
/**
 * Custom functions
 */

/**
* Add the Custom Header
*/
$header_args = array(
  'width'         => 960,
  'height'        => 200,
  'flex-width'  => true,
  'flex-height' => true,
  'default-image' => get_template_directory_uri() . '/assets/img/default-header.jpg',
);
add_theme_support( 'custom-header', $header_args );
