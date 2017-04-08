<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh
 */

?>



<section class="clients">
    <div class="container">
        <div class="col-md-10 col-md-offset-1 text-center title-description">
            <h2><?php echo get_theme_mod('clients-title'); ?></h2>
        </div>
        <div id="HeroCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->


            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="col-md-12 text-center">
                        <div class="col-md-3">
                            <img class="img-responsive" src="<?php echo get_theme_mod('client-logo-1') ?>">
                        </div>
                        <div class="col-md-3">
                            <img class="img-responsive" src="<?php echo get_theme_mod('client-logo-2') ?>">
                        </div>
                        <div class="col-md-3">
                            <img class="img-responsive" src="<?php echo get_theme_mod('client-logo-3') ?>">
                        </div>
                        <div class="col-md-3">
                            <img class="img-responsive" src="<?php echo get_theme_mod('client-logo-4') ?>">
                        </div>

                    </div>
                </div>
                <div class="item">
                    <div class="col-md-12 text-center">
                        <div class="col-md-3">
                            <img class="img-responsive" src="<?php echo get_theme_mod('client-logo-1') ?>">
                        </div>
                        <div class="col-md-3">
                            <img class="img-responsive" src="<?php echo get_theme_mod('client-logo-2') ?>">
                        </div>
                        <div class="col-md-3">
                            <img class="img-responsive" src="<?php echo get_theme_mod('client-logo-3') ?>">
                        </div>
                        <div class="col-md-3">
                            <img class="img-responsive" src="<?php echo get_theme_mod('client-logo-4') ?>">
                        </div>

                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#HeroCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#HeroCarousel" data-slide-to="1"></li>

                </ol>
            </div>




        </div>

    </div>




</section>


<section class="contact-us">
    <div class="container">
        <div class="col-md-6">
            <div class="col-md-8">
                <h2><?php echo get_theme_mod('contact-us-title'); ?></h2>
                <p><?php echo get_theme_mod('contact-us-description'); ?></p>
            </div>
            <div class="col-md-6">
                <p><?php echo get_theme_mod('contact-us-phone'); ?></p>
                <p><?php echo get_theme_mod('contact-us-location'); ?></p>
            </div>
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10379.06879159968!2d32.0932867!3d49.43221515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1491642078556" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <form class="col-xs-12 col-sm-12 col-md-12 ">
                <input type="text" class="col-xs-12 col-sm-12 col-md-12"  id="nameinput" placeholder="Name*">
                <input type="email" class="col-xs-12 col-sm-12 col-md-12" id="emailinput" placeholder="Email*">
                <input type="text" class="col-xs-12 col-sm-12 col-md-12 massage" id="commentinput" placeholder="Comment*">
                <button class="btn-light">send</button>
            </form>
        </div>
    </div>
</section>
	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="col-md-12 text-center prefooter">
            <div class="col-md-4 col-md-offset-5">
                <h1><a href="#"> <img class="img-responsive" src="<?php echo get_theme_mod('header-logo') ?>"> </a></h1>
            </div>
        </div>
        <div class="col-md-12 text-center footer">
            <span> © 2015  All Rights Reserved.</span>
        </div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
