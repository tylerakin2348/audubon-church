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

add_theme_support( 'post-thumbnails' );


// This function removes WP-injected p tags surrounding img elements.
	// This function was found at http://micahjon.com/2016/removing-wrapping-p-paragraph-tags-around-images-wordpress/
function gc_remove_p_tags_around_images($content)
{
	$contentWithFixedPTags =  preg_replace_callback('/<p>((?:.(?!p>))*?)(<a[^>]*>)?\s*(<img[^>]+>)(<\/a>)?(.*?)<\/p>/is', function($matches)
	{
		$image = $matches[2] . $matches[3] . $matches[4];
		$content = trim( $matches[1] . $matches[5] );
		if ($content) {
			$content = '<p>'. $content .'</p>';
		}
		return $image . $content;
	}, $content);

	// On large strings, this regular expression fails to execute, returning NULL
	return is_null($contentWithFixedPTags) ? $content : $contentWithFixedPTags;
}
add_filter('the_content', 'gc_remove_p_tags_around_images');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
	return '...<a class="read-more" href="'.get_the_permalink().'" rel="nofollow">Continue reading >></a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
