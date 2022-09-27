<?php
/**

 *
 * @package Bloger-Theme
 *
 */

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>

     


       <div id="navmenu">
      <div class="collapse navbar-collapse" id="navbarResponsive">
      	<ul class="navbar-nav ml-auto">
          <?php wp_nav_menu(array(
            'menu' => 'Top Menu', 
            'container' => false,
            'list_item_class' => "nav-item",
            'link_class' => "nav-link",
            )); ?>
      	</ul>
      </div>
          </div>
    </div>
  </nav>


 


  <div class="container">
      <div class="row">