<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gh
 */

get_header(); ?>

    <section class="hero-single">
        <div class="container">

            <div class="col-md-12  text-center">
                <h2><?php echo get_theme_mod('single-hero-title'); ?></h2>
            </div>
        </div>
    </section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="container">
                <div class="col-md-8 text-left single-post-item">

		<?php
		while ( have_posts() ) : the_post();?>

                <div class="col-md-10 text-left">
                    <h2><?php echo get_the_title();?></h2>
                    <?php

                    the_content();
                    the_post_navigation();
                    ?>
                </div>




		<?php endwhile; // End of the loop.
		?>
                </div>
                <div class="col-md-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
