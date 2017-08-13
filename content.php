<div class="blog-post">
	<h2 class="blog-post-title">
	<a href="<?php echo  the_permalink();?>"><?php the_title(); ?></a></h2>
	<p class="blog-post-meta">
<<<<<<< HEAD
		<?php the_date(); ?> by
		<a href="#">
			<?php the_author(); ?> 
		</a>|
		<?php 
		$categories = get_the_category();
		$separator = ', ';
		$output = '';
		if ( ! empty( $categories ) ) {
		    foreach( $categories as $category ) {
		       $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) .
		        '" title="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' .
		        esc_html( $category->name ) . '</a>' . $separator;
		    }
		    echo trim( $output, $separator );
		}
		 ?>
=======
<small><?php the_time( 'F jS, Y' ); ?> by <?php the_author_posts_link(); ?></small>
<small> <?php edit_post_link('Edit this entry.','',''); ?>
</small>
		
>>>>>>> f86d3260a56cd5b76d88d75e11f74058d2cbf593
	</p>

 <?php the_content(); ?>

</div><!-- /.blog-post -->