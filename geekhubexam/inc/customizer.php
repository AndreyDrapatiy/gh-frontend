<?php
/**
 * gh Theme Customizer
 *
 * @package gh
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gh_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


    /*Slider CASTOMIZE START
    $wp_customize->add_section( 'gh_home_settings' , array(
        'title'      => __( 'Hero Slider', 'underscores-gh' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( '1-slider_title' , array(
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, '1-slider_title', array(
        'label'      => __( '1-slider_title' , 'underscores-gh' ),
        'section'    => 'gh_home_settings',
        'settings'   => '1-slider_title',
    ) ) );

    $wp_customize->add_setting( '1-slider_content' , array(
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, '1-slider_content', array(
        'label'      => __( '1-slider_content' , 'underscores-gh' ),
        'section'    => 'gh_home_settings',
        'settings'   => '1-slider_content',
    ) ) );




    $wp_customize->add_setting( '2-slider_title' , array(
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, '2-slider_title', array(
        'label'      => __( '2-slider_title' , 'underscores-gh' ),
        'section'    => 'gh_home_settings',
        'settings'   => '2-slider_title',
    ) ) );
    $wp_customize->add_setting( '2-slider_content' , array(
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, '2-slider_content', array(
        'label'      => __( '2-slider_content' , 'underscores-gh' ),
        'section'    => 'gh_home_settings',
        'settings'   => '2-slider_content',
    ) ) );



    $wp_customize->add_setting( '3-slider_title' , array(
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, '3-slider_title', array(
        'label'      => __( '3-slider_title' , 'underscores-gh' ),
        'section'    => 'gh_home_settings',
        'settings'   => '3-slider_title',
    ) ) );
    $wp_customize->add_setting( '3-slider_content' , array(
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, '3-slider_content', array(
        'label'      => __( '3-slider_content' , 'underscores-gh' ),
        'section'    => 'gh_home_settings',
        'settings'   => '3-slider_content',
    ) ) );

HEADER CASTOMIZE END*/



    $wp_customize->add_section( 'gh_header_settings' , array(
        'title'      => __( 'Header', 'underscores-gh' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'header-logo' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header-logo', array(
        'label'      => __( 'header-logo', 'underscores-gh' ),
        'section'    => 'gh_header_settings',
        'settings'   => 'header-logo',
    ) ) );









    $wp_customize->add_section( 'gh_hero_settings' , array(
        'title'      => __( 'Hero', 'underscores-gh' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'hero-title' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero-title', array(
        'label'      => __( 'hero-title', 'underscores-gh' ),
        'section'    => 'gh_hero_settings',
        'settings'   => 'hero-title',
    ) ) );
    $wp_customize->add_setting( 'hero-slogan' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero-slogan', array(
        'label'      => __( 'hero-slogan', 'underscores-gh' ),
        'section'    => 'gh_hero_settings',
        'settings'   => 'hero-slogan',
    ) ) );

    $wp_customize->add_setting( 'hero-description' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero-description', array(
        'label'      => __( 'hero-description', 'underscores-gh' ),
        'section'    => 'gh_hero_settings',
        'settings'   => 'hero-description',
    ) ) );

    $wp_customize->add_setting( 'hero-image' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero-image', array(
        'label'      => __( 'hero-image', 'underscores-gh' ),
        'section'    => 'gh_hero_settings',
        'settings'   => 'hero-image',
    ) ) );






   /* HEADER CASTOMIZE END*/
    $wp_customize->add_section( 'gh_welcome_settings' , array(
        'title'      => __( 'Welcome Section', 'underscores-gh' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'welcome-image' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'welcome-image', array(
        'label'      => __( 'welcome-image', 'underscores-gh' ),
        'section'    => 'gh_welcome_settings',
        'settings'   => 'welcome-image',
    ) ) );



    $wp_customize->add_setting( 'welcome-title' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'welcome-title', array(
        'label'      => __( 'welcome-title', 'underscores-gh' ),
        'section'    => 'gh_welcome_settings',
        'settings'   => 'welcome-title',
    ) ) );

    $wp_customize->add_setting( 'welcome-description' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'welcome-description', array(
        'label'      => __( 'welcome-description', 'underscores-gh' ),
        'section'    => 'gh_welcome_settings',
        'settings'   => 'welcome-description',
    ) ) );






    /*Services CASTOMIZE*/
    $wp_customize->add_section( 'gh_offering_settings' , array(
        'title'      => __( 'Offering', 'underscores-gh' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'offering-title' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'offering-title', array(
        'label'      => __( 'offering-title', 'underscores-gh' ),
        'section'    => 'gh_offering_settings',
        'settings'   => 'offering-title',
    ) ) );

    $wp_customize->add_setting( 'offering-description' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'offering-description', array(
        'label'      => __( 'offering-description', 'underscores-gh' ),
        'section'    => 'gh_offering_settings',
        'settings'   => 'offering-description',
    ) ) );
    /*Services CASTOMIZE END*/



    /*works CASTOMIZE*/
    $wp_customize->add_section( 'gh_works_settings' , array(
        'title'      => __( 'Works', 'underscores-gh' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'works-title' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'works-title', array(
        'label'      => __( 'works-title', 'underscores-gh' ),
        'section'    => 'gh_works_settings',
        'settings'   => 'works-title',
    ) ) );

    $wp_customize->add_setting( 'works-description' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'works-description', array(
        'label'      => __( 'works-description', 'underscores-gh' ),
        'section'    => 'gh_works_settings',
        'settings'   => 'works-description',
    ) ) );
    /*works CASTOMIZE END*/


    /*clients CASTOMIZE*/
    $wp_customize->add_section( 'gh_clients_settings' , array(
        'title'      => __( 'Clients', 'underscores-gh' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'clients-title' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'clients-title', array(
        'label'      => __( 'clients-title', 'underscores-gh' ),
        'section'    => 'gh_clients_settings',
        'settings'   => 'clients-title',
    ) ) );

    $wp_customize->add_setting( 'client-logo-1' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'client-logo-1', array(
        'label'      => __( 'client-logo-1', 'underscores-gh' ),
        'section'    => 'gh_clients_settings',
        'settings'   => 'client-logo-1',
    ) ) );
    $wp_customize->add_setting( 'client-logo-2' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'client-logo-2', array(
        'label'      => __( 'client-logo-2', 'underscores-gh' ),
        'section'    => 'gh_clients_settings',
        'settings'   => 'client-logo-2',
    ) ) );
    $wp_customize->add_setting( 'client-logo-3' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'client-logo-3', array(
        'label'      => __( 'client-logo-3', 'underscores-gh' ),
        'section'    => 'gh_clients_settings',
        'settings'   => 'client-logo-3',
    ) ) );
    $wp_customize->add_setting( 'client-logo-4' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'client-logo-4', array(
        'label'      => __( 'client-logo-4', 'underscores-gh' ),
        'section'    => 'gh_clients_settings',
        'settings'   => 'client-logo-4',
    ) ) );


    /*works CASTOMIZE END*/




    $wp_customize->add_section( 'gh_contact_settings' , array(
        'title'      => __( 'Contact Us', 'underscores-gh' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'contact-us-title' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-us-title', array(
        'label'      => __( 'contact-us-title', 'underscores-gh' ),
        'section'    => 'gh_contact_settings',
        'settings'   => 'contact-us-title',
    ) ) );

    $wp_customize->add_setting( 'contact-us-description' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-us-description', array(
        'label'      => __( 'contact-us-description', 'underscores-gh' ),
        'section'    => 'gh_contact_settings',
        'settings'   => 'contact-us-description',
    ) ) );

    $wp_customize->add_setting( 'contact-us-phone' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-us-phone', array(
        'label'      => __( 'contact-us-phone', 'underscores-gh' ),
        'section'    => 'gh_contact_settings',
        'settings'   => 'contact-us-phone',
    ) ) );

    $wp_customize->add_setting( 'contact-us-location' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-us-location', array(
        'label'      => __( 'contact-us-location', 'underscores-gh' ),
        'section'    => 'gh_contact_settings',
        'settings'   => 'contact-us-location',
    ) ) );








    $wp_customize->add_section( 'gh_blog_hero_settings' , array(
        'title'      => __( 'Blog', 'underscores-gh' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'blog-hero-title' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'blog-hero-title', array(
        'label'      => __( 'blog-hero-title', 'underscores-gh' ),
        'section'    => 'gh_blog_hero_settings',
        'settings'   => 'blog-hero-title',
    ) ) );



    $wp_customize->add_section( 'gh_single_hero_settings' , array(
        'title'      => __( 'Single', 'underscores-gh' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'single-hero-title' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'blog-hero-title', array(
        'label'      => __( 'single-hero-title', 'underscores-gh' ),
        'section'    => 'gh_single_hero_settings',
        'settings'   => 'single-hero-title',
    ) ) );








}
add_action( 'customize_register', 'gh_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gh_customize_preview_js() {
	wp_enqueue_script( 'gh_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'gh_customize_preview_js' );
