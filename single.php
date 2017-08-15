<?php 
get_header();

if (have_posts()): while (have_posts()): the_post(); ?>

<div class="container single-page">
	<div class="row single-post">

<article class="post page single">
	<div class="post page title">
		<h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2> >> <!-- its going to style >> -->
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
<?php $orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
$category_ids = array();
foreach($categories as $individual_category){

	$category_ids[] = $individual_category->term_id;
}

$args=array(
'category__in' => $category_ids,
'post__not_in' => array($post->ID),
'posts_per_page'=> 2, // Number of related posts that will be shown.
'caller_get_posts'=>1
);

$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
echo '<div id="related_posts"><h3>Related Posts</h3><ul>';
while( $my_query->have_posts() ) {
$my_query->the_post();?>

<li><div class="relatedthumb"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
<div class="relatedcontent">
<h3><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
<?php the_time('M j, Y') ?>
</div>
</li>
<?php 
}
echo '</ul></div>';
}
}
$post = $orig_post;
wp_reset_query(); ?>
<?php 
get_footer();
 ?>