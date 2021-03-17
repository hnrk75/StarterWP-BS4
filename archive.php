<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package StarterWP
 */
get_header(); ?>

	<div class="container">
        <div id="primary" class="content-area-full">
            <main id="main" class="site-main row" role="main">

				<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title mb-3">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header>

				<?php while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', get_post_format() );
				endwhile;
					the_posts_pagination( array(
						'prev_text' => '<i class="fa fa-arrow-left" aria-hidden="true"></i><span class="screen-reader-text">' . __( 'Previous Page', 'pool' ) . '</span>',
						'next_text' => '<span class="screen-reader-text">' . __( 'Next Page', 'pool' ) . '</span><i class="fa fa-arrow-right" aria-hidden="true"></i>',
					) ); 
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif; ?>

			</main>
		</div>
	</div>


<?php get_footer();
