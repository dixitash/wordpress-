<?php 
/*
* Template Name: Contact us Post
*/
?>

<?php get_header();?>

<br><br>
<section class="contact_section ">
    <div class="container">
      <div class="heading_container">
         <?php if (get_field('Contact_section_title')) { ?>
              <h2><?= get_field('Contact_section_title');?></h2>
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
                <form action="" id="contactForm" method="post">
          <div>
                <?php
                echo do_shortcode('[contact-form-7 id="535" title="Contact with us"]')?>
              </div>
              </div>
            </form>
            <div id="postData"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <?php get_footer();?>
  
 
  
