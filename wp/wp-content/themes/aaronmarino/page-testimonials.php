<?php
/**
 * @package WordPress
 * @subpackage Aaron Marino v2
 * Template Name: Testimonials Page Template
 */
 get_header();

  // set up some arrays to store different column content
  $quotes = array();
  $excerpts = array();

  // store testimonial information in separate arrays
  if (  have_rows('testimonials') ) {
    $rowCount = count( get_field('testimonials') );
    $t = 0;
    while ( have_rows('testimonials') ) : the_row();
      $postObj = get_sub_field('highlighted_testimonial');
      global $post;
    	$post = $postObj;
    	setup_postdata( $post );
      $quotation = array();
      $quotation['name'] = get_field('name');
      $quotation['quote'] = get_field('quote');
      array_push( $quotes, $quotation );
      array_push( $excerpts, get_field('quote_excerpt') );
      wp_reset_postdata();
      $t++;
    endwhile;
  }
  ?>
	  <div class="center-wrapper">
      <div class="grid-row">
        <div class="col small-col-12">
      		<div class="generic-page testimonials-page">
        		<div class="grid-row no-margin">
          		<div class="col small-col-12">
                <div class="the-title">
          			  <h1>Testimonials</h1>
                </div>
          		</div>
        		</div>
        		<div class="grid-row no-margin">
          		<div class="col small-col-12">
                <div class="top-copy">
          			  <p><?php echo get_field('top_copy'); ?></p>
                </div>
          		</div>
        		</div>
        		<div class="grid-row">
              <div class="col small-col-12 medium-col-6">
                <?php
                for( $i = 1; $i<$rowCount+1; $i++ ) {
                  if ( ($i % 2) == 0 ) {
                    // since it's even, we need to display an excerpt in this column
                    ?>
                    <div class="excerpt box light-gray inverted rounded-corners">
                      <p><?php echo $excerpts[$i-1]; ?></p>
                    </div>
                    <?php
                  } else {
                    // since it's odd, we need to display a full quote in this column
                    $thisQuote = $quotes[$i-1];
                    $quote = $thisQuote['quote'];
                    $name = $thisQuote['name'];
                    ?>
                    <div class="full-quote">
                      <p><?php echo $quote; ?></p>
                      <p class="citation">- <?php echo $name;?></p>
                    </div>
                    <?php
                  }
                }
                ?>
              </div>
              <div class="col small-col-12 medium-col-6">
                <?php
                for( $i = 1; $i<$rowCount+1; $i++ ) {
                  if ( ($i % 2) == 0 ) {
                    // since it's even, we need to display a full quote in this column
                    $thisQuote = $quotes[$i-1];
                    $quote = $thisQuote['quote'];
                    $name = $thisQuote['name'];
                    ?>
                    <div class="full-quote">
                      <p><?php echo $quote; ?></p>
                      <p class="citation">- <?php echo $name;?></p>
                    </div>
                    <?php
                  } else {
                    // since it's odd, we need to display an excerpt in this column
                    ?>
                    <div class="excerpt box light-gray inverted rounded-corners">
                      <p><?php echo $excerpts[$i-1]; ?></p>
                    </div>
                    <?php
                  }
                }
                ?>
              </div>
        		</div>
      		</div>
        </div>
      </div>
	  </div>

<?php get_footer(); ?>
