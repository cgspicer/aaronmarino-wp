<?php
// Testimonial Block Shortcode
function testimonial_block_shortcode($atts) {
  $options = shortcode_atts( array(
    'id' => null
  ), $atts );

  // get the latest blog post previews
  $args = array(
    'post_type'     => 'testimonial',
    'p'             => $options['id'],
    'orderby'       => 'rand'
  );

  $randomTestimonial = new WP_Query( $args );

  if ( $randomTestimonial->have_posts() ) {
  	while ( $randomTestimonial->have_posts() ) {
    	$randomTestimonial->the_post();
    	$content = '
    	<div class="testimonial-block gray inverted aligncenter">
    	  <div class="center-wrapper">
          <div class="grid-row">
            <div class="col small-col-12">
              <div class="title">
                <h2>Testimonials</h2>
              </div>
              <div class="quote">
                <p>'.get_field('quote').'</p>
              </div>
              <div class="citation">
                <p>- '.get_field('name').'</p>
              </div>
            </div>
          </div>
        </div>
    	</div>';
    }
    // reset for multiple loop usage
    wp_reset_postdata();
  }

  return $content;

}
add_shortcode('testimonialblock', 'testimonial_block_shortcode');
?>