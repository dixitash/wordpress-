<?php
//show the menu in dashboard
function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'my-custom-menu' => __( 'My Custom Menu' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );
wp_register_style("custom", get_template_directory_uri() . "/style.css", '', '1.0.0');
wp_enqueue_style('custom');
add_theme_support(
    'custom-background',
    array(
        'default-color' => 'a62829',
    )
);
//show the images in wordpress
add_theme_support('post-thumbnails', array(
    'post',
    'page',
    'custom-post-type-name',
    ));
    add_action( 'init', 'theme_support' );

    if ( ! function_exists( 'theme_support' ) ) {
    
        function theme_support () {
    
            /**
             * This feature enables Post Thumbnails support for a theme. Note that you can optionally pass a second argument, $args, with an array of the Post Types for which you want to enable this feature.
             * 
             * @link https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
             */
            add_theme_support( 'post-thumbnails' );
    
        };
    
    };

    add_image_size( 'list-thumb-1', 650, 400, true);
    add_image_size( 'small-list-thumb-1', 400, 200, true);
    add_image_size( 'small-list-thumb-2', 300, 200, true);
    add_image_size( 'small-list-thumb-3', 220, 140, true);
    
  
  

    
    	
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50);
	
// Image size for single posts
add_image_size( 'single-post-thumbnail', 590, 180 );
	
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
the_post_thumbnail( 'full' );
}
the_post_thumbnail();
the_post_thumbnail( 'medium' );
the_post_thumbnail( 'large' );
the_post_thumbnail( 'full' );


function et_excerpt_length($length) {
    return 220;
}
add_filter('excerpt_length', 'et_excerpt_length');
 
/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/
 
function et_excerpt_more($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="view-full-post-btn">View Full Post</a></div>;';
}
add_filter('excerpt_more', 'et_excerpt_more');


?> 
    <?php the_post_thumbnail(); ?>
    <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>