<?php
/**
 * Template Name: Home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package StarterWP
 */
get_header(); ?>


	<div class="container">
		<div id="primary" class="content-area-full">
			<main id="main" class="site-main row" role="main">

				<div class="col-md-8">
					<?php while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					endwhile; ?>
				</div>

			</main>
		</div>
	</div>


<?php get_footer();
