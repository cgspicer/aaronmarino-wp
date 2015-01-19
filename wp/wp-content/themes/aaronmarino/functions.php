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

// add custom color settings
function my_mce4_options( $init ) {
  $default_colours = '
      "000000", "Black", "993300", "Burnt orange", "333300", "Dark olive", "003300", "Dark green", "003366", "Dark azure", "000080", "Navy Blue", "333399", "Indigo", "333333", "Very dark gray", "800000", "Maroon", "FF6600", "Orange", "808000", "Olive", "008000", "Green", "008080", "Teal", "0000FF", "Blue", "666699", "Grayish blue", "808080", "Gray", "FF0000", "Red", "FF9900", "Amber", "99CC00", "Yellow green", "339966", "Sea green", "33CCCC", "Turquoise", "3366FF", "Royal blue", "800080", "Purple", "999999", "Medium gray", "FF00FF", "Magenta", "FFCC00", "Gold", "FFFF00", "Yellow", "00FF00", "Lime", "00FFFF", "Aqua", "00CCFF", "Sky blue", "993366", "Brown", "C0C0C0", "Silver", "FF99CC", "Pink", "FFCC99", "Peach", "FFFF99", "Light yellow", "CCFFCC", "Pale green", "CCFFFF", "Pale cyan", "99CCFF", "Light sky blue", "CC99FF", "Plum", "FFFFFF", "White"
  ';
  $custom_colours = '
      "F2AA1D", "Alpha Gold", "414042", "Dark Gray", "F0F0F0", "Light Gray"
  ';
  $init['textcolor_map'] = '['.$default_colours.','.$custom_colours.']'; // build colour grid default+custom colors
  $init['textcolor_rows'] = 6; // enable 6th row for custom colours in grid
  return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');

?>