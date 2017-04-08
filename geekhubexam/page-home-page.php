

<?php
/**
 * template name: home-page
*/
get_header(); ?>



<section class="hero">
    <div class="container">
        <div class="col-md-4  col-md-offset-2 text-right">
            <img class="img-responsive" src="<?php echo get_theme_mod('hero-image') ?>">
        </div>
        <div class="col-md-4  text-left">
            <h2><?php echo get_theme_mod('hero-title'); ?></h2>
            <h3><?php echo get_theme_mod('hero-slogan'); ?></h3>
            <p><?php echo get_theme_mod('hero-description'); ?></p>
        </div>
    </div>
</section>

<section class="welcome">
    <div class="container">
        <div class="col-md-3  col-md-offset-2 text-right">
            <img class="img-responsive" src="<?php echo get_theme_mod('welcome-image') ?>">
        </div>
        <div class="col-md-6  text-left">
            <h2><?php echo get_theme_mod('welcome-title'); ?></h2>
            <p><?php echo get_theme_mod('welcome-description'); ?></p>
        </div>
    </div>
</section>

<section class="offering">
    <div class="container">
        <div class="col-md-10 col-md-offset-1 text-center title-description">
            <h2><?php echo get_theme_mod('offering-title'); ?></h2>
            <p><?php echo get_theme_mod('offering-description'); ?></p>
        </div>

        <?php
        $args = array('post_type' => 'offering', 'posts_per_page' => 3);
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();

            echo '<div class="col-md-4 text-center offering-item">';
            the_content();
            echo '</div>';
        endwhile; ?>
    </div>
</section>

<section class="works">
    <div class="container">
        <div class="col-md-10 col-md-offset-1 text-center title-description">
            <h2><?php echo get_theme_mod('works-title'); ?></h2>
            <p><?php echo get_theme_mod('works-description'); ?></p>
        </div>

        <?php
        $args = array('post_type' => 'works', 'posts_per_page' => 7);
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();

            echo '<div class="col-md-4 text-center">';
            the_content();
            echo '</div>';
        endwhile; ?>
    </div>
</section>






<?php

get_footer();
