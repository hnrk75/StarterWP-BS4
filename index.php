<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package StarterWP
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container">
				<div class="row">

					<div class="col-md-8">
						<?php if ( have_posts() ) : if ( is_home() && ! is_front_page() ) : ?>
						
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

						<?php
							endif;

							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content', get_post_format() );
							
							endwhile;
								the_posts_pagination( array(
									'prev_text' => '<i class="fa fa-arrow-left" aria-hidden="true"></i><span class="screen-reader-text">' . __( 'Previous Page', 'pool' ) . '</span>',
									'next_text' => '<span class="screen-reader-text">' . __( 'Next Page', 'pool' ) . '</span><i class="fa fa-arrow-right" aria-hidden="true"></i>',
								) ); 
							
							else :
								get_template_part( 'template-parts/content', 'none' );
							
							endif;
						?>
					</div>
				
					<div class="col-md-4">
						<?php get_sidebar(); ?>
					</div>
			
				</div><!-- .row -->
			</div><!-- .container -->
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
