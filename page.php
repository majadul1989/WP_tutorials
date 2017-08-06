<?php 
get_header();

if (have_posts()): while (have_posts()): the_post(); ?>
<div class="container single-page">
	<div class="row single-post">
	<div class="parent_title col-md-12 col-lg-12">
	<div class="row">
	<ul>
	<?php if($post->post_parent){ 
		$page_array = array( 
		'child_of'=>$post->post_parent, 
		'title_li'=>null ); 
		?>
		<li class="parent"><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"> <?php echo get_the_title(get_top_ancestor_id()); ?></a></li>
		<?php
	} else{ 
		$page_array = array( 
		'child_of'=>$post->ID, 
		'title_li'=>null); 
	} ?>
	<li></li>
		<?php wp_list_pages($page_array); ?>
	</ul>
	</div>
	</div> <!-- parent_title -->

<article class="post page single">
	<div class="post page title">
		<h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
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