<?php

// Functions for Interest Theme

// Add stylesheets
function interest_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/scss/style.css' );
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
}

add_action( 'wp_enqueue_scripts', 'interest_scripts' );

// Wordpress menu customization page added in backend
 function register_my_menu() {
   register_nav_menu('header-menu',__( 'Header Menu' ));
 }
 add_action( 'init', 'register_my_menu' );

// Adds options for theme customizer
function themeslug_theme_customizer( $wp_customize ) {
	$wp_customize->add_section( 'themeslug_logo_section' , array(
	'title'       => __( 'Logo', 'themeslug' ),
	'priority'    => 30,
	'description' => 'Upload a logo to replace the default site name and description in the header',
) );
	$wp_customize->add_setting( 'themeslug_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'themeslug' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
) ) );

}
add_action( 'customize_register', 'themeslug_theme_customizer' );
