<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> 
</script>
    <?php wp_head();?>
</head>

<?php
$isSubPage = '';

if (!is_front_page()) {
    $isSubPage = 'sub_page'; 
}

?>
<!-- sub_page -->
<body <?php body_class($isSubPage); ?>>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="home">
          <img src="<?php the_field('ln_theme_option_logo', 'option'); ?>" />  
          </a>
          <div class="navbar-collapse" id="">
            <ul class="navbar-nav justify-content-between ">
              <div class="User_option">
                <li class="">
                  <a class="mr-4" href="">
                    Login
                  </a>
                  <a class="" href="">
                    Sign up
                  </a>
                </li>
              </div>
            </ul>

            <div class="custom_menu-btn ">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3"></span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <ul custom_cat_list>
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
      </div>
    </header> 
<?= $isSubPage ? '</div>' : '';?> 
