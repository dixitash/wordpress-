
 
 <?php 
function add_script_style() {
    wp_register_style( 'fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap' );
    wp_enqueue_style( 'fonts' );

    wp_register_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.css' );
    wp_enqueue_style( 'bootstrap-css' );
    
    wp_register_style( 'style-css', get_template_directory_uri().'/css/style.css' );
    wp_enqueue_style( 'style-css' );

    wp_register_style( 'responsive-css', get_template_directory_uri().'/css/responsive.css' );
    wp_enqueue_style( 'responsive-css' );

    wp_register_script( 'jquery', get_template_directory_uri().'/js/jquery-3.4.1.min.js' );
    wp_enqueue_script( 'jquery');

    wp_register_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.js' );
    wp_enqueue_script( 'bootstrap-js');

    wp_register_script( 'custom-js', get_template_directory_uri().'/js/custom.js' );
    wp_enqueue_script( 'custom-js');
}

add_action( 'wp_enqueue_scripts', 'add_script_style', 10 );

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

function houseCustomPostType() {
  // set up product labels
  $labels = array(
      'name' => 'House',
      'singular_name' => 'House',
      'add_new' => 'Add New House',
      'add_new_item' => 'Add New House',
      'edit_item' => 'Edit House',
      'new_item' => 'New House',
      'all_items' => 'All Houses',
      'view_item' => 'View House',
      'search_items' => 'Search Houses',
      'not_found' =>  'No Houses Found',
      'not_found_in_trash' => 'No Houses found in Trash', 
      'parent_item_colon' => '',
      'menu_name' => 'Houses',
  );
  // register post type
  $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => array('slug' => 'house','thumbnail'),
      'query_var' => true,
      'menu_icon' => 'dashicons-admin-home',
      'supports' => array(
          'title',
          'editor',
          'excerpt',
          'trackbacks',
          'custom-fields',
          'comments',
          'revisions',
          'thumbnail',
          'author',
          'page-attributes'
      )
  );
  register_post_type( 'house', $args );
}
add_action( 'init', 'houseCustomPostType' );


add_action( 'init', 'sennza_register_cpt_testimonial' );

function sennza_register_cpt_testimonial() {
    $arg = array(
        'public' => true,
        'query_var' => 'testimonial',
        'rewrite' => array(
            'slug' => 'testimonials',
            'with_front' => false,
            'capability_type' => 'testimonial',
        ),
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'revisions'
        ),
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial',
            'add_new' => 'Add New Testimonial',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'new_item' => 'New Testimonial',
            'view_item' => 'View Testimonial',
            'search_items' => 'Search Testimonials',
            'not_found' => 'No testimonials found',
            'not_found_in_trash' => 'No testimonials found in Trash',
            'menu_name' => 'Testimonials',
            
        ),
    );
    register_post_type( 'testimonial', $arg );
}

    function strappress_widgets_init() {
        register_sidebar( array(
            'name'          => esc_html__( 'Footer 1', 'strappress' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
            'name'          => esc_html__( 'Footer 2', 'strappress' ),
            'id'            => 'sidebar-2',
            'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
    
        register_sidebar( array(
            'name'          => esc_html__( 'Footer 3', 'strappress' ),
            'id'            => 'sidebar-3',
            'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
    
        register_sidebar( array(
            'name'          => esc_html__( 'Footer 4', 'strappress' ),
            'id'            => 'sidebar-4',
            'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
    }
        add_action( 'widgets_init', 'strappress_widgets_init' );    


        function jsonCustomPostType() {
            // set up product labels
            $labell = array(
                'name' => 'json post',
                'label'        => 'jsonpost',
                'singular_name' => 'json post',
                'add_new' => 'Add json post',
                'add_new_item' => 'Add json post',
                'edit_item' => 'Edit json post',
                'new_item' => 'json post',
                'all_items' => 'json post',
                'view_item' => 'View json post',
                'search_items' => 'Search json post',
                'not_found' =>  'No json post Found',
                'not_found_in_trash' => 'No json post found in Trash', 
                'parent_item_colon' => '',
                'menu_name' => 'Json post',
            );
            // register post type
            $argg = array(
                'labels' => $labell,
                'public' => true,
                'show_in_rest' => true,
                'has_archive' => true,
                'show_ui' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'rewrite' => array('slug' => 'jsonpost','thumbnail'),
                'query_var' => true,
                'menu_icon' => 'dashicons-post-status',
                'supports' => array(
                    'title',
                    'editor',
                    'excerpt',
                    'trackbacks',
                    'custom-fields',
                    'comments',
                    'revisions',
                    'thumbnail',
                    'author',
                    'page-attributes'
                )
            );
            register_post_type( 'json post', $argg );
          }
          register_taxonomy('jsonpost_category', 'jsonpost', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'jsonpost-category' )));

          add_action( 'init', 'jsonCustomPostType' );

          

add_action( 'rest_api_init', 'jsonrestapi'); 
function jsonrestapi(){
    register_rest_route( 'wp', '/v2/demo-api', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'jsonapi',
    ));
}
function jsonapi() {
    $allPosts = [];
    $allPosts['jsonpost'] = getPostsBy('jsonpost',5);
    $allPosts['posts'] = getPostsBy('post',5);
    $allPosts['testimonial'] = getPostsBy('testimonial',5);
    return $allPosts;
}

function getPostsBy($postType,$limit)
{
    $allposts=[];
    $json = new WP_QUERY (array(
        'post_type'=>$postType,
        'posts_per_page' => $limit,
    ));
    if(count($json->posts)){
        foreach($json->posts as $post){
            $allposts[]=array(
                'id' => $post->ID,
                'title' => $post->post_title,
                'excerpt'=>$post->post_excerpt,
                'content'=>$post->post_content,
                'post_type'=>$post->post_type,
                'slug'=>$post->post_name,
                'date'=>$post->post_date,
                'author'=>get_the_author_meta('display_name', $post->post_author),
                'author_image'=> get_avatar_url( $post->author ),
            );
        }
    }
    return $allposts;
}






