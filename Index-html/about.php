<?php 
/*
* Template Name: About
*/
?>
<?php get_header(); ?>

<section class="about_section layout_padding-bottom">
    <div class="square-box">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/square.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
          <img src="<?=get_field('About_section_image'); $url ?>" alt="<?php the_title(); ?>">
          </div>
        </div>
        <div class="col-md-6">
         <div class="detail-box">
          <div class="heading_container">
            <?php if (get_field('About_section_title')) { ?>
                <h2><?= get_field('About_section_title');?></h2>
              <?php } ?>

              <p><?= get_field('About_section_content');?></p>
              <?php if (get_field('About_section_button')) {
                $houseSectionButton = get_field('About_section_button');
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
<?php get_footer(); ?>