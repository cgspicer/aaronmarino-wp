<?php
/**
 * @package WordPress
 * @subpackage Aaron Marino v2
 * Template Name: Media Page Template
 */
 get_header();

  // get the latest blog post previews
  $args = array(
    'post_type'      => 'media-entry',
    'posts_per_page' => -1
  );

  $mediaEntries = new WP_Query( $args );

  // sort into featured-articles and in-the-news
  $featuredArticles = array();
  $inTheNews = array();

	if ($mediaEntries->have_posts()) : while ($mediaEntries->have_posts()) : $mediaEntries->the_post();
	  if ( get_field( 'feature' ) ) {
  	  array_push( $featuredArticles, $post );
	  } else {
  	  array_push( $inTheNews, $post );
	  }
    endwhile;
	endif;
	?>
	  <div class="center-wrapper">
      <div class="grid-row">
        <div class="col small-col-12">
      		<div class="generic-page media-page">
        		<div class="grid-row no-margin">
          		<div class="col small-col-12">
                <div class="the-title">
          			  <h1>Media</h1>
                </div>
          		</div>
        		</div>
        		<div class="grid-row">
              <div class="col small-col-12 medium-col-4">
                <div class="featured-articles-title">
                  <h2>Featured Articles</h2>
                </div>
                <div class="featured-articles light-gray inverted">
                  <?php
                    // iterate over featured-articles
                    foreach( $featuredArticles as $post ) {
                      global $post;
                      setup_postdata( $post );
                      ?>
                      <div class="featured-article">
                        <div class="grid-row no-margin">
                          <div class="col small-col-12">
                            <div class="thumbnail">
                              <img class="full image" src="<?php echo get_field('thumbnail'); ?>" alt="<?php the_title(); ?>" />
                            </div>
                          </div>
                        </div>
                        <div class="grid-row">
                          <div class="col small-col-12">
                            <div class="media-title">
                              <a href="<?php echo get_field('url_to_media'); ?>"><h4><?php echo get_field('media_title'); ?></h4></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                      wp_reset_postdata();
                    }
                  ?>
                </div>
              </div>
              <div class="col small-col-12 medium-col-8">
                <div class="in-the-news">
                  <div class="title">
                    <h2>In The News</h2>
                  </div>
                  <?php
                    // iterate over in-the-news
                    foreach( $inTheNews as $post ) {
                      global $post;
                      setup_postdata( $post );
                      ?>
                      <div class="grid-row no-margin">
                        <div class="col small-col-12">
                          <div class="media-title">
                            <h5><a href="<?php echo get_field('url_to_media'); ?>"><?php echo get_field('media_outlet'); ?></a> <?php echo get_field('media_title'); ?></h5>
                          </div>
                        </div>
                      </div>
                      <?php
                      wp_reset_postdata();
                    }
                  ?>
                </div>
              </div>
        		</div>
      		</div>
        </div>
      </div>
	  </div>

<?php get_footer(); ?>
