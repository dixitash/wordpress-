<?php 
/*
* Template Name:Pricing Post
*/
?>
<?php get_header();?>

<br><br>
<section class="price_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <?php if (get_field('Pricing_section_title')) { ?>
          <h2><?= get_field('Pricing_section_title');?></h2>
        <?php } ?>
        <p><?= get_field('Pricing_section_content');?></p>
      </div>
      <div class="price_container">
        <?php
        $pricingRepeater = get_field('Pricing_section_repeater');
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
                  <?php if (get_field('Pricing_section_button')) {
                $houseSectionButton = get_field('Pricing_section_button');
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
  <?php get_footer();?>