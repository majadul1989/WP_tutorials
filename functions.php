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


 ?>