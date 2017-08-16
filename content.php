<div class="row">
	
<div class="blog-post">
<div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 post_contain_box">
<div class="row">
<div class="post-image"><a href="<?php echo  the_permalink();?>">
<?php the_post_thumbnail( 'category-thumb' ) ?></a></div><!-- post-image -->
<h4 class="blog-post-title">
<a href="<?php echo  the_permalink();?>"><?php the_title(); ?></a>
</h4>
<p class="postmetadata">
<?php excerpt(20); ?>
</p>

</div> <!-- row -->

</div> <!-- post_contain_box -->
<h2 class="blog-post-title">
<a href="<?php echo  the_permalink();?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
 <p class="postmetadata">
 <small><?php _e(esc_html('Posted in') ); ?> <?php the_category( ', ' ); ?> |</small>
 <small><?php the_time( 'F jS, Y' ); ?> | <?php _e(esc_html('Posted by -') ); ?> <?php the_author_posts_link(); ?> |</small>
 <small> <?php edit_post_link('Edit this entry.','',''); ?> </small>
 <small> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> 


</small>
</p>
</div><!-- /.blog-post -->
</div>


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