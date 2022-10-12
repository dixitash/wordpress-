<?php 
/*
* Template Name:House Post
*/
?>
<?php get_header(); ?>

<br><br>
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
        <?php if (get_field('House_section_title')) { ?>
            <h2><?= get_field('House_section_title');?></h2>
              <?php } ?>
              <p><?= get_field('House_section_content');?></p>
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
      <?php if (get_field('House_section_button')) {
                $houseSectionButton = get_field('House_section_button');
                ?>
                <div class="btn-box">
                    <a href="<?= $houseSectionButton['url']; ?>" target="<?= $houseSectionButton['target']; ?>" class=""><?= $houseSectionButton['title']; ?></a>
                </div>
              <?php } ?>
    </div>
  </section>
  <?php endif; ?> 
<?php get_footer(); ?>