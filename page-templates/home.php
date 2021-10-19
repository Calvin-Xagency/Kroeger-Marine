<?php
   /*
    Template Name: Home
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); 


?>

<!-- Jumbotron Hero -->
<section id="jumbotron">
   <div class="jumbo_inner owl-carousel owl-one owl-theme">
      <!-- The Slide Loop/Repeater -->
      <?php if( have_rows('hero_slider') ): ?>
      <?php while( have_rows('hero_slider') ): the_row();
         // vars
         $subtitle = get_sub_field('slide_subtitle');
         $title= get_sub_field('slide_title');
         $button = get_sub_field('button_text');
           $link = get_sub_field('button_link');
           $bgimage = get_sub_field('background_image');

         ?>
      <!-- The Slide -->
      <div class="jumbo_slide jumbo_slide_1 jquery-background-video" style="background-image: url(<?php echo $bgimage['url']; ?>)">
         <!-- If Video is True...Display Video -->
         <?php if ( get_sub_field( 'video' ) ): ?>
         <video class="jquery-background-video" autoplay muted loop poster="/wp-content/themes/kroeger-marine/img/water-frame.jpg">
            <source src="/wp-content/themes/kroeger-marine/img/water-loop.mp4" type="video/mp4">
         </video>
         <?php else: ?>
         <?php endif; ?>
         <!-- End Video If/Else -->
         <!-- Slide Content -->
         <?php if ( $link == '/loyalty' ) : ?>
            <div class="row jumbo_content loyalty">
               <div class="col-12">
                  <h1><?php echo $title; ?></h1>
                  <h3><?php echo $subtitle; ?></h3>
               </div>
               <div class="explore-dock">
                  <a class="link-dark" href="<?php echo $link; ?>"><?php echo $button; ?></a>
               </div>
            </div>
         <?php else : ?>
            <div class="row jumbo_content" >
               <div class="col-12">
                  <h3><?php echo $subtitle; ?></h3>
                  <h1><?php echo $title; ?></h1>
               </div>
               <div class="explore-dock">
                  <a class="link-dark" href="<?php echo $link; ?>"><?php echo $button; ?></a>
               </div>
            </div>
         <?php endif; ?>
         <!-- End Slide Content -->
      </div>
      <!-- End Slide -->
      <?php endwhile; ?>
      <?php endif; ?>
      <!-- End Slide Loop/Repeater -->
   </div>
   <!-- Slider Nav Dots -->
   <div class="slider-nav">
      <!-- Slider Counter -->
      <h3><span class="counter-1"></span><span class="counter-divider">/</span><span class="counter-2"></span></h3>
   </div>
</section>
<!-- End Jumbo -->
<!-- Grid Section -->
<section>
   <div class="container-fluid grid-wrapper wow fadeInUp" data-wow-delay=".1s">
     <?php
      $grid = get_field('image_grid');
      if( $grid ): ?>
      <!-- Grid Item 1 -->

      <div class="grid-item">
         <a href="<?php echo ( $grid['link_1'] ); ?>" class="grid-item-inner">
            <div class="grid-item-image" style="background-image: url(<?php echo esc_url( $grid['image_1']['url'] ); ?>)"></div>
            <div class="grid-item-hover"></div>
            <div class="grid-item-name"><?php echo ( $grid['title_1'] ); ?></div>
         </a>
      </div>
      <!-- Grid Item 2 -->
      <div class="grid-item">
         <a href="<?php echo ( $grid['link_2'] ); ?>" class="grid-item-inner">
            <div class="grid-item-image" style="background-image: url(<?php echo esc_url( $grid['image_2']['url'] ); ?>)"></div>
            <div class="grid-item-hover"></div>
            <div class="grid-item-name"><?php echo ( $grid['title_2'] ); ?></div>
         </a>
      </div>
      <!-- Grid Item 3 -->
      <div class="grid-item">
         <a href="<?php echo ( $grid['link_3'] ); ?>" class="grid-item-inner">
            <div class="grid-item-image" style="background-image: url(<?php echo esc_url( $grid['image_3']['url'] ); ?>)"></div>
            <div class="grid-item-hover"></div>
            <div class="grid-item-name"><?php echo ( $grid['title_3'] ); ?></div>
         </a>
      </div>
    <?php endif; ?>
   </div>
</section>
<section>
  <?php
   $content = get_field('main_content');
   if( $content ): ?>
   <div id="home-content">
      <div class="container home-content-sub wow fadeInUp" data-wow-delay=".2s">
         <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
               <h2 style="font-size: 32px; line-height: 35x;" class="brown-text"><?php echo ( $content['intro_title'] ); ?></h2>
            </div>
         </div>
      </div>
      <div class="container-fluid home-sec-2">
         <div class="row">
            <div class="col-lg-7 home-content-img wow fadeInUp" data-wow-delay=".2s">
               <img src="<?php echo esc_url( $content['content_image']['url'] ); ?>" alt="">
            </div>
            <div class="col-lg-5 home-content-wrapper wow fadeInUp" data-wow-delay=".3s">
               <div class="home-content-inner">
                  <?php echo ( $content['content'] ); ?>
                  <a class="btn btn-brown" href="<?php echo ( $content['link'] ); ?>"><?php echo ( $content['button'] ); ?></a>
               </div>
            </div>
         </div>
      </div>
   </div>
     <?php endif; ?>
</section>

<section>
  <?php get_template_part( '/template-parts/cta'); ?>
</section>

<?php get_footer(); ?>
<!-- Modal -->
<!-- <div class="modal fade" id="covidPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        <div class="text-center pop-icon">
          <img src="/wp-content/themes/kroeger-marine/img/popup-icon.png" alt="">
        </div>

        <h5>KROEGER MARINE</h5>

        <h1>COVID-19 Update</h1>

        <div style="width: 70px; background-color: white; height: 2px; margin: 15px auto;"></div>

        <p class="text-center mb-4">During these unprecendented times, the Kroeger Marine team is still working hard to maintain the highest level of customer service. Please call us with any questions or concerns.</p>

        <div class="contact text-center">CONTACT US AT</div>

        <div class="contact-info text-center">864-882-7671 &nbsp;&nbsp;<span class="dot">•</span>&nbsp;&nbsp; dockandrock@kroegermarine.com</div>



    </div>
  </div>
</div> -->
