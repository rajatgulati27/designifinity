<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PopularFX
 */

$footer_text = get_theme_mod('popularfx_footer_text');

?>
<footer id="colophon" class="site-footer">
	<!-- <div class="site-info">
			<?php if (empty($footer_text)) { ?>
			<a href="<?php // echo esc_url( __( 'https://wordpress.org/', 'popularfx' ) ); 
						?>">
				<?php //
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'popularfx' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( popularfx_theme_credits() );
			?>
			<?php // }else{
				//	echo wp_kses($footer_text, 'post');
			} ?>
		</div>.site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Bootstrap core JS-->
<script src="<?php echo  get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo  get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!-- load insta posts -->
<script>
	$(document).ready(function() {
		$('#picillusionPortfolio').load("<?php echo  get_template_directory_uri(); ?>/portfolio/instagram.html");
	});
</script>
<!-- Third party plugin JS-->
<script src="<?php echo  get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<script src="<?php echo  get_template_directory_uri(); ?>/js/popper.min.js"></script>
<!-- anime js -->
<script src="<?php echo  get_template_directory_uri(); ?>/js/anime.min.js"></script>
<!-- text change js -->
<script src="<?php echo  get_template_directory_uri(); ?>/js/changetext.js"></script>
<!-- Core theme JS-->
<script src="<?php echo  get_template_directory_uri(); ?>/js/scripts.js"></script>

<!-- reference - https://www.jqueryscript.net/social-media/Instagram-Photos-Without-API-instagramFeed.html -->
<!-- <script src="<?php echo  get_template_directory_uri(); ?>/js/jquery.instagramFeed.js"></script> -->
</body>

</html>