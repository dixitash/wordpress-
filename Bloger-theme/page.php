<?php
/**
 *
 * @package Bloger-Theme
 */

get_header(); ?>

	<?php
	if ( have_posts() ) : while ( have_posts() ): the_post(); 
	
	?>

	<div id="post-<?php the_ID(); ?>">
		<h2><?php the_title();
		
		?></h2>
		<div class="post-excerpt"><?php the_content(); ?></div>
	</div>
	
	<?php endwhile;
	endif;
	?>
	<?php
	if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
if ( has_post_thumbnail() ) {
    $featured_image = get_the_post_thumbnail();
}
?>

<?php echo get_post_meta($post->ID, 'systems', true);?>
<?php get_footer(); ?>