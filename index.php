<?php get_header(); ?>
<div class="container warpper">
<div class="row">
<div class="col-md-8 col-lg-8 col-xs-12 col-sm-12 main-index">
<?php if(is_home()): ?>
	<div class="row">
	<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 home-slide">
		<div class="row">
		<?php // Dynamic Sidebar
		if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'home-slide' ) ) : ?>
		
			<!-- Sidebar fallback content -->
		
		<?php endif; // End Dynamic Sidebar Sidebar Name ?>
		</div>
	</div> <!-- home-slide -->
	</div>
	<?php endif; ?>
<?php if (have_posts()): while (have_posts()): the_post();
	get_template_part( 'content', get_post_format() ); ?>
<?php
endwhile; //while end 
?>
<div class="navigation">

<?php echo paginate_links(); ?>


  </div>
<?php
endif; // if end
?>
</div> <!-- main-index -->
<?php get_sidebar(); ?>

</div> <!-- row -->	
</div> <!-- container warpper -->
<?php get_footer(); ?>



 
