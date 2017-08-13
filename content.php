<div class="blog-post">
	<h2 class="blog-post-title">
	<a href="<?php echo  the_permalink();?>"><?php the_title(); ?></a></h2>
	<p class="blog-post-meta">
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
	</p>

 <?php the_content(); ?>

</div><!-- /.blog-post -->