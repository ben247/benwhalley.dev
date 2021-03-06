<?php
/**
* Template Name: Full Width
* Template Post Type: post, page
 */

get_header(); ?>

<section id="primary" class="content-area col-sm-12">
    <div id="main" class="site-main" role="main">

        <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>

        <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

        <?php

			if( is_page(14)) {
				get_template_part( 'partials/services' );
			}

		?>

    </div><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();