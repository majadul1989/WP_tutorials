<?php 
get_header();

if (have_posts()): while (have_posts()): the_post(); ?>

<div class="container single-page">
	<div class="row single-post">

<article class="post page single">
	<div class="post page title">
		<h2><a href="<?php the_permalink(); ?>" <?php the_title(); ?></a></h2>
	</div> <!-- title -->
	<div class="post page contain">
		<h2><?php the_content(); ?></h2>
	</div> <!-- title -->
	
</article>

<?php 
endwhile;
else :
echo "<h2>Not found any post.</h2>";
endif;
?>
	</div> <!-- single-post -->
</div> <!-- single-page -->
<?php 
get_footer();

 ?>