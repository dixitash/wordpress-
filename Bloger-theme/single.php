<?php
/**
 *
 * @package Blog-Theme
 */

get_header(); ?>
<?php
 $result = new WP_Query( $args );?>
<?php if ( have_posts() ) :
	
	?>
	
<!-- Start of the main loop. -->
<?php while ( have_posts() ) : the_post(); 

?>


	<?php the_content(); ?>

	<?php wp_link_pages(); 
	  
		 
		?>
		<?php

previous_post_link('%link', 'Last Post', TRUE) ;

next_post_link('%link', 'Next Post', TRUE);

?>

<br>
	 <?php

 ?>


<?php endwhile; 
?>

<?php endif; ?>
<?php

?>

<?php get_footer(); ?>

