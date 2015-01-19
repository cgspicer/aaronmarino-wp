<?php
/**
 * @package WordPress
 * @subpackage Aaron Marino v2
 * Template Name: My Story Template
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="generic-page my-story-page" id="post-<?php the_ID(); ?>">

	  <div class="center-wrapper">
  	  <div class="grid-row no-margin">
        <div class="col small-col-12 medium-col-9">
      		<div class="grid-row no-margin">
        		<div class="col small-col-11">
              <div class="the-title">
        			  <h1><?php the_title(); ?></h1>
              </div>
        		</div>
      		</div>
        </div>
  	  </div>
  	  <div class="grid-row">
        <div class="col small-col-12 medium-col-9">
          <div class="grid-row">
            <div class="col small-col-12">
        			<div class="the-content first-section">
        				<?php echo get_field('first_section'); ?>
        			</div>
            </div>
          </div>
        </div>
        <div class="col small-col-12 medium-col-3">
          <img src="<?php echo get_field('photo'); ?>" alt="My Story" />
        </div>
  	  </div>
  	  <div class="grid-row">
        <div class="col small-col-12">
    			<div class="the-content second-section">
    				<?php echo get_field('second_section'); ?>
    			</div>
        </div>
  	  </div>
	  </div>

    <?php
  	  if ( get_field( 'enable_testimonial_block') ) {
    	  echo do_shortcode('[testimonialblock]');
      }
    ?>

  <?php
    endwhile;
	endif; ?>

<?php get_footer(); ?>
