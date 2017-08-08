<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post();
	get_template_part( 'content', get_post_format() ); ?>
<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
<?php
endwhile; //while end 
?>
<div class="navigation">

<?php echo paginate_links(); ?>


  </div>
<?php
endif; // if end
?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>



 
