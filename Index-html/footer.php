<?php
/**
 * Footer template partial
 *
 * @package Teaser
 *
 */

?>

  <!-- Footer -->
  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <?php
       $widget1 = get_field('ln_theme_option_about_widget', 'option'); 
        ?>
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
             <?= $widget1['heading']; ?>
            </h5>
                <?php
                 if(!get_sub_field('ln_theme_option_about_widget')){ ?>

            <div>
              <div class="img-box">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/location.png" width="18px" alt="">
              </div>
              <p>     
                <?= $widget1['address']; ?>
               
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone.png" width="12px" alt="">
              </div>
              <p>
              <?= $widget1['phone']; ?>
              </p>
            </div>


            <div>
              <div class="img-box">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mail.png" width="18px" alt="">
              </div>
              <p>
              <?= $widget1['email']; ?>
              </p>
            </div>
         </div>
          <?php } ?>
        </div>
        <?php
        $widget2 = get_field('ln_theme_option_information_widget', 'option'); 
        ?>
          <?php if(!get_sub_field('ln_theme_option_information_widget')): ?>

        <div class="col-md-3">
          <div class="info_info">
            <h5>
            <?= $widget2['heading']; ?>
            </h5>
            <p><?= $widget2['content']; ?></p>
          </div>
        </div>
        <?php endif; ?>
        <?php
        $widget3 = get_field('ln_theme_option_list', 'option'); 
        if ($widget3 && count($widget3)) {
        foreach ($widget3 as $key => $pricing) {
        ?>
  
        <div class="col-md-3">
          <div class="info_links">
            <h5>
            <?= $pricing['heading']; ?>     
            </h5>
            <?php
            if ($pricing['list'] && count($pricing['list'])) {
                    echo "<ul>";
                    foreach ($pricing['list'] as $key => $list) {
                      echo "<li>".$list['title']."</li>";
                    }
                    echo "</ul>";
                  }
                  ?>
          </div>
              <?php
            }
            }
            ?>
        </div>
        <?php
        $widget4 = get_field('ln_theme_option_newsletter', 'option'); 
        ?>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
            <?= $widget4['heading']; ?> 
                 <?php dynamic_sidebar( 'sidebar-4' ); ?>
              </aside>

            </h5>
            <form action="">
              <button>
                Subscribe
              </button>
            </form>


            <div class="social_box">
              <?php
              $social =  get_field('social_media_repeater','option');
              foreach ($social as $key => $value) {
                ?>
                <a href="<?= $value['social_link']; ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/<?= $value['social_media']['value']; ?>.png" alt="">
                </a>
                <?php
              }
              ?>  
            </div>
          </div>
        </div>
     </div>
    </div>
  </section> 
  <!-- end info_section -->
  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </section>
  <!-- end  footer section -->
<?php wp_footer(); ?>
</body>
</html>