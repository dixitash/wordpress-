<?php 
/*
* Template Name: Home Post
*/
?>
<?php get_header(); ?>

<?php if (get_field('home_hero_section_image')) { ?>
  <style>
    .hero_area {
    background-image: url(<?= get_field('home_hero_section_image');?>);
    }
  </style>
<?php } ?>

  <!-- end header section -->
   <!-- slider section -->
   <section class="slider_section ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 offset-md-1">
            <div class="detail-box">

              <?php if (get_field('home_hero_section_title')) { ?>
                <h1><?= get_field('home_hero_section_title');?></h1>
              <?php } ?>

              <p><?= get_field('home_hero_section_content');?></p>

              <?php if (get_field('home_hero_section_button')) {
                $heroSectionButton = get_field('home_hero_section_button');
                ?>
                <div class="btn-box">
                  <a href="<?= $heroSectionButton['url']; ?>" target="<?= $heroSectionButton['target']; ?>" class=""><?= $heroSectionButton['title']; ?></a>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- find section -->
  <section class="find_section ">
    <div class="container">
      <form action="">
        <div class=" form-row">
          <div class="col-md-5">
          
            <input type="text" class="form-control" placeholder="Serach Your Categories ">
          </div>
          <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Location ">
          </div>
          <div class="col-md-2">
            <button type="submit" class="">
              search
            </button>
          </div>
        </div>

      </form>
    </div>
  </section>

  
   <!-- about section -->
  
  </style>
   <section class="about_section layout_padding-bottom">
    <div class="square-box">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/square.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
          <img src="<?=get_field('home_about_section_image'); $url ?>" alt="<?php the_title(); ?>">
          </div>
        </div>
        <div class="col-md-6">
         <div class="detail-box">
          <div class="heading_container">
            <?php if (get_field('home_about_section_title')) { ?>
                <h2><?= get_field('home_about_section_title');?></h2>
              <?php } ?>
              <p><?= get_field('home_about_section_content');?></p>
              <?php if (get_field('home_about_section_button')) {
                $houseSectionButton = get_field('home_about_section_button');
                ?>
                <div class="btn-box">
                  <a href="<?= $houseSectionButton['url']; ?>" target="<?= $houseSectionButton['target']; ?>" class=""><?= $houseSectionButton['title']; ?></a>
                </div>
              <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- sale section -->

<?php
  $args = array(
    'post_type' => 'house',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'order'    => 'DESC',
    'posts_per_page' => get_field('home_house_section_num_of_post') ? get_field('home_house_section_num_of_post') : 6
  );
  $result = new WP_Query($args);
  if ($result->have_posts()) :
  ?>
    
  <section class="sale_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="heading_container">
      <?php if (get_field('home_house_section_title')) { ?>
          <h2><?= get_field('home_house_section_title');?></h2>
            <?php } ?>
            <p><?= get_field('home_house_section_content');?></p>
      </div>
      <div class="sale_container">
        
        <?php while ($result->have_posts()) : $result->the_post(); ?>
          <div class="box">
            <div class="img-box">
              <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>
              <img src="<?= $url ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="detail-box">
              <h6><?php the_title(); ?></h6>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        <?php endwhile; ?> 
      </div>
      <?php wp_reset_postdata(); ?> 
      <?php if (get_field('home_house_section_button')) {
                $houseSectionButton = get_field('home_house_section_button');
                ?>
                <div class="btn-box">
                  <a href="<?= $houseSectionButton['url']; ?>" target="<?= $houseSectionButton['target']; ?>" class=""><?= $houseSectionButton['title']; ?></a>
                </div>
              <?php } ?>
    </div>
  </section>
  <?php wp_reset_postdata(); ?> 
  <?php endif; ?> 
  <!-- end sale section -->
  <!-- price section -->
  <section class="price_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <?php if (get_field('home_pricing_section_title')) { ?>
          <h2><?= get_field('home_pricing_section_title');?></h2>
        <?php } ?>
        <p><?= get_field('home_pricing_section_content');?></p>
      </div>
      <div class="price_container">
        <?php
        $pricingRepeater = get_field('home_pricing_section_repeater');
        if ($pricingRepeater && count($pricingRepeater)) {
          foreach ($pricingRepeater as $key => $pricing) {
            ?>
            <div class="box">
              <div class="detail-box">
                <div class="heading-box">
                  <h4><?= $pricing['title']; ?></h4>
                  <h6><?= $pricing['content']; ?></h6>
                </div>
                <div class="text-box">
                  <h2> $<?= $pricing['price']; ?></h2>
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
              </div>
                  <?php if (get_field('home_pricing_section_button')) {
                $houseSectionButton = get_field('home_pricing_section_button');
                ?>
                <div class="btn-box">
                  <a href="<?= $houseSectionButton['url']; ?>" target="<?= $houseSectionButton['target']; ?>" class=""><?= $houseSectionButton['title']; ?></a>
                </div>
              <?php } ?>
            </div>
            <?php
            # code...
          }
        }
        ?>
      </div>
    </div>
  </section>
  <!-- end price section -->
  <!-- deal section -->
  <section class="deal_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
            <?php if (get_field('home_deal_section_title')) { ?>
          <h2><?= get_field('home_deal_section_title');?></h2>
        <?php } ?>
        <p><?= get_field('home_deal_section_content');?></p>
            </div>
            <?php if (get_field('home_deal_section_button')) {
                $dealSectionButton = get_field('home_deal_section_button');
                ?>
                <div class="btn-box">
                  <a href="<?= $dealSectionButton['url']; ?>" target="<?= $dealSectionButton['target']; ?>" class=""><?= $dealSectionButton['title']; ?></a>
                </div>
              <?php } ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <?php
              $images = get_field('home_deal_section_image');
              if($images && count($images)): ?>
                <?php foreach( $images as $image ): ?>
                  <div class="box b1">
                    <img src="<?= $image; ?>"/>
                  </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <!-- end deal section -->
  <!-- us section -->
  
  <section class="us_section layout_padding2">
    <div class="container">
      <div class="heading_container">
      <?php if (get_field('home_choose_section_title')) { ?>
          <h2><?= get_field('home_choose_section_title');?></h2>
        <?php } ?>
      </div>
       <div class="row">
        <?php
          $pricingRepeater = get_field('home_choose_section_repeater');
          if ($pricingRepeater && count($pricingRepeater)) {
            foreach ($pricingRepeater as $key => $pricing) {
              ?>
              <div class="col-md-3 col-sm-6">
                <div class="box">
                  <div class="img-box">
                    <img src="<?= $pricing['image1']; ?>" alt="">
                  </div>
                  <div class="detail-box">
                    <h3 class="price"><?= $pricing['price']; ?></h3>
                    <h5><?= $pricing['content']; ?></h5>
                  </div>
                </div>
              </div>
              <?php
            }
          }
        ?>
      </div>
      <div class="btn-box">
      <?php if (get_field('home_choose_section_button')) {
                $dealSectionButton = get_field('home_choose_section_button');
                ?>
                <div class="btn-box">
                  <a href="<?= $dealSectionButton['url']; ?>" target="<?= $dealSectionButton['target']; ?>" class=""><?= $dealSectionButton['title']; ?></a>
                </div>
              <?php } ?>
     </div>
    </div>
  </section>
  <!-- end us section -->

  <!-- client secction -->

  
  <?php
  $arg = array(
    'post_type' => 'testimonial',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'order'    => 'DESC',
    // 'posts_per_page' => -1
    'posts_per_page' => get_field('home_client_section_num_of_post') ? get_field('home_client_section_num_of_post') : 1
  );
  $results = new WP_Query($arg);
  if ($results->have_posts()) { ?>
    <section class="client_section layout_padding">
      <div class="container-fluid">
        <div class="heading_container">
          <?php if (get_field('home_client_section_title')) { ?>
            <h2><?= get_field('home_client_section_title');?></h2>
          <?php } ?>
        </div>

        <div class="client_container">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php
                $n=0;
                while ($results->have_posts()) : $results->the_post();
                $n++;
                ?>
                <div class="carousel-item <?= $n === 1 ? 'active' :''; ?>">
                  <div class="box">
                    <div class="img-box">
                      <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>
                      <img src="<?= $url ?>" alt="<?php the_title(); ?>">
                    </div>
                    <div class="detail-box">
                      <h5>
                        <span><?php the_title(); ?></span>
                        <hr>
                      </h5>
                      <p><?php the_content(); ?></p>
                    </div>
                  </div>
                </div> 
              <?php endwhile;?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div> 
        </div>  
      </div>  
    </section>
  <?php } ?>
  <?php wp_reset_postdata();?>
  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section ">
    <div class="container">
      <div class="heading_container">
         <?php if (get_field('home_contact_section_title')) { ?>
              <h2><?= get_field('home_contact_section_title');?></h2>
            <?php } ?>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 ">
          <div class="form_container">
            <form action="" method="post">
            <div>
              <?php
                echo do_shortcode('[contact-form-7 id="535" title="Contact with us"]')?>
      
              </div>
              <div class="d-flex ">
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>