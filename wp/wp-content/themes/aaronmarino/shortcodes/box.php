<?php
/**
* Box Container Shortcode
* @author Coran Spicer
**/

// Box shortcode
function box_shortcode( $args, $content = null ){

  $options = shortcode_atts( array(
      'color' => 'light-gray', //light-gray, gold, gray, medium-gray
      'rounded' => false, // adds rounded-corners
      'border' => false // adds a border
  ), $args );

  $boxClassList = 'box inverted '.$options['color'];
  if ( $options['rounded'] == 'true' ) { $boxClassList .= ' rounded-corners'; }
  if ( $options['border'] == 'true' ) { $boxClassList .= ' medium-border'; }

  $boxMarkup = '<div class="'.$boxClassList.'">'.do_shortcode($content).'</div>';

  return $boxMarkup;
}
add_shortcode( 'box', 'box_shortcode' );

?>