<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta">
<small><?php the_time( 'F jS, Y' ); ?> by <?php the_author_posts_link(); ?></small>
<small> <?php edit_post_link('Edit this entry.','',''); ?>
</small>
		
	</p>

 <?php the_content(); ?>

</div><!-- /.blog-post -->