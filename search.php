<?php
/**
 * The template for displaying search results pages
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 * @package StarterWP
 */
get_header(); ?>


<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main row" role="main">
					
				<div class="col-md-12">
					<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'text-domain' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header>

					<?php while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'search' );
						endwhile;
						the_posts_pagination( array(
							'prev_text' => '<i class="fa fa-arrow-left" aria-hidden="true"></i><span class="screen-reader-text">' . __( 'Previous Page', 'pool' ) . '</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next Page', 'pool' ) . '</span><i class="fa fa-arrow-right" aria-hidden="true"></i>',
						) ); 
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif; ?>
				</div><!-- .col -->
				
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .container -->


<?php get_footer();
