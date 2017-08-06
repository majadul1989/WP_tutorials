<?php 
register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'secondary' => __('Footer Menu'),
	'mobile' => __('Mobile Menu'),
	) );

function get_top_ancestor_id(){
	global $post;
	if ($post->post_parent) {
		$ancestor = array_reverse(get_post_ancestors( $post->ID ));
		return $ancestor[0];
	}
	return $post->ID;
}

 ?>