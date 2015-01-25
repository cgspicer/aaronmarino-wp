<?php
/**
* Price Shortcode
* @author Coran Spicer
**/

// Price shortcode
function price_shortcode( $args, $content = null ){

  $options = shortcode_atts( array(
      'total' => '0.00', // the price total
      'per' => null, // cost-slash-per-some value
  ), $args );

  $dollarsAndCents = explode( '.', $options['total'] );

  $markup = '<span class="price"><sup>&#36;</sup>'.$dollarsAndCents[0];
  if ( $dollarsAndCents[1] ) { $markup .= '<sup>.'.$dollarsAndCents[1].'</sup>'; }
  if ( $options['per'] ) { $markup .= '<sup> / '.$options['per'].'</sup>'; }
  $markup .= '</span>';

  return $markup;
}
add_shortcode( 'price', 'price_shortcode' );

?>