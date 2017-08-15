<?php 
register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'secondary' => __('Footer Menu'),
	'mobile' => __('Mobile Menu'),
	) );

// Subcategoris and Pages
function get_top_ancestor_id(){ 
	global $post;
	if ($post->post_parent) {
		$ancestor = array_reverse(get_post_ancestors( $post->ID ));
		return $ancestor[0];
	}
	return $post->ID;
}

// Add post thumbnail functions
add_theme_support( 'post-thumbnails' );
// Custom post thumbnail 
// Image size for single posts
/* It call by this functions in your single post
 the_post_thumbnail( 'single-post-nanner' ); */
add_image_size( 'single-post-banner', 700, 180 );

// Post formate 
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video' ) );

// Widget registrations
   /**
	* Creates a sidebar
	* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	*/
function widget_registration_for_custom_theme() {
register_sidebar( $args = array(
		'name'          => __( 'Slide', 'theme_text_domain' ),
		'id'            => 'home-slide',
		'description'   => '',
		'class'         => 'custom_widget',
		'before_widget' => '<li id="%1" class="widget %2">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	)
);

register_sidebar( $args = array(
		'name'          => __( 'Sidebar', 'theme_text_domain' ),
		'id'            => 'sidebar',
		'description'   => '',
		'class'         => 'custom_widget',
		'before_widget' => '<li id="%1" class=" widget %2">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	)
);

}
add_action( 'widgets_init', 'widget_registration_for_custom_theme' );

 ?>