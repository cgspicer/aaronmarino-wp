<?php
/**
Template Name: Style System
**/
get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="generic-page dvd-sales style-system" id="post-<?php the_ID(); ?>">

	  <div class="center-wrapper">
  		<div class="grid-row no-margin">
    		<div class="col small-col-12">
          <div class="the-title">
    			  <h1>Alpha <span class="gold">M.</span> Style System</h1>
          </div>
    		</div>
  		</div>
  	  <div class="grid-row no-margin">
        <div class="col small-col-12 medium-col-8">
          <div class="youtube-wrapper">
            <iframe id="ytplayer" type="text/html" width="640" height="390" src="http://www.youtube.com/embed/<?php echo get_field('youtube_video_id'); ?>?autoplay=0&origin=http://aaronmarino.com&rel=0" frameborder="0"></iframe>
          </div>
          <div class="description">
            <?php echo get_field('description_copy'); ?>
          </div>
            <?php
          if( have_rows('discs') ) {
            $i = 1;
          ?>
          <div class="disc-contents">
            <div class="box gray inverted rounded-corners title">
              <h3>style<span class="gold">system</span> disc contents</h3>
            </div>
              <?php
              while ( have_rows('discs') ) : the_row();
            ?>
            <div class="disc-content-detail grid-row">
              <div class="disc-number col small-col-2">
                <p class="number"><?php echo $i; ?></p>
              </div>
              <div class="table-of-contents col small-col-10">
                <div class="disc-description">
                  <?php echo get_sub_field('description'); ?>
                </div>
                <ul>
                <?php while ( have_rows('toc_items') ) : the_row(); ?>
                  <li><span><?php echo get_sub_field('toc_item'); ?></span></li>
                <?php endwhile; ?>
                </ul>
              </div>
            </div>
            <?php
              $i++;
              endwhile;
            }
            ?>
          </div>
          <a href="<?php echo get_field('shop_url'); ?>" class="limited-time-offer gold inverted rounded-corners">
            <h3>Limited Time Offer!</h3>
            <h5>Download Now for only $75</h5>
          </a>
        </div>
        <div class="col small-col-12 medium-col-4 dvd-sales-right-column">
          <div class="grid-row no-margin">
            <div class="col small-col-12">
              <div class="gold inverted" style="padding: .5rem; text-align: center;">
                <h4 style="margin: 0; color: white;">Sales System DVD Set</h4>
              </div>
            </div>
          </div>
          <div class="light-gray inverted" style="padding-top: 2rem;">
            <div class="grid-row">
              <div class="col small-col-12">
                <div>
                  <img src="<?php echo get_field('dvd_set_image'); ?>" alt="Sales System" />
                </div>
              </div>
            </div>
            <div class="grid-row">
              <div class="col small-col-12">
                <p class="taglines">Build Confidence.<br />Dress Exceptionally.<br />Feel Incredible.<br />Date More.</p>
              </div>
            </div>
            <div class="grid-row">
              <div class="col small-col-12">
                <a class="gray inverted rounded-corners" style="text-transform: uppercase; padding: 2rem; display: block; text-align: center; font-size: 3rem; width: 90%; margin: 0 auto;" href="<?php echo get_field('shop_url'); ?>" target="_blank">Buy Now <span class="gold">$75</span></a>
              </div>
            </div>
            <div class="grid-row">
              <div class="col small-col-12">
                <p style="text-align: center;">Only available as digital download.<br />Limited Time Offer</p>
              </div>
            </div>
            <div class="grid-row">
              <div class="col small-col-12">
              <?php
                while ( have_rows('testimonials') ) : the_row();
              ?>
                <div class="testimonial">
                  <div class="quote"><p><?php echo get_sub_field('quote'); ?></p></div>
                  <div class="citation"><p>- <?php echo get_sub_field('citation'); ?></p></div>
                </div>
              <?php
               endwhile;
              ?>
              </div>
            </div>
          </div>
        </div>
  	  </div>
	  </div>

  <?php
    endwhile;
	endif; ?>

<?php get_footer(); ?>










