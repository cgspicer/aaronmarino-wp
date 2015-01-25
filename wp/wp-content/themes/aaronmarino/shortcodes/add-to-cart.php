<?php
/**
* Add-To-Cart Shortcode
* @author Coran Spicer
**/

// Box shortcode
function add_to_cart_shortcode( $args, $content = null ){

  $options = shortcode_atts( array(
      'text' => 'Add To Cart', // customize button text
      'href' => 'http://shop.aaronmarino.com/', // href value
  ), $args );

  $buttonMarkup = '<div class="add-to-cart"><a class="button gold inverted rounded-corners" href="'.$options['href'].'">'.$options['text'].'</a></div>';

  return $buttonMarkup;
}
add_shortcode( 'add-to-cart', 'add_to_cart_shortcode' );

?>