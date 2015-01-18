<?php
/**
 * @package WordPress
 * @subpackage Aaron Marino v2
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div id="homepage" class="page-wrapper">

    <div class="title-image-wrapper">
      <div class="splash-image"><img src="<?php echo get_field('splash_image'); ?>" alt="Aaron Marino" /></div>
      <!-- save markup for parallaxed version.
      <div class="center-wrapper">
        <div class="grid-row">
          <div class="col small-col-12">
            <div class="suited-man"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/suited-man.png" alt="Aaron Marino." /></div>
          </div>
        </div>
      </div>
      -->
    </div>

    <div class="motto-wrapper inverted gray">
      <div class="center-wrapper">
        <div class="grid-row no-margin">
          <div class="col small-col-12">
            <h2 class="motto"><?php echo get_field('motto'); ?></h2>
          </div>
        </div>
      </div>
    </div>

    <div class="center-wrapper">
      <div class="grid-row">
        <div class="col small-col-12">
          <?php echo get_field('intro_copy'); ?>
        </div>
      </div>
    </div>

    <?php if ( get_field('display_iamalpham_links') ) { ?>
    <div class="center-wrapper">
      <div class="grid-row">
        <div class="col small-col-12 light-gray inverted rounded-corners iamalpham-cta">
          <div class="grid-row no-margin">
            <div class="col small-col-12 aligncenter">
              <h3>Come check out over <span>2500 free</span> videos and articles!</h3>
            </div>
          </div>
          <div class="grid-row no-margin">
            <div class="col medium-col-6 small-col-12 alignright hide-for-small-only">
              <a href="http://www.iamalpham.com" target="_blank" class="button gray inverted rounded-corners">www.iamalpha<span class="gold">m.</span>com</a>
            </div>
            <div class="col medium-col-6 small-col-12 alignleft hide-for-small-only">
              <a href="https://www.youtube.com/user/IamAlphaM" target="_blank" class="button gray inverted rounded-corners">Alpha <span class="gold">M.</span> YouTube Channel</a>
            </div>
            <div class="col small-col-12 aligncenter hide-for-medium-up">
              <a style="margin-bottom: 1rem;" href="http://www.iamalpham.com" target="_blank" class="button gray inverted rounded-corners">www.iamalpha<span class="gold">m.</span>com</a>
            </div>
            <div class="col small-col-12 aligncenter hide-for-medium-up">
              <a style="margin-bottom: 1rem;" href="https://www.youtube.com/user/IamAlphaM" target="_blank" class="button gray inverted rounded-corners">Alpha <span class="gold">M.</span> YouTube Channel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>

    <?php if ( get_field('display_aweber_signup') ) { ?>
    <div class="center-wrapper newsletter-cta">
      <div class="grid-row">
        <div class="col medium-col-8 small-col-12">
          <h4>Get the Alpha M.<br />Top 10 Image Killers Now!</h4>
          <p>Receive your own complimentary e-book authored by Aaron Marino when you join our network today! Go for it, sign up. It’s <strong>FREE</strong> and your image will thank you.</p>
          <h4>Alpha M. Newsletter</h4>
          <p>Sign up to receive the Alpha M. weekly newsletter. Our newsletter isn’t just another boring article that you never read. We send out exclusive video content, member Q&A videos, special promotions and style finds! Have we tempted you enough yet?</p>
        </div>
        <div class="col medium-col-4 small-col-12">
          <div class="weber-form">
            <div class="header gray inverted rounded-corners">
              <h5>Join Our Mailing List</h5>
            </div>
            <!-- <script src="http://forms.aweber.com/form/37/1523844737.js" type="text/javascript"></script> -->
            <div class="body light-gray inverted rounded-corners">
              <form method="post" class="af-form-wrapper" accept-charset="iso-8859-1" action="http://www.aweber.com/scripts/addlead.pl" target="_new" id="weber-newsletter">
                <div style="display: none;">
                  <input type="hidden" name="meta_web_form_id" value="1523844737"><input type="hidden" name="meta_split_id" value="">
                  <input type="hidden" name="listname" value="alphamimage">
                  <input type="hidden" name="redirect" value="http://www.aweber.com/thankyou-coi.htm?m=audio" id="redirect_1448c62e92fa55029dd14af4fb644c71">
                  <input type="hidden" name="meta_adtracking" value="aaronmarino.com">
                  <input type="hidden" name="meta_message" value="1">
                  <input type="hidden" name="meta_required" value="name,email">
                  <input type="hidden" name="meta_tooltip" value="">
                </div>
                <div class="input-wrapper">
                  <label for="awf_field-33228263">Name:</label>
                  <input id="awf_field-33228263" type="text" name="name" class="text" value="Name" onfocus=" if (this.value == 'Name') { this.value = ''; }" onblur="if (this.value == '') { this.value='Name';} " tabindex="500">
                </div>
                <div class="input-wrapper">
                  <label class="previewLabel" for="awf_field-33228264">Email:</label>
                  <input class="text" id="awf_field-33228264" type="text" name="email" value="Email Address" tabindex="501" onfocus=" if (this.value == 'Email Address') { this.value = ''; }" onblur="if (this.value == '') { this.value='Email Address';} ">
                </div>
                <div class="input-wrapper aligncenter">
                  <a target="_blank" class="button rounded-corners gold inverted" style="color: white; margin-top: 1.75rem; cursor: pointer;" onclick="document.getElementById('weber-newsletter').submit();">SIGN UP</a>
              <p style="font-size: 1.2rem;">We respect your <a title="Privacy Policy" href="http://www.aweber.com/permission.htm" target="_blank" style="color: black; text-decoration: underline;">email privacy</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>

    <div class="light-gray inverted">
      <div class="center-wrapper aaron-quote">
        <div class="grid-row no-margin">
          <div class="col small-col-12">
            <p class="quote aligncenter"><?php echo get_field('aarons_quote'); ?></p>
            <p class="citation aligncenter">&dash; Aaron Marino</p>
          </div>
        </div>
      </div>
    </div>

  </div>

	<?php endwhile; ?>

	<?php else : ?>

	<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
