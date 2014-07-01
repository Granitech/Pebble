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
    wp_register_style('fontawesome', '"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css', array(), $pebble_version, 'all');
    wp_register_style('oswald', 'http://fonts.googleapis.com/css?family=Oswald', array(), $pebble_version, 'all');
    wp_register_style('lato', 'http://fonts.googleapis.com/css?family=Lato', array(), $pebble_version, 'all');
}
add_action( 'init', 'pebble_register_font_stack' );

function pebble_enqueue_font_stack(){
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('oswald');
    wp_enqueue_style('lato');
}
add_action( 'wp_enqueue_scripts', 'pebble_enqueue_font_stack' );

/**
* The post tags list
*/
function pebble_custom_classifications(){
    $tags = wp_get_post_tags(get_the_id());
    if( $tags && is_array($tags) ){ ?>
        <div class="btn-group">
        <?php foreach ( $tags as $tag ){ ?>
            <button type="button" class="btn btn-default <?php echo esc_attr($tag->slug); ?>">
                <a href="<?php echo get_term_link($tag); ?>">
                    <?php echo $tag->name; ?>
                </a>
            </button>
        <?php } ?>
    </div>
    <?php }
}
