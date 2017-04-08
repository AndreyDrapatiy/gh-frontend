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


    /*Slider CASTOMIZE START*/
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

/*HEADER CASTOMIZE END*/


    /*Services CASTOMIZE*/
    $wp_customize->add_section( 'gh_services_settings' , array(
        'title'      => __( 'Services', 'underscores-gh' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'services-title' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services-title', array(
        'label'      => __( 'services-title', 'underscores-gh' ),
        'section'    => 'gh_services_settings',
        'settings'   => 'services-title',
    ) ) );

    $wp_customize->add_setting( 'services-description' , array(

        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services-description', array(
        'label'      => __( 'services-description', 'underscores-gh' ),
        'section'    => 'gh_services_settings',
        'settings'   => 'services-description',
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


}
add_action( 'customize_register', 'gh_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gh_customize_preview_js() {
	wp_enqueue_script( 'gh_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'gh_customize_preview_js' );
