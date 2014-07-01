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


// <link href="http://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet" type="text/css">
// <link href="http://fonts.googleapis.com/css?family=Lora" rel="stylesheet" type="text/css">

function pebble_register_font_stack(){
    $pebble_version = '023';
    wp_register_style('istok-web', 'http://fonts.googleapis.com/css?family=Istok+Web', array(), $pebble_version, 'all');
    wp_register_style('lora', 'http://fonts.googleapis.com/css?family=Lora', array(), $pebble_version, 'all');
}
add_action( 'init', 'pebble_register_font_stack' );

function pebble_enqueue_font_stack(){
    wp_enqueue_style('istok-web');
    wp_enqueue_style('lora');
}
add_action( 'wp_enqueue_scripts', 'pebble_enqueue_font_stack' );
