<div class="blog-post">
	<h2 class="blog-post-title">
	<a href="<?php echo  the_permalink();?>"><?php the_title(); ?></a></h2>
	
		<?php 
		// $categories = get_the_category();
		// $separator = ', ';
		// $output = '';
		// if ( ! empty( $categories ) ) {
		//     foreach( $categories as $category ) {
		//        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) .
		//         '" title="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' .
		//         esc_html( $category->name ) . '</a>' . $separator;
		//     }
		//     echo trim( $output, $separator );
		// }
		 ?>



 <?php the_content(); ?>
 <p class="postmetadata">
 <small><?php _e(esc_html('Posted in') ); ?> <?php the_category( ', ' ); ?> |</small>
 <small><?php the_time( 'F jS, Y' ); ?> | <?php _e(esc_html('Posted by -') ); ?> <?php the_author_posts_link(); ?> |</small>
 <small> <?php edit_post_link('Edit this entry.','',''); ?> </small>
</p>
</div><!-- /.blog-post -->