
<?php
/*
* Template Name: Test Post
*/
?>
<?php
get_header(); ?>
<section class="contact_section ">
   <div class="container">

    <?php if(have_rows('content')):?>

        <?php while(have_rows('content')):the_row();?>
          <?php if(get_row_layout()=='columns_section'):
            $social = get_sub_field('columns');
            ?>
            <?php
              foreach($social as  $value):
              ?>
                <h3>
                  
                 
                  <?=$value['title'];?>
              </h3>
              <p><?=$value['content'];?>
             
            <?php endforeach;?>
            <?php endif;?>

        <?php endwhile;?>  
     <?php endif;?>    
  </dIV>
</section>
<?php get_footer(); ?>