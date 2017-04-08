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
 *
 * @package gh
 */

get_header(); ?>

    <section class="hero-single">
        <div class="container">

            <div class="col-md-12  text-center">
                <h2><?php echo get_theme_mod('blog-hero-title'); ?></h2>
            </div>
        </div>
    </section>
<div class="container">
    <div id="primary" class="content-area col-md-8 posts-container">
        <main id="main" class="site-main" role="main">

            <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
                <div class="col-md-6 post-item">
                    <div class="col-md-12">
                        <a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
                    </div>
                    <div class="col-md-12 text-center">
                        <?php echo get_the_date(); ?>
                    </div>

                </div>

            <?php endwhile; ?>
            <?php endif; ?>
     </main><!-- #main -->
    </div><!-- #primary -->
    <div class="col-md-4 sidebar">
        <?php get_sidebar();  ?>
    </div>

</div>

<?php

get_footer();
