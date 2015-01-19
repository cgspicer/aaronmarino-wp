<?php
// Aaron Marino v2 functions file

// shortcodes
require_once(get_stylesheet_directory().'/shortcodes/testimonial-block.php');

// setting up an ACF options page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
  	'page_title' 	=> 'Social Media Settings',
  	'menu_title'	=> 'Social Media Settings',
  	'menu_slug' 	=> 'social-media-settings',
  	'position'    => '2.5'
  ));
}

function custom_script() {
    wp_enqueue_script(
        'script', // name your script so that you can attach other scripts and de-register, etc.
        get_stylesheet_directory_uri() . '/js/script.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}
function sscrollmagic_script() {
    wp_enqueue_script(
        'swipe', // name your script so that you can attach other scripts and de-register, etc.
        get_stylesheet_directory_uri() . '/js/vendor/jquery.scrollmagic.min.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}
function gsap_script() {
    wp_enqueue_script(
        'tweenmax', // name your script so that you can attach other scripts and de-register, etc.
        get_stylesheet_directory_uri() . '/js/vendor/TweenMax.min.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}
add_action( 'wp_enqueue_scripts', 'custom_script' );
add_action( 'wp_enqueue_scripts', 'scrollmagic_script' );
add_action( 'wp_enqueue_scripts', 'gsap_script' );

?>