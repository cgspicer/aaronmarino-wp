<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
		<footer id="footer" class="source-org vcard copyright" role="contentinfo">
  		<div class="center-wrapper">
    		<div class="grid-row no-margin">
      		<div class="col small-col-12">
        		<a class="social-link facebook" href="<?php the_field('facebook', 'option'); ?>" target="_blank" >Facebook</a>
        		<a class="social-link twitter" href="<?php the_field('twitter', 'option'); ?>" target="_blank" >Twitter</a>
        		<a class="social-link linkedin" href="<?php the_field('linkedin', 'option'); ?>" target="_blank" >LinkedIn</a>
        		<a class="social-link youtube" href="<?php the_field('youtube', 'option'); ?>" target="_blank" >YouTube</a>
      		</div>
    		</div>
  		</div>
			<small>Copyright &copy;2015 Aaron Marino. All rights reserved.</small>
		</footer>

	</div>

	<?php wp_footer(); ?>


<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31901334-1', 'aaronmarino.com');
  ga('send', 'pageview');

</script>

</body>

</html>
