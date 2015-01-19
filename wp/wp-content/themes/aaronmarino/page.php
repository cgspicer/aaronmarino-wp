<?php
/**
 * @package WordPress
 * @subpackage Aaron Marino v2
 * Generic Page Template
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	  <div class="center-wrapper">
      <div class="grid-row">
        <div class="col small-col-12">
      		<div class="generic-page" id="post-<?php the_ID(); ?>">
        		<div class="grid-row no-margin">
          		<div class="col small-col-12">
                <div class="the-title">
          			  <h1><?php the_title(); ?></h1>
                </div>
          		</div>
        		</div>

        		<div class="grid-row">
          		<div class="col small-col-12">
          			<div class="the-content">
          				<?php the_content(); ?>
          			</div>
          		</div>
        		</div>

      		</div>
        </div>
      </div>

	  <?php
  	  if ( get_field( 'bottom_blurb') ) { ?>
      <div class="grid-row">
        <div class="col small-col-12">
          <p class="bottom-blurb"><?php echo get_field('bottom_blurb'); ?></p>
        </div>
      </div>
    <?php
      }
    ?>
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
