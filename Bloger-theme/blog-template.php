
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php 
/*
* Template Name: Blog Post
*/
?>

<?php 
get_header(); ?>


<?php
/**
 * Template Name: Custom page template
 */
?>
  
<div id="your-wrapper-div">

<?php
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array(
  'post_type'=> 'post',
  'orderby'    => 'ID',
  'post_status' => 'publish',
  'order'    => 'DESC',
  'paged' => $paged,
  'posts_per_page' => 4 // this will retrive all the post that is published

  
  );


  add_filter('wpseo_title', 'custom_titles', 10, 1);
function custom_titles() {
  
  global $wp;
  $current_slug = $wp->request;

  if ($current_slug == 'foobar') {

    return 'Foobar';
  }
}

  $result = new WP_Query( $args );
  if ( $result-> have_posts() ) : 
  
  ?>
  <?php while ( $result->have_posts() ) : $result->the_post(); 

  ?>

  <div>
  <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); 

  ?> 
  
    <img src="<?php echo $url ?>" 
  img>
    
      <h4>
      <?php the_title(); 
     
      ?>  </h4>
      <a href="<?php the_permalink();?>">
      <button type="button" class="btn btn-primary">READ MORE</button>
  </a>
  <hr>
  </div>
  
  
  <?php endwhile;

  ?>
  

<?php
    $big = 999999999; // need an unlikely integer
     
    echo paginate_links( array(
        'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'    => '?paged=%#%',
        'current'   => max( 1, get_query_var('paged') ),
        'total'     => $result->max_num_pages
    ) );
?>
  <?php endif; wp_reset_postdata();
   
  
  ?>

  	

  	

</div>
	

<?php get_footer(); ?>