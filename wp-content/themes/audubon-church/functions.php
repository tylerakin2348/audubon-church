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


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// 
//
// use Carbon_Fields\Container;
// use Carbon_Fields\Field;
//
// add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
// add_action( 'carbon_fields_register_fields', 'crb_attach_template_options' );
//
// 	function crb_attach_theme_options() {
// 	    Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
// 	        ->add_fields( array(
// 	            Field::make( 'text', 'crb_text', 'Text Field' ),
// 				Field::make( 'rich_text', 'crb_footer_copyright', 'Copyright' ),
// 	        ) );
// 	}
//
// 		add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta2' );
// 		function crb_attach_post_meta2() {
// 		    Container::make( 'post_meta', __( 'Page Content', 'crb' ) )
// 		        ->where( 'post_type', '=', 'page' ) // only show our new fields on pages
// 		        ->add_fields( array(
// 		            Field::make( 'complex', 'crb_content', 'Content' )
// 		                ->set_layout( 'tabbed-vertical' )
//
// 		                ->add_fields( array(
// 							Field::make( 'select', 'crb_layout_type2', 'Layout Type' )
// 								->add_options( array(
// 									'default_layout' => 'Default Layout',
// 									'two_column_layout' => 'Two Column Layout',
// 									'three_column_layout' => 'Three Column Layout',
// 								) ),
//
// 							Field::make( 'complex', 'layout_default', 'Default Layout' )
// 								->add_fields( array(
// 									// Start of Column 1
// 									Field::make( 'rich_text', 'text_content11', 'Text Editor' ),
// 								))
// 								->set_conditional_logic( array(
// 									array(
// 										'field' => 'crb_layout_type2',
// 										'value' => 'default_layout',
// 										'compare' => '=',
// 									)
// 								) ), // These parenthese accord with the add_fields within the two column layout above.
//
//                     //
// 					// 			// Two Column Layout
// 					// 			Field::make( 'complex', 'layout_two_column', 'Two Column Layout' )
// 					// 				->add_fields( array(
// 					// 					// Start of Column 1
// 					// 					Field::make( 'rich_text', 'text_content1', 'Text Editor' )
// 					// 						->set_width( 55 ),
// 					// 					Field::make( 'image', 'background_image1', 'Background Image' )
// 					// 						->set_width( 10 ),
// 					// 					// End of Column 1
// 					// 					// Start of Column 2
// 					// 					Field::make( 'rich_text', 'text_content2', 'Text Editor' )
// 					// 						->set_width( 55 ),
// 					// 					Field::make( 'image', 'background_image2', 'Background Image' )
// 					// 					->set_width( 10 ),
// 					// 				// End of Column 2
//                     //
// 					// 			)) // These parenthese accord with the add_fields within the two column layout above.
// 					// 			->set_conditional_logic( array( // This conditional determines when the two column layout displays
// 					// 				array(
// 					// 					'field' => 'crb_layout_type2',
// 					// 					'value' => 'two_column_layout',
// 					// 					'compare' => '=',
// 					// 				)
//                     //
// 					// 			) ),
// 					// 			// End of Two Column Layout
// 					// 		// Start of Three Column Layout
// 					// 		Field::make( 'complex', 'layout_three_column', 'Three Column Layout' )
// 					// 			->add_fields( array(
// 					// 				// Start of Column 1
// 					// 				Field::make( 'rich_text', 'text_content1', 'Text Editor' )
// 					// 					->set_width( 55 ),
// 					// 				Field::make( 'image', 'background_image1', 'Background Image' )
// 					// 					->set_width( 10 ),
// 					// 				// End of Column 1
// 					// 				// Start of Column 2
// 					// 				Field::make( 'rich_text', 'text_content2', 'Text Editor' )
// 					// 					->set_width( 55 ),
// 					// 				Field::make( 'image', 'background_image2', 'Background Image' )
// 					// 				->set_width( 10 ),
// 					// 			// End of Column 2
// 					// 			// Start of Column 3
// 					// 			Field::make( 'rich_text', 'text_content3', 'Text Editor' )
// 					// 				->set_width( 55 ),
// 					// 			Field::make( 'image', 'background_image3', 'Background Image' )
// 					// 			->set_width( 10 ),
// 					// 		// End of Column 3
// 					// 	)) // These parenthese accord with the add_fields within the two column layout above.
// 					// 	->set_conditional_logic( array( // This conditional determines when the two column layout displays
// 					// 		array(
// 					// 			'field' => 'crb_layout_type2',
// 					// 			'value' => 'three_column_layout',
// 					// 			'compare' => '=',
// 					// 		)
// 					// 	) ),
// 					// // End of Three Column Layout
// 					) ), // These parentheses appear in the parent add_fields
// 		        ) ); // These parenthese accord one step higher, including the select field
// 		} // This closes the fields function


//
//
// add_action( 'admin_head', 'hide_editor' );
// function hide_editor() {
//     $template_file = basename( get_page_template() );
//     if($template_file == 'fullwidth.php'){ // template
//         remove_post_type_support('page', 'editor');
//     }
// }
