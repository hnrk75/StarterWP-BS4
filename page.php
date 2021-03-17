<?php
/**
 * The template for displaying all pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package StarterWP
 */
get_header(); ?>


	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main row" role="main">
					
				<div class="col-md-8">
					<?php while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					endwhile; ?>
				</div><!-- .col -->
				
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div><!-- .col -->
				
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .container -->


<?php get_footer();
