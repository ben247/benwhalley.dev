<?php
/**
 * The template for displaying the title
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<div class="container__page border-bottom">
    <div class="container">
        <div class="container-page-title h1">
            <!-- If page then show page title -->
            <?php if (is_page()) {
                echo (get_the_title());
            } ?>
            <div>
                <!-- If post then show post title -->
                <?php if (is_single()) {
                echo (get_the_title());
            } ?>
            </div>
            <!-- Post details -->

            <div>
                <?php if (get_post_type() === 'post') {?>
                <h2 class="auth-meta">By
                    <span class="auth-name"><?php the_author_meta('display_name', $post->post_author );?></span> on <?php the_time('F jS, Y');
                };?>
                </h2>
            </div>

            <!-- List blog tags only on single post -->
            <div>
                <?php
                $tags = get_the_tags();

                if ($tags) {
                    foreach ($tags as $tag) {
                        echo '<div class="post-meta">
                <div class="tags"><a href="' .
                            get_tag_link($tag->term_id) .
                            '">' .
                            $tag->name .
                            '</a></div>
             </div>';
                    }
                }
                ?>
            </div>


        </div>
        <div>
            <?php get_template_part("partials/subtitle"); ?>
        </div>
    </div><!-- close .site-info -->
</div>