<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package StarterWP
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">

			<div class="row">
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div><!--  .col-md-4 -->
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div><!--  .col-md-4 -->
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div><!--  .col-md-4 -->
			</div><!--  .row -->
			
			<div class="site-info">
				<?php _e( 'Copyright', 'text-domain' ); ?> &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ) ?>
			</div><!-- .site-info -->
		
		</div><!--  .container -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
