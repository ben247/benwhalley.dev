<?php
/**
 * The template for displaying the title
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<div class="container__page pt-3 pb-3">
    <div class="container__page-subtitle">
        <?php 
                
                if( is_page(29)) {
                    echo esc_html__("I'm a developer who enjoys working in front-end development but also gets a kick out of back-end development");
                } elseif ( is_page(43)) {
                    echo esc_html__("blog subtitle");
                } elseif ( is_page(14)) {
                    echo esc_html__("Hi, I'm Ben, a Lancashire-based freelance web developer, specialising in WordPress development and front-end design");
                } elseif ( is_page(39)) {
                    echo esc_html__("guides subtitle");
                } elseif ( is_page(41)) {
                    echo esc_html__("Some of the web design, front-end development and WordPress projects I've worked on");
                }

                ?>
    </div>
</div>